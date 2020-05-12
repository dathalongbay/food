<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //

    /**
     * Hiện thị các thực đơn dưới dạng bảng
     */
    public function index() {
        // coi folder /resources/views làm folder gốc của phần view
        return view('foodbackend.index');
    }

    /**
     * trả về view tạo ra thực đơn mới
     */
    public function create() {
        return view('foodbackend.create');

    }

    public function edit() {
        return view('foodbackend.edit');
    }

    public function delete() {
        return view('foodbackend.delete');

    }


    public function demo5() {
        echo '<br>' . __METHOD__;
    }
}
