<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nguyenvanan extends Controller
{
    public function showthongtin(){
        $sinhvien = [
            [
<<<<<<< HEAD
                'tensinhvien' => 'Nguyễn Văn An',
                'tuoi' => '20',
                'msv' => 'PH39043',
                'quequan' => 'Hà Nội',
=======
                'ten' => 'Nguyễn Văn An',
                'tuoi' => '20',
                'msv' => 'PH39043',
>>>>>>> 866fac8ccb9a75a6612372ff1780eb2357e75559
                'chuyennganh' =>'Lập Trình Web',
                'Email' =>'annvph39043@fpt.edu.vn'
            ]
            
        ];
        return view('thong-tin-sv')->with([
            'sinhvien'=>$sinhvien
        ]);
    }
}
