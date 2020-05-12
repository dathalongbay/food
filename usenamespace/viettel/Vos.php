<?php
namespace Viettel;

// nạp namespace khác vào file thuộc namespace
use Microsoft\Excel;
use Microsoft\Word;

class Vos {


    public function index() {

        /**
         * Sử dụng các class của ông Microsoft là Word và Excel
         */
        $word1 = new Word();
        $excel1 = new Excel();
    }
}
