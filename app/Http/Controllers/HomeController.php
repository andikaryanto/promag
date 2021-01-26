<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use crocodicstudio\crudbooster\helpers\CRUDBooster;
use Validator;
class HomeController extends Controller

{
    //

    public function index(){
        $general = \App\general::first();
        $banners = \App\Banner::where('type','Home')->get();
        $home_banner_products = \App\HomeBannerProduct::where('status',1)->get();
      
        $articles = \App\Article::where('type','Article')->orderBy('created_at','desc')->limit(10)->get();
       
        $meta =[
            'meta_title' => $general->meta_title,
            'meta_description' => $general->meta_description,
            'meta_keyword' => $general->meta_keyword,
            'meta_robot' => $general->meta_robot,
        ];
        
        return view('frontend/index',compact('articles','home_banner_products','meta','general','banners'));
    }

    public function about() {
        $general = \App\general::first();
        $about_meta_title = \App\Setting::where('group_setting','About Setting')->where('name','meta_title')->first();
        $about_meta_desc = \App\Setting::where('group_setting','About Setting')->where('name','meta_description')->first();
        $about = \App\AboutContent::orderBy('tahun','asc')->get();
        $awards = \App\AboutContentArchieve::all();

   /*     $meta =[
            'meta_title' => $about_setting_datas->meta_title ? $about_setting_datas->meta_title : $general->meta_title,
            'meta_description' => $about_setting_datas->meta_description ? $about_setting_datas->meta_description : $general->meta_description,
            'meta_keyword' => $about_setting_datas->meta_keyword ? $about_setting_datas->meta_keyword : $general->meta_keyword,
            'meta_robot' => $about_setting_datas->meta_robot ? $about_setting_datas->meta_robot : $general->meta_robot,
        ]; */
        
             $meta =[
            'meta_title' => $about_meta_title->content,
            'meta_description' => $about_meta_desc->content,
            'meta_keyword' => $about_setting_datas->meta_keyword ? $about_setting_datas->meta_keyword : $general->meta_keyword,
            'meta_robot' => $about_setting_datas->meta_robot ? $about_setting_datas->meta_robot : $general->meta_robot,
        ];
        

        return view('frontend/pages/about',compact('about_setting_datas','awards','general','about','meta'));
    }

    public function term() {
        $general = \App\general::first();
        $detail = \App\Setting::where('group_setting','TAC Setting')->where('name','wording')->first();
        $title = 'Syarat & Ketentuan';

        $meta =[
            'meta_title' => $detail->meta_title ? $detail->meta_title : $general->meta_title,
            'meta_description' => $detail->meta_description ? $detail->meta_description : $general->meta_description,
            'meta_keyword' => $detail->meta_keyword ? $detail->meta_keyword : $general->meta_keyword,
            'meta_robot' => $detail->meta_robot ? $detail->meta_robot : $general->meta_robot,
        ];

        return view('frontend/pages/content',compact('detail', 'general', 'meta','title'));
    }

    public function privacy() {
        $general = \App\general::first();
        $detail = \App\Setting::where('group_setting','Privacy Policy Setting')->where('name','wording')->first();
        $title = 'Kebijaksanaan Privasi';

        $meta =[
            'meta_title' => $detail->meta_title ? $detail->meta_title : $general->meta_title,
            'meta_description' => $detail->meta_description ? $detail->meta_description : $general->meta_description,
            'meta_keyword' => $detail->meta_keyword ? $detail->meta_keyword : $general->meta_keyword,
            'meta_robot' => $detail->meta_robot ? $detail->meta_robot : $general->meta_robot,
        ];

        return view('frontend/pages/content',compact('detail', 'general', 'meta','title'));
    }

