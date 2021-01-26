<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplatesController extends Controller
{
    public function index() {
        return view('templates/index');
    }
    public function about() {
        return view('templates/pages/about');
    }
    public function user_maag_meter() {
        return view('templates/pages/maag_meter/user_maag_meter');
    }
    public function maag_meter_pola_makan() {
        return view('templates/pages/maag_meter/maag_meter_pola_makan');
    }
    public function maag_meter_pola_hidup() {
        return view('templates/pages/maag_meter/maag_meter_pola_hidup');
    }
    public function maag_meter_gejala() {
        return view('templates/pages/maag_meter/maag_meter_gejala');
    }
    public function maag_meter_waktu_gejala() {
        return view('templates/pages/maag_meter/maag_meter_waktu_gejala');
    }
    public function maag_meter_dampak_gejala() {
        return view('templates/pages/maag_meter/maag_meter_dampak_gejala');
    }
    public function result_maag_meter() {
        return view('templates/pages/maag_meter/maag_meter_result');
    }
    public function product_list() {
        return view('templates/pages/products/product_list');
    }
    public function product_gazero() {
        return view('templates/pages/products/product_gazero');
    }
    public function product_detail_tablet() {
        return view('templates/pages/products/product_detail_tablet');
    }
    public function product_detail_doubleaction() {
        return view('templates/pages/products/product_detail_doubleaction');
    }
    public function product_detail_cair() {
        return view('templates/pages/products/product_detail_cair');
    }
    public function artikel_list() {
        return view('templates/pages/artikel/artikel_list');
    }
    public function artikel_detail() {
        return view('templates/pages/artikel/artikel_detail');
    }
    public function video_list() {
        return view('templates/pages/video/video_list');
    }
    public function contact() {
        return view('templates/pages/contact');
    }
    public function search_result() {
        return view('templates/pages/search/search_result');
    }
    public function kronis_gerd() {
        return view('templates/pages/maag_meter/result/kronis_gerd');
    }

    public function gerd() {
        return view('templates/pages/maag_meter/result/gerd');
    }
    public function tidak_maag() {
        return view('templates/pages/maag_meter/result/tidak_maag');
    }
    public function maag_kronik() {
        return view('templates/pages/maag_meter/result/maag_kronik');
    }
    public function akut_gerd() {
        return view('templates/pages/maag_meter/result/akut_gerd');
    }
    public function seputar_maag() {
        return view('templates/pages/seputar_maag/menu_seputar_maag');
    }
    public function seputar_maag_list() {
        return view('templates/pages/seputar_maag/seputar_maag_list');
    }
    public function faq() {
        return view('templates/pages/seputar_maag/faq');
    }
    public function landingpage() {
        return view('templates/landingpage');
    }
}
