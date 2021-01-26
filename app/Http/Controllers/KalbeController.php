<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use crocodicstudio\crudbooster\helpers\CRUDBooster;
use Validator;
class KalbeController extends Controller

{
    //
    public function maag_meter(){        
        $data = array();

        return view('frontend/pages/maag_meter_kalbe/user_maag_meter_kalbe',compact('data','banners'));
    }

    public function maag_meter_stepbystep(Request $request){
        $data =array();
        // $data['questions'] = \App\SymptomQuestion::with('Symptoms')->get();

        $user=[
                'name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
            ];

        return view('frontend/pages/maag_meter_kalbe/maag_meter_stepbystep',compact('user','data','general'));
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
            return redirect('maag-meter-kalbe/diet/#diet');
        }
    }

    public function maag_meter_diet(){
        $user = session('user')  ? session('user')  : [];
        
        if(count($user) == 0){
            return redirect('maag-meter-kalbe');
        }
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',1)->first();
        return view('frontend/pages/maag_meter_kalbe/maag_meter_pola_makan',compact('user','data'));
    }

    public function save_maag_meter_diet(Request $request){
        $data =array();
       $data = $request->PM;
       
        session(['diet' => $data]);
        return redirect('maag-meter-kalbe/lifestyle/#lifestyle');
    }

    public function maag_meter_lifestyle(){
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter-kalbe');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter-kalbe/diet');
        }
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',2)->first();
        return view('frontend/pages/maag_meter_kalbe/maag_meter_pola_hidup',compact('user','data'));
    }

    public function save_maag_meter_lifestyle(Request $request){
        $data =array();

        $data = $request->PH;
      
        session(['lifestyle' => $data]);
        return redirect('maag-meter-kalbe/symptom/#symptom');
    }

    public function maag_meter_symptom(){
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter-kalbe');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter-kalbe/diet');
        }
        $lifestyle = session('lifestyle') ? session('lifestyle') : [];
        if(count($lifestyle) == 0){
            return redirect('maag-meter-kalbe/lifestyle');
        }
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',3)->first();
        return view('frontend/pages/maag_meter_kalbe/maag_meter_gejala',compact('user','data'));
    }

    public function save_maag_meter_symptom(Request $request){
        $data =array();

       $data = $request->S;
       
        session(['symptom' => $data]);
        return redirect('maag-meter-kalbe/symptomtime/#symptomtime');
    }

    public function maag_meter_symptom_time(){
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter-kalbe');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter-kalbe/diet');
        }
        $lifestyle = session('lifestyle') ? session('lifestyle') : [];
        if(count($lifestyle) == 0){
            return redirect('maag-meter-kalbe/lifestyle');
        }
        $symptom = session('symptom') ? session('symptom') : [];
        if(count($symptom) == 0){
            return redirect('maag-meter-kalbe/symptom');
        }
        
        $data = \App\SymptomQuestion::with('Symptoms')->where('id',4)->first();
        return view('frontend/pages/maag_meter_kalbe/maag_meter_waktu_gejala',compact('user','data'));
    }

    public function save_maag_meter_symptom_time(Request $request){
        $data =array();

        $data = $request->ST;
       
        session(['symptomtime' => $data]);
       
        return redirect('maag-meter-kalbe/symptomeffect/#symptomeffect');
    }

    public function maag_meter_symptom_effect(){
        $user = session('user')  ? session('user')  : [];
        if(count($user) == 0){
            return redirect('maag-meter-kalbe');
        }
        $diet = session('diet') ? session('diet') : [];
        if(count($diet) == 0){
            return redirect('maag-meter-kalbe/diet');
        }
        $lifestyle = session('lifestyle') ? session('lifestyle') : [];
        if(count($lifestyle) == 0){
            return redirect('maag-meter-kalbe/lifestyle');
        }
        $symptom = session('symptom') ? session('symptom') : [];
        if(count($symptom) == 0){
            return redirect('maag-meter-kalbe/symptom');
        }
        $symptomtime = session('symptomtime') ? session('symptomtime') : [];
        if(count($symptomtime) == 0 ){
            return redirect('maag-meter-kalbe/symptomtime');
        }
       

        $data = \App\SymptomQuestion::with('Symptoms')->where('id',5)->first();
        return view('frontend/pages/maag_meter_kalbe/maag_meter_dampak_gejala',compact('user','data'));
    }

    public function save_maag_meter_symptom_effect(Request $request){
        $data =array();

        $data = $request->Effect;
       
        session(['symptomeffect' => $data]);
        return redirect('maag-meter-kalbe/result');
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

        return view('frontend/pages/maag_meter_kalbe/maag_meter_result',compact('user','banners','general','symptoms','result','solution','articles', 'tips', 'polas'));
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

}
