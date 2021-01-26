@extends('templates/layouts/main')

@section('custom_css')

@endsection

@section('content')
<div class="container">
    
    <div class="row" style="
    background: #005c1e;
    ">
     {{-- background: -moz-radial-gradient(center, ellipse cover, #017024 0%, #01571e 100%);
     background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #017024), color-stop(100%, #01571e));
     background: -webkit-radial-gradient(center, ellipse cover, #017024 0%, #01571e 100%);
     background: -o-radial-gradient(center, ellipse cover, #017024 0%, #01571e 100%);
     background: -ms-radial-gradient(center, ellipse cover, #017024 0%, #01571e 100%);
     background: radial-gradient(ellipse at center, #017024 0%, #01571e 100%);
     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#017024', endColorstr='#01571e', GradientType=1 ); --}}
        <div class="col-12 position-relative">
            <div class="w-100 list-produk float-left" id="list-produk-2">
                <div class="w-100 box_name_produk d-flex justify-content-center ">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/logo_new.png')}}" alt="">
                    {{-- <img class="mr-2 icon-promag align-self-center" src="{{asset('assets/img/promag.png')}}" alt=""> --}}
                    <span class=" name-product" style="color:#ffffff">Cair</span>
                </div>
                <div class="img-obat w-100 d-flex justify-content-center">
                    <img src="{{asset('assets/img/cairnew.png')}}" alt="">
                </div>
                <div class="d-flex justify-content-center py-3">
                    <a href="">
                        <button class="btn btn-banner btn-banner-white text-center  py-3 px-5">Beli Sekarang</button>
                    </a>
                </div>
            </div>
            <div class="w-100 komposisi hidden pr-3 pl-3 pb-3" id="komposisi-2">
                <div class="title_komposisi"  style="color:#ffffff">
                    <h3><span>Tentang </span></h3>
                </div>
                <div class="w-100 d-flex justify-content-left mb-2">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/logo_new.png')}}" alt="">
                    <span class=" name-product" style="color:#ffffff">Cair</span>
                </div>
                <div class="desc-komposisi cl-white">
                    <p>Promag dalam bentuk cair dalam kemasan sachet, Praktis dan dosis pas bekerja cepat atasi sakit maag,
                    menetralkan asam lambung dan melindungi lebih lama.</p>
                    <h4 style="color:#82be42">Kandungan</h4>
                    <p><table>
                        <tr>
                            <th>Hydrotalcite</th>
                            <td>............</td>
                            <td>200 mg</td>
                        </tr>
                        <tr>
                            <th>Magnesium hydroxide</th>
                            <td>............</td>
                            <td>150 mg</td>
                        </tr>
                        <tr>
                            <th>Simethicone</th>
                            <td>............</td>
                            <td>50 mg</td>
                        </tr>
                    </table></p>
                    <h4 style="color:#82be42">Dosis dan Cara Pemakaian</h4>
                    <table>
                        <tr>
                            <th>Dewasa</th>
                            <td>: </td>
                            <td>1-2 tablet, 3-4 kali sehari</td>
                        </tr>
                        <tr>
                            <th>Anak 6-12 tahun</th>
                            <td>: </td>
                            <td>1/2-1 tablet, 3-4 kali sehari</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="plus closed" id="prod-2"><a href="javascript:;" onclick="show_hide_komposisi(2)"><img src="{{asset('assets/img/plus.png')}}" alt=""></a></div>
        </div>
    </div>
    <div class="row" style="background: #f9f9f9;
    ">
    {{-- background: -moz-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #FBFBFB), color-stop(100%, #FBFBFB));
    background: -webkit-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: -o-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: -ms-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: radial-gradient(ellipse at center, #FBFBFB 0%, #FBFBFB 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FBFBFB', endColorstr='#FBFBFB', GradientType=1 ); --}}
        <div class="col-12  position-relative">
            <div class="w-100 list-produk float-left " id="list-produk-1">
                <div class="w-100 box_name_produk d-flex justify-content-center ">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/logo_new.png')}}" alt="">
                    {{-- <img class="mr-2 icon-promag align-self-center" src="{{asset('assets/img/promag-green-edit.png')}}" alt=""> --}}
                    <span class=" name-product" style="color:#01ab52">Tablet</span>
                </div>
                <div class="img-obat w-100 d-flex justify-content-center">
                    <img src="{{asset('assets/img/image-3.png')}}" alt="">
                </div>
                <div class="d-flex justify-content-center py-3">
                    <a href="">
                        <button class="btn btn-banner text-center  py-3 px-5">Beli Sekarang</button>
                    </a>
                </div>
            </div>
            <div class="w-100 komposisi hidden pr-3 pl-3 pb-3" id="komposisi-1">
                <div class="title_komposisi"  style="color:#01ab52">
                    <h3><span>Tentang </span></h3>
                </div>
                <div class="w-100 d-flex justify-content-left mb-2">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/logo_new.png')}}" alt="">
                    <span class=" name-product" style="color:#01ab52">Tablet</span>
                </div>
                <div class="desc-komposisi cl-semiblack">
                    <p>Promag dalam bentuk tablet dalam blister modern dengan hydrotalcite
                    bekerja cepat atasi sakit maag, menetralkan asam lambung dan melindungi lebih lama</p>
                    <h4 style="color:#82be42">Kandungan</h4>
                    <p><table>
                        <tr>
                            <th>Hydrotalcite</th>
                            <td>............</td>
                            <td>200 mg</td>
                        </tr>
                        <tr>
                            <th>Magnesium hydroxide</th>
                            <td>............</td>
                            <td>150 mg</td>
                        </tr>
                        <tr>
                            <th>Simethicone</th>
                            <td>............</td>
                            <td>50 mg</td>
                        </tr>
                    </table></p>
                    <h4 style="color:#82be42">Dosis dan Cara Pemakaian</h4>
                    <table>
                        <tr>
                            <th>Dewasa</th>
                            <td>: </td>
                            <td>1-2 tablet, 3-4 kali sehari</td>
                        </tr>
                        <tr>
                            <th>Anak 6-12 tahun</th>
                            <td>: </td>
                            <td>1/2-1 tablet, 3-4 kali sehari</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="plus closed" id="prod-1">
                <a href="javascript:;" onclick="show_hide_komposisi(1)">
                    <img src="{{asset('assets/img/plus.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="
    background: #ebf4e1;
    ">
        {{-- background: -moz-radial-gradient(center, ellipse cover, #c7172b 0%, #9f261b 100%);
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #c7172b), color-stop(100%, #9f261b));
        background: -webkit-radial-gradient(center, ellipse cover, #c7172b 0%, #9f261b 100%);
        background: -o-radial-gradient(center, ellipse cover, #c7172b 0%, #9f261b 100%);
        background: -ms-radial-gradient(center, ellipse cover, #c7172b 0%, #9f261b 100%);
        background: radial-gradient(ellipse at center, #c7172b 0%, #9f261b 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c7172b', endColorstr='#9f261b', GradientType=1 ); --}}
        <div class="col-12 position-relative">
            <div class="w-100 list-produk float-left" id="list-produk-3">
                <div class="w-100 box_name_produk d-flex justify-content-center ">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/logo_new.png')}}" alt="">
                    {{-- <img class="mr-2 icon-promag align-self-center" src="{{asset('assets/img/promag.png')}}" alt=""> --}}
                    <span class=" name-product" style="color:#e31c79">Double Action</span>
                </div>
                <div class="img-obat w-100 d-flex justify-content-center">
                    <img src="{{asset('assets/img/promag-new-pack-pda-3.png')}}" alt="">
                </div>
                <div class="d-flex justify-content-center py-3">
                    <a href="">
                        <button class="btn btn-banner text-center  py-3 px-5">Beli Sekarang</button>
                    </a>
                </div>
            </div>
            <div class="w-100 komposisi hidden pr-3 pl-3 pb-3" id="komposisi-3">
                <div class="title_komposisi" style="color:#e31c79">
                    <h3><span>Tentang </span></h3>
                </div>
                <div class="w-100 d-flex justify-content-left mb-2">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/logo_new.png')}}" alt="">
                    <span class=" name-product" style="color:#e31c79">Double Action</span>
                </div>
                <div class="desc-komposisi cl-semiblack">
                    <p>Promag Double Action dengan aksi ganda dengan kerja menetralkan asam lambung
                    dan dikombinasikan acid blockers untuk menghentikan produksi asam lambung.</p>
                    <h4 style="color:#82be42">Kandungan</h4>
                    <p><table>
                        <tr>
                            <th>Famotidine</th>
                            <td>............</td>
                            <td>10 mg</td>
                        </tr>
                        <tr>
                            <th>Calcium Carbonate</th>
                            <td>............</td>
                            <td>800 mg</td>
                        </tr>
                        <tr>
                            <th>Magnesium Hydroxide</th>
                            <td>............</td>
                            <td>165 mg</td>
                        </tr>
                    </table></p>
                    <h4 style="color:#82be42">Dosis dan Cara Pemakaian</h4>
                    <table>
                        <tr>
                            <th>Dewasa</th>
                            <td>: </td>
                            <td>1-2 tablet, 3-4 kali sehari</td>
                        </tr>
                        <tr>
                            <th>Anak 6-12 tahun</th>
                            <td>: </td>
                            <td>1/2-1 tablet, 3-4 kali sehari</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="plus closed" id="prod-3"><a href="javascript:;" onclick="show_hide_komposisi(3)"><img src="{{asset('assets/img/plus.png')}}" alt=""></a></div>
        </div> 
    </div>
</div>
@endsection

@section('custom_js')
<script>
function show_hide_komposisi(id){
    $('#prod-'+id).toggleClass('opened');
    $('#list-produk-'+id).toggleClass('hidden');
    $('#komposisi-'+id).toggleClass('hidden');
}
</script>
@endsection