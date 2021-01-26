@extends('templates/layouts/main')

@section('custom_css')
<link href="{{ asset('assets/css/style-brillian.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="bg-artikel">
    <div class="container">
        <div class="title-about pl-3 pt-5 mb-5">
            <h3>Pertanyaan Umum Seputar Maag</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bg-white p-3 mb-5">
                    <ol type="1" class="faq">
                        <li>
                            <div class="item-faq pl-3">
                                <h4>Apakah Promag aman digunakan jangka panjang?</h4>
                                <p>Promag aman selama selama penggunaan sesuai dosis. Jika tidak ada perbaikan gejala dalam 2 minggu segera hubungi dokter.</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-faq pl-3">
                                <h4>Apakah Promag dapat dikonsumsi oleh ibu hamil dan menyusui ?</h4>
                                <p>Promag aman selama selama penggunaan sesuai dosis. Jika tidak ada perbaikan gejala dalam 2 minggu segera hubungi dokter.</p>
                            </div>
                        </li>
                        <li>
                            <div class="item-faq pl-3">
                                <h4>Kapan sebaiknya minum Promag? Sebelum atau sesudah makan?</h4>
                                <p>Dianjurkan sebelum makan sehingga lambung sudah dalam kondisi baik untuk menerima makanan. Selain itu, dapat diminum segera pada saat timbul gejala.</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
@endsection