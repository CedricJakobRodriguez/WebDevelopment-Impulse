<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages/index');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Control architectures','Controller desing','Control validation']
        );
        return view('pages/services')->with($data);
    }

    public function communicty() {
        return view('pages/community');
    }

    public function about() {
        return view('pages/about');
    }
}
