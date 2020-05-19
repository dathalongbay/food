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
    public function store(Request $request) {

        dump($_POST);

        $food_name = $request->input('food_name', '');
        $food_intro = $request->input('food_intro', '');
        $food_image = $request->input('food_image', '');
        $food_price = $request->input('food_price', '');
        $food_stock = $request->input('food_stock', '');

        // khởi tạo model ORM
        $menuModel = new MenusModel();

        $menuModel->food_name = $food_name;
        $menuModel->food_intro = $food_intro;
        $menuModel->food_image = $food_image;
        $menuModel->food_price = $food_price;
        $menuModel->food_stock = $food_stock;

        // lưu dữ liệu vào db
        $menuModel->save();

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

    public function edit($id) {

        dump($id);

        // lây ra bản ghi có id tương ứng
        $menu = MenusModel::find($id);

        dump($menu);

        return view('foodbackend.edit');
    }

    public function delete() {
        return view('foodbackend.delete');

    }


    public function demo5() {
        echo '<br>' . __METHOD__;
    }
}