    public function maag_meter(){
        $general = \App\general::first();
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $data =array();
        // $data['questions'] = \App\SymptomQuestion::with('Symptoms')->get();
        
          $m_title = \App\Setting::where('group_setting','Maag Meter')->where('name','meta_title')->first();
            $m_desc = \App\Setting::where('group_setting','Maag Meter')->where('name','meta_description')->first();


        $meta =[
            'meta_title' =>$m_title->content,
            'meta_description' => $m_desc->content,
            'meta_keyword' => $general->meta_keyword,
            'meta_robot' => $general->meta_robot,
        ];

        return view('frontend/pages/maag_meter/user_maag_meter',compact('data','general','banners','meta'));
    }

    public function maag_meter_kalbe(){
        $data =array();
        return view('frontend/pages/maag_meter_kalbe/user_maag_meter_kalbe',compact('data'));
    }

    public function maag_meter_stepbystep(Request $request){

        $general = \App\general::first();
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $data =array();
        // $data['questions'] = \App\SymptomQuestion::with('Symptoms')->get();

        $meta =[
            'meta_title' =>$general->meta_title,
            'meta_description' => $general->meta_description,
            'meta_keyword' => $general->meta_keyword,
            'meta_robot' => $general->meta_robot,
        ];

        $user=[
                'name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
            ];

        return view('frontend/pages/maag_meter/maag_meter_stepbystep',compact('user','data','general','banners','meta'));
    }

