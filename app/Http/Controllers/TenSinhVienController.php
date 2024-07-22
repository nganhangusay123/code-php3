<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenSinhVienController extends Controller
{
    public function tensinhvien(){
        $tensv = [
            [
                'id' => 'PH39043',
                'name' => 'Nguyễn Văn An',
                'age' => '20',
                'nganh' => 'Lập trình web'
            ]
        ];
        return view('thong-tin-sinh-vien')->with([
            'tensv' => $tensv
        ]);
    }
}
