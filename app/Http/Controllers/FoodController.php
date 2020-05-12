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
        echo '<br>' . __METHOD__;

    }

    /**
     * trả về view tạo ra thực đơn mới
     */
    public function create() {
        echo '<br>' . __METHOD__;

    }

    public function edit() {
        echo '<br>' . __METHOD__;

    }

    public function delete() {
        echo '<br>' . __METHOD__;

    }
}
