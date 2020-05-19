<?php

namespace App\Http\Controllers;

use App\MenusModel;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //

    /**
     * Hiện thị các thực đơn dưới dạng bảng
     */
    public function index() {

        // gọi model đế lây dữ liệu
        $menus = MenusModel::all();
        // debug
        dump($menus);


        $dataView = [];
        $dataView['foods'] = $menus;
        $dataView['abc'] = 1;
        $dataView['def'] = 5;

        // coi folder /resources/views làm folder gốc của phần view
        return view('foodbackend.index', $dataView);
    }

    /**
     * trả về view tạo ra thực đơn mới
     */
    public function create() {
        return view('foodbackend.create');
    }

    /*
     * lưu dữ liệu cho bản ghi mới
     */
    public function store() {
        echo '<br>' . __METHOD__;
        die;
    }

    /**
     * cập nhật dữ liệu cho bản ghi mới
     */
    public function update() {
        echo '<br>' . __METHOD__;
        die;
    }


    /**
     * Xóa dữ liệu trong CSDL
     */
    public function destroy() {
        echo '<br>' . __METHOD__;
        die;
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
