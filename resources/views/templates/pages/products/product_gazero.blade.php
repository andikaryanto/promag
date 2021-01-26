@extends('templates/layouts/main')

@section('custom_css')

@endsection

@section('content')
<div class="container">
    <div class="row" style="background: #FBFBFB;
    background: -moz-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #FBFBFB), color-stop(100%, #FBFBFB));
    background: -webkit-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: -o-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: -ms-radial-gradient(center, ellipse cover, #FBFBFB 0%, #FBFBFB 100%);
    background: radial-gradient(ellipse at center, #FBFBFB 0%, #FBFBFB 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#FBFBFB', endColorstr='#FBFBFB', GradientType=1 );
    ">
        <div class="col-12  position-relative">
            <div class="w-100 list-produk float-left hidden" id="list-produk-1">
                <div class="w-100 box_name_produk d-flex justify-content-center ">
                    <img class="mr-3 img-icon-produktype " src="{{asset('assets/img/Group_16.png')}}" alt="">
                    <img class="mr-2 icon-promag align-self-center" src="{{asset('assets/img/promag.png')}}" alt="">
                    <span class=" name-product cl-younggreen">Tablet</span>
                </div>
                <div class="img-obat w-100 d-flex justify-content-center">
                    <img src="{{asset('assets/img/obatmag.png')}}" alt="">
                </div>
            </div>
            <div class="w-100 komposisi  pr-3 pl-3 pb-3" id="komposisi-1">
                <div class="title_komposisi cl-younggreen mb-3">
                    <h3><span>Tentang Gazero</span></h3>
                </div>
                {{-- <div class="w-100 d-flex justify-content-left mb-2">
                    <img class="mr-2 icon-promag align-self-center" src="{{asset('assets/img/promag.png')}}" alt="">
                    <span class=" name-product cl-younggreen">Tablet</span>
                </div> --}}
                <div class="desc-komposisi cl-semiblack">
                    <p>Promag dalam bentuk tablet dalam blister modern dengan hydrotalcite
                    bekerja cepat atasi sakit maag, menetralkan asam lambung dan melindungi lebih lama</p>
                    
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
            <div class="plus closed opened" id="prod-1">
                <a href="javascript:;" onclick="show_hide_komposisi(1)">
                    <img src="{{asset('assets/img/plus.png')}}" alt="">
                </a>
            </div>
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