    public function save_maag_meter(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'name'    => 'required',
                'gender' => 'required',
                'age' => 'required|numeric|max:99',
            ] 
        );
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->messages()]);
        }else {
            $user=[
                'name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
            ];
            session(['user' => $user]);
            return redirect('maag-meter/diet/#diet');
        }
    }

    public function maag_meter_diet(){
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $general = \App\general::first();
        $user = session('user')  ? session('user')  : [];
        
        if(count($user) == 0){
            return redirect('maag-meter');
        }
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',1)->first();
        return view('frontend/pages/maag_meter/maag_meter_pola_makan',compact('general','user','data','banners'));
    }

    public function save_maag_meter_diet(Request $request){
        $data =array();
       
       $data = $request->PM;
       
        session(['diet' => $data]);
        return redirect('maag-meter/lifestyle/#lifestyle');
    }

    public function maag_meter_lifestyle(){
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter/diet');
        }
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',2)->first();
        $general = \App\general::first();
        return view('frontend/pages/maag_meter/maag_meter_pola_hidup',compact('general','user','data','banners'));
    }

    public function save_maag_meter_lifestyle(Request $request){
        $data =array();

        $data = $request->PH;
      
        session(['lifestyle' => $data]);
        return redirect('maag-meter/symptom/#symptom');
    }

    public function maag_meter_symptom(){
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter/diet');
        }
        $lifestyle = session('lifestyle') ? session('lifestyle') : [];
        if(count($lifestyle) == 0){
            return redirect('maag-meter/lifestyle');
        }
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',3)->first();
        $general = \App\general::first();
        return view('frontend/pages/maag_meter/maag_meter_gejala',compact('general','user','data','banners'));
    }

    public function save_maag_meter_symptom(Request $request){
        $data =array();

       $data = $request->S;
       
        session(['symptom' => $data]);
        return redirect('maag-meter/symptomtime/#symptomtime');
    }

    public function maag_meter_symptom_time(){
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter/diet');
        }
        $lifestyle = session('lifestyle') ? session('lifestyle') : [];
        if(count($lifestyle) == 0){
            return redirect('maag-meter/lifestyle');
        }
        $symptom = session('symptom') ? session('symptom') : [];
        if(count($symptom) == 0){
            return redirect('maag-meter/symptom');
        }
        
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',4)->first();
        $general = \App\general::first();
        return view('frontend/pages/maag_meter/maag_meter_waktu_gejala',compact('general','user','data','banners'));
    }

    public function save_maag_meter_symptom_time(Request $request){
        $data =array();

        $data = $request->ST;
       
        session(['symptomtime' => $data]);
       
        return redirect('maag-meter/symptomeffect/#symptomeffect');
    }

    public function maag_meter_symptom_effect(){
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter/diet');
        }
        $lifestyle = session('lifestyle') ? session('lifestyle') : [];
        if(count($lifestyle) == 0){
            return redirect('maag-meter/lifestyle');
        }
        $symptom = session('symptom') ? session('symptom') : [];
        if(count($symptom) == 0){
            return redirect('maag-meter/symptom');
        }
        $symptomtime = session('symptomtime') ? session('symptomtime') : [];
        if(count($symptomtime) == 0 ){
            return redirect('maag-meter/symptomtime');
        }
       

        $data = \App\SymptomQuestion::with('Symptoms')->where('id',5)->first();
        $general = \App\general::first();
        return view('frontend/pages/maag_meter/maag_meter_dampak_gejala',compact('general','user','data','banners'));
    }

    public function save_maag_meter_symptom_effect(Request $request){
        $data =array();

        $data = $request->Effect;
       
        session(['symptomeffect' => $data]);
        return redirect('maag-meter/result');
    }

    public function maag_meter_result(Request $request){
        $banners = \App\Banner::where('type','Maag Meter')->first();
        $user=[
                'name' => $request->user_name,
                'age' => $request->user_age,
                'gender' => $request->user_gender,
        ];

        $makan = !empty($request->makan) ? $request->makan : [];
        $gaya = !empty($request->gaya) ? $request->gaya : [];
        $gejala = !empty($request->gejala) ? $request->gejala : [];
        $lamagejala = !empty($request->lamagejala) ? $request->lamagejala : 0;
        $ganggu = !empty($request->ganggu) ? $request->ganggu : 0;

        $symptoms = \App\Symptom::wherein('id',$gejala)->pluck('symptom')->toArray();
        $general = \App\general::first();
       
        $result=array();

        if( in_array(15,$gejala) || in_array(16,$gejala) || in_array(17,$gejala) || in_array(18,$gejala)  ){
           // echo "masuk tahap 1 pilihan a";
            if(in_array(24,$gejala) && in_array(25,$gejala)){
                // echo "masuk sub tahap 1a ";
                if(count($gejala)>0 && count($lamagejala)>0  && $ganggu !=''  ){
                
                    if($lamagejala == 30){
                        // echo "pilihan a1";
                        $result= \App\Result::find(4);
                       
                    }else{
                        // echo "pilihan b1";
                        $result= \App\Result::find(5);
                    }
                }
            }elseif(in_array(24,$gejala) || in_array(25,$gejala)){
                // echo "masuk sub tahap 1b ";
                if(count($gejala)>0 && count($lamagejala)>0 && $ganggu !=''  ){
                    // echo "masuk syarat 1b ";
                    //if( in_array(26,$gejala) || in_array(27,$gejala) || in_array(28,$gejala) || in_array(29,$gejala)   ){
                        // echo "masuk syarat sub 1b ";
                        if($lamagejala == 30){
                            // echo "pilihan a2";
                            $result= \App\Result::find(8);
                           
                        }else{
                            // echo "pilihan b2";
                            $result= \App\Result::find(9);
                        }
                    //}
                    
                }
            }else{
                // echo "masuk syarat 1c ";
                if(count($gejala)>0 && count($lamagejala)>0 &&  $ganggu != ''   ){
                    // echo "masuk syarat sub 1c ";
                    if($lamagejala == 30){
                        // echo "pilihan c1 ";
                        $result= \App\Result::find(1);
                       
                    }else{
                        // echo "pilihan c2 ";
                        $result= \App\Result::find(2);
                    }
                }
            }
            
        }else{
            // echo "masuk tahap 1 pilihan b ";
            if(in_array(24,$gejala) && in_array(25,$gejala)){
                // echo "masuk syarat 1 pilihan b sub a1";
                if(count($gejala)>0 && count($lamagejala)>0 && $ganggu != ''  ){
                    // echo "masuk syarat 1 pilihan b sub a1 subsub a1";
                    $result= \App\Result::find(3);
                }
            }elseif(in_array(24,$gejala) || in_array(25,$gejala)){
                 // echo "masuk syarat 1 pilihan b sub b1";
                if( in_array(19,$gejala) || in_array(20,$gejala) || in_array(21,$gejala) || in_array(22,$gejala)  || in_array(23,$gejala)  ){
                    // echo "masuk syarat 1 pilihan b sub b1 subsub b1";
                    $result= \App\Result::find(10);
                }else{
                     // echo "masuk syarat 1 pilihan c sub c1 subsub c1";
                    $result= \App\Result::find(6);
                }
            }else{
                // echo "masuk syarat 1 pilihan b sub a2";
                $result= \App\Result::find(6);
                
            }
        }

        $polas =array();
        $tips =array();
        foreach($makan as $key => $value){
            // if($value == '3'){
                $p = \App\Symptom::where('id',$value)->first();
                $polas[] = ['symptom' => $p->symptom,
                            'icon' => $p->icon,
                            ];
                $tips[] = $p->tips;

            // }
        }

        foreach($gaya as $key => $value){
            // if($value == '3'){
                $p = \App\Symptom::where('id',$value)->first();
                $polas[] = ['symptom' => $p->symptom,
                            'icon' => $p->icon,
                            ];
                $tips[] = $p->tips;

            // }
        }

        // echo "<pre>";
        // print_r($polas);

        // echo "<pre>";
        // print_r($tips);

        // echo "<pre>";
        // print_r($result->name, $resul->label);

        // echo "<pre>";
        // print_r($user);

        // echo "<pre>";
        // print_r($makan);

        // echo "<pre>";
        // print_r($gaya);

        // echo "<pre>";
        // print_r($gejala);

        // echo "<pre>";
        // print_r($lamagejala);

        // echo "<pre>";
        // print_r($ganggu); 

        if($result->name == "Sakit Maag Akut" || $result->name == "Sakit Maag Akut & Kemungkinan GERD" || $result->name == "Sakit Maag Kronis & Kemungkinan GERD"){
            $slug = "promag-cair";
        }else if($result->name == "Sakit Maag Kronis" || $result->name == "GERD" || $result->name == "Sakit Maag akut yang disertai GERD" || $result->name == "Sakit Maag kronis yang disertai GERD" || $result->name == "Kamu kemungkinan menderita GERD"){
            $slug = "promag-double-action";
        }

        $product = \App\product::where('slug',$slug)->first();

        if($product){
            $solution = 'product/detail/'.$product->slug;
        }else{
            $solution = "article/list";
        }

        $data = \App\MaagMeterData::create(
            [
                'name' => $user['name'],
                'gender' => $user['gender'],
                'age' => $user['age'],
                'diet' => implode('|',$makan),
                'lifestyle' => implode('|',$gaya),
                'symptom' => implode('|',$gejala),
                'symptomtime' => $lamagejala,
                'symptomeffect' => $ganggu,
                'result' => $result->label.' '.$result->name,   
            ]
        );

        $articles = \App\Article::limit(3)->get();

        return view('frontend/pages/maag_meter/maag_meter_result',compact('user','banners','general','symptoms','result','solution','articles', 'tips', 'polas'));
    }

    public function product_list() {
        $products = \App\product::where('status',1)->orderBy('id','asc')->get();
        $general = \App\general::first();
          $p_title = \App\Setting::where('group_setting','Product List')->where('name','meta_title')->first();
            $p_desc = \App\Setting::where('group_setting','Product List')->where('name','meta_description')->first();


        $meta =[
            'meta_title' => $p_title->content,
            'meta_description' => $p_desc->content,
            'meta_keyword' => $detail->meta_keyword ? $detail->meta_keyword : $general->meta_keyword,
            'meta_robot' => $detail->meta_robot ? $detail->meta_robot : $general->meta_robot,
        ];

        return view('frontend/pages/products/product_list',compact('general','products','meta') );
    }

    public function product_detail($slug) {

        if($slug){
   
            $general = \App\general::first();
            $detail = \App\product::where('slug',$slug)->first();
            $detail->view = $detail->view+1;
            $detail->save();

            $meta =[
                'meta_title' => $detail->meta_title ? $detail->meta_title : $detail->name,
                'meta_description' => $detail->meta_description ? $detail->meta_description : $detail->description,
                'meta_keyword' => $detail->meta_keyword ? $detail->meta_keyword : $general->title,
                'meta_robot' => $detail->meta_robot ? $detail->meta_robot : $general->meta_robot,
            ];

            $others = \App\Product::limit(3)->get();
            if($detail){
                return view('frontend/pages/products/product_detail',compact('meta','detail','others','general'));
            }
        }
       
    }

    public function save_checker(Request $request){
        $result =array();
        if($request->input('radio')){
            $radios = $request->input('radio');
           
            foreach($radios as $id => $answer){
                $symptom = \App\Symptom::find($id);
                $result[$symptom->Question->question][] = [$symptom->symptom => $answer];
            }
        }
        if($request->input('choose')){
            $ch2 = $request->input('choose');
           
            foreach($ch2 as $id => $answer){
                $symptom = \App\Symptom::find($answer);
                $result[$symptom->Question->question] = $symptom->symptom ;
            }
        }
        $data['symptom']= $result;
        $data['result']= $this->solution($request);
       
    }

    function solution($request){
        $result=array();
        if($request->input('radio')){
            $radios = $request->input('radio');
            if( array_key_exists(15,$radios) || array_key_exists(16,$radios) || array_key_exists(17,$radios) || array_key_exists(18,$radios)  ){
              
                if($request->input('choose')){
                    $ch2 = $request->input('choose');
                    if($ch2[4] == 30){
                        $result['hasil diagnosa']='Maag Akut';
                        $result['product'] =[1,2];
                    }else{
                        $result['hasil diagnosa']='Maag Kronik';
                        $result['product'] =[1,2,3];
                    }
                }
            }elseif(array_key_exists(24,$radios) && array_key_exists(25,$radios)){
                if( array_key_exists(15,$radios) || array_key_exists(16,$radios) || array_key_exists(17,$radios) || array_key_exists(18,$radios)  ){
                    if($request->input('choose')){
                        $ch2 = $request->input('choose');
                        if($ch2[4] == 30){
                            $result['hasil diagnosa']='Maag Akut + GERD ';
                            $result['product'] =[3];
                        }elseif($ch2[4] == 31){
                            $result['hasil diagnosa']='Maag Kronis + GERD ';
                            $result['product'] =[3];
                        }
                    }
                }else{
                    $result['hasil diagnosa']='GERD ';
                    $result['product'] =[3];
                }
            }elseif(array_key_exists(24,$radios) || array_key_exists(25,$radios)){
                if( array_key_exists(15,$radios) || array_key_exists(16,$radios) || array_key_exists(17,$radios) || array_key_exists(18,$radios)  ){
                    if($request->input('choose')){
                        $ch2 = $request->input('choose');
                        if($ch2[4] == 30){
                            $result['hasil diagnosa']='Maag Akut + GERD ';
                            $result['product'] =[3];
                        }elseif($ch2[4] == 31){
                            $result['hasil diagnosa']='Maag Kronis + GERD ';
                            $result['product'] =[3];
                        }
                    }
                }else{
                    $result['hasil diagnosa']='GERD ';
                    $result['product'] =[3];
                }
            }else{
                $result['hasil diagnosa']='belum mengalami sakit MAAG ';
                $result['product'] =[];
            }
        }
        return $result;
    }

    function postSubscribe(Request $request ){
        $email = $request->emailsubs;
        $subs = \App\Subscriber::firstorcreate(['email' =>$email]);
       
       
        return response()->json(array(
            'response' => 'success',
            'message' => 'Your email has been added'));

    }

    public function article_list(Request $request) {
        $general = \App\general::first();
        $category = $request->category;
        $sortby = $request->sortby;
        $keyword = $request->keyword;
       
        
        $tag = $request->tag;

        if($category){
            if($sortby==3){
                $articles = \App\Article::orderBy('created_at','asc')
                ->where('article_categories_id',$category);
            }elseif($sortby==2){
                $articles = \App\Article::orderBy('view','desc')
                ->where('article_categories_id',$category);
            }else{
                $articles = \App\Article::orderBy('created_at','desc')
                ->where('article_categories_id',$category);
            }
           
        }else{
            if($tag){
                if($sortby==3){
                    $articles = \App\Article::orderBy('created_at','asc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Article');
                }elseif($sortby==2){
                    $articles = \App\Article::orderBy('view','desc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Article');
                }else{
                    $articles = \App\Article::orderBy('created_at','desc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Article');
                }

            }else{
                if($sortby==3){
                    $articles = \App\Article::orderBy('created_at','asc')
                    ->where('type','Article');
                }elseif($sortby==2){
                    $articles = \App\Article::orderBy('view','desc')
                    ->where('type','Article');
                }else{
                    $articles = \App\Article::orderBy('created_at','desc')
                    ->where('type','Article');
                }
               
            }
            
       }
       if($keyword) {
        $articles = $articles->where('title','like','%'.strtolower($keyword).'%');
       }

       $articles = $articles->paginate(6);
       
         $a_title = \App\Setting::where('group_setting','Article List')->where('name','meta_title')->first();
            $a_desc = \App\Setting::where('group_setting','Article List')->where('name','meta_description')->first();


       $meta =[
            'meta_title' => $a_title->content,
            'meta_description' => $a_desc->content,
            'meta_keyword' => $detail->meta_keyword ? $detail->meta_keyword : $general->meta_keyword,
            'meta_robot' => $detail->meta_robot ? $detail->meta_robot : $general->meta_robot,
        ];
        
        return view('frontend/pages/artikel/artikel_list',compact('general','articles','tag','category','meta'));
    }

    public function article_detail($slug) {
        if($slug){
            $general = \App\general::first();
            $detail = \App\Article::where('slug',$slug)->where('type','Article')->first();
            $detail->view = $detail->view+1;
            $detail->save();
            $tags = explode(',',$detail->tags);
            $others_id =array();
           

            $meta =[
                'meta_title' => $detail->meta_title ? $detail->meta_title." - Promag" : $detail->title." - Promag",
                'meta_description' => $detail->meta_description ? $detail->meta_description : $detail->Category->name,
                'meta_keyword' => $detail->meta_keyword ? $detail->meta_keyword : $general->title,
                'meta_robot' => $detail->meta_robot ? $detail->meta_robot : $general->meta_robot,
                'alt_image' => $detail->alt_image ? $detail->alt_image : 'promag',
            ];
    

            foreach($tags as $key => $tag){
                $tags_id = \App\Article::where('tags','like','%'.$tag.'%')
                            ->where('id','<>',$detail->id)
                            ->where('type','Article')
                            ->pluck('id')->toArray();
                $others_id = array_merge($tags_id,$others_id);
              
            }

            $others = \App\Article::wherein('id',$others_id)->limit(3)->get();
            if($detail){
                return view('frontend/pages/artikel/artikel_detail',compact('meta','detail','others','general'));
            }
        }
       
    }

    public function search(Request $request) {
        $general = \App\general::first();
        $keyword = $request->keyword;
        $type = $request->type;
        $total =  $articles = \App\Article::orderBy('created_at','desc')
                        ->where(function ($query) use($keyword){
                            $query->where('title','like','%'.$keyword.'%')
                            ->orwhere('tags','like','%'.$keyword.'%');
                        })
                        ->where('type',$type)
                        ->count();
        $articles = \App\Article::orderBy('created_at','desc')
        ->where(function ($query) use($keyword){
            $query->where('title','like','%'.$keyword.'%')
            ->orwhere('tags','like','%'.$keyword.'%');
        })
        ->where('type',$type)
        ->paginate(3);
        
        return view('frontend/pages/search/search_result',compact('general','articles','keyword','total'));
    }

    public function video_list(Request $request) {
        $general = \App\general::first();

        $type = $request->type;

        $video_setting_datas = \App\Setting::where('group_setting','Video Setting')->get();
       
        foreach($video_setting_datas as $data){
            $video_setting[$data->name] = $data->content;
        }
        if($type){
            $videos = \App\Video::where('type',$type)->paginate(3);
        }else{
            $type='Video';
            $videos = \App\Video::where('type','Video')->paginate(3);
        }

        return view('frontend/pages/video/video_list',compact('general','videos','type','video_setting'));
        
    }

    public function contact() {
        $general = \App\general::first();
        
        return view('frontend/contact',compact('general'));
    }

    public function send_contact(Request $request) {
        $general = \App\general::first();   
        $to = $general->email_to;
        $response =array();
        
            if($request->submit == 'send'){
                    $data = [
                            'category'=> $request->category,
                            'title'=> $request->title,
                            'name'=> $request->name,
                            'organization'=> $request->organization,
                            'email'=> $request->email,
                            'phone'=> $request->phone,
                            'message' => $request->message,
                    ];
                   
                 
                    $a =CRUDBooster::sendEmail(['to'=>$to,'data'=>$data,'template'=>'contact_us_template',]);


                    $data_thanks = ['name' => $request->name];

                    CRUDBooster::sendEmail(['to'=>$request->email,'data'=>$data_thanks,'template'=>'thankyou_contact_us',]);


                    return redirect('contact')
                        ->with('message', 'Pesan Anda berhasil dikirim')
                        ->with('status', 'success');
            }
        
        return view('contact',compact('response'));
    }

    public function seputar_maag() {
        $general = \App\general::first();
        
        $seputar_maag_setting = \App\Setting::where('group_setting','Seputar Maag Setting')->first();
        $meta =[
            'meta_title' => $seputar_maag_setting->meta_title ? $seputar_maag_setting->meta_title : $general->meta_title,
            'meta_description' => $seputar_maag_setting->meta_description ? $seputar_maag_setting->meta_description : $general->meta_description,
            'meta_keyword' => $seputar_maag_setting->meta_keyword ? $seputar_maag_setting->meta_keyword : $general->meta_keyword,
            'meta_robot' => $seputar_maag_setting->meta_robot ? $seputar_maag_setting->meta_robot : $general->meta_robot,
        ];
        return view('frontend/pages/seputar_maag/menu_seputar_maag',compact('meta','general','seputar_maag_setting'));
    }

    public function seputar_maag_symptom_list(Request $request) {
        $general = \App\general::first();
        $sortby = $request->sortby;
        $category = $request->category;

        $tag = $request->tag;
        if($category){
            if($sortby==3){
                $articles = \App\Article::orderBy('created_at','asc')
                ->where('article_categories_id',$category)
                ->paginate(6);
            }elseif($sortby==2){
                $articles = \App\Article::orderBy('view','desc')
                ->where('article_categories_id',$category)
                ->paginate(6);
            }else{
                $articles = \App\Article::orderBy('created_at','desc')
                ->where('article_categories_id',$category)
                ->paginate(6);
            }
           
        }else{
            if($tag){
                if($sortby==3){
                    $articles = \App\Article::orderBy('created_at','asc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Symptom')
                    ->paginate(6);
                }elseif($sortby==2){
                    $articles = \App\Article::orderBy('view','desc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Symptom')
                    ->paginate(6);
                }else{
                    $articles = \App\Article::orderBy('created_at','desc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Symptom')
                    ->paginate(6);
                }

            }else{
                if($sortby==3){
                    $articles = \App\Article::orderBy('created_at','asc')
                    ->where('type','Symptom')
                    ->paginate(6);
                }elseif($sortby==2){
                    $articles = \App\Article::orderBy('view','desc')
                    ->where('type','Symptom')
                    ->paginate(6);
                }else{
                    $articles = \App\Article::orderBy('created_at','desc')
                    ->where('type','Symptom')
                    ->paginate(6);
                }
            
            }
        }
        
        return view('frontend/pages/seputar_maag/symptom_list',compact('general','articles','tag' ,'category'));
    }

    public function seputar_maag_symptom_detail($slug) {
        $general = \App\general::first();
        if($slug){
            $detail = \App\Article::where('slug',$slug)->where('type','Symptom')->first();
            $detail->view = $detail->view+1;
            $detail->save();
            $tags = explode(',',$detail->tags);
            $others_id =array();
           
            foreach($tags as $key => $tag){
                $tags_id = \App\Article::where('tags','like','%'.$tag.'%')
                            ->where('id','<>',$detail->id)
                            ->where('type','Article')
                            ->pluck('id')->toArray();
                
                            $others_id = array_merge($tags_id,$others_id);
              
            }

           
            $others = \App\Article::wherein('id',$others_id)->limit(3)->get();
            if($detail){
                return view('frontend/pages/seputar_maag/symptom_detail',compact('general','detail','others'));
            }
        }
       
    }

    public function seputar_maag_fact_list(Request $request) {
        $general = \App\general::first();
        $sortby = $request->sortby;
       

        $category = $request->category;

        $tag = $request->tag;
        if($category){
            if($sortby==3){
                $articles = \App\Article::orderBy('created_at','asc')
                ->where('article_categories_id',$category)
                ->paginate(6);
            }elseif($sortby==2){
                $articles = \App\Article::orderBy('view','desc')
                ->where('article_categories_id',$category)
                ->paginate(6);
            }else{
                $articles = \App\Article::orderBy('created_at','desc')
                ->where('article_categories_id',$category)
                ->paginate(6);
            }
           
        }else{
            if($tag){
                if($sortby==3){
                    $articles = \App\Article::orderBy('created_at','asc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Fact')
                    ->paginate(6);
                }elseif($sortby==2){
                    $articles = \App\Article::orderBy('view','desc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Fact')
                    ->paginate(6);
                }else{
                    $articles = \App\Article::orderBy('created_at','desc')
                    ->where('tags','like','%'.$tag.'%')
                    ->where('type','Fact')
                    ->paginate(6);
                }

            }else{
                if($sortby==3){
                    $articles = \App\Article::orderBy('created_at','asc')
                    ->where('type','Fact')
                    ->paginate(6);
                }elseif($sortby==2){
                    $articles = \App\Article::orderBy('view','desc')
                    ->where('type','Fact')
                    ->paginate(6);
                }else{
                    $articles = \App\Article::orderBy('created_at','desc')
                    ->where('type','Fact')
                    ->paginate(6);
                }
            
            }
        }
        return view('frontend/pages/seputar_maag/fact_list',compact('general','articles','tag'));
    }

    public function seputar_maag_fact_detail($slug) {
        $general = \App\general::first();
        if($slug){
            $detail = \App\Article::where('slug',$slug)->where('type','Fact')->first();
            $detail->view = $detail->view+1;
            $detail->save();
            $tags = explode(',',$detail->tags);
            $others_id =array();
           
            foreach($tags as $key => $tag){
                $tags_id = \App\Article::where('tags','like','%'.$tag.'%')
                            ->where('id','<>',$detail->id)
                            ->where('type','Article')
                            ->pluck('id')->toArray();
                
                            $others_id = array_merge($tags_id,$others_id);
              
            }

           
            $others = \App\Article::wherein('id',$others_id)->limit(3)->get();
            if($detail){
                return view('frontend/pages/seputar_maag/fact_detail',compact('general','detail','others'));
            }
        }
       
    }

    public function seputar_maag_faq_list() {
        $general = \App\general::first();
        $faqs = \App\FAQ::orderBy('id','asc')
            ->where('status',1)
            ->get();
       
       
        return view('frontend/pages/seputar_maag/faq_list',compact('general','faqs'));
    }

    
    public function share() {
        $general = \App\general::first();
        $share = true;
        return view('frontend/landingpage',compact('general','share'));
    }

}
