<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request){
        $q1 = $request->input('q1');
        $q2 = $request->input('q2');
        $q3 = $request->input('q3');
        $q4 = $request->input('q4');
        $q5 = $request->input('q5');
        $q6 = $request->input('q6');
        $q7 = $request->input('q7');
        $q8 = $request->input('q8');
        $q9 = $request->input('q9');
        $q10 = $request->input('q10');

        $nilai = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10;

        if($nilai >= 10 && $nilai <= 18){
            $nilai = '•	Cara berpikir masih kuno, padahal anda sudah mulai dewasa<br>
            •	Anda mudah putus asa dan menyerah<br>
            •	Mudah minder<br>
            •	Anda mudah berpikir negatif<br>
            •	Anda butuh rujukan untuk pergi ke psikolog sebagai langkah pencegahan preventif dari regresi tahap psiko sosial.
            ';
        }else if($nilai >= 18 && $nilai <= 25){
            $nilai = '•	Bisa menikmati dunia yang modern<br>
            •	Percaya pada ilmu pengetahuan dan paham pentingnya ilmu  pengetahuan namun masih ragu<br>
            •	Anda masih suka ragu pada rasa percaya diri anda dan ragu atas hidup anda<br>
            •	Kurang perhitungan pada perencanaan<br>
            •	Cara berpikir masih konvensional
            ';
        }else if($nilai >= 26 && $nilai <= 30){
            $nilai = '•	Sikap dan cara berpikir terbuka<br>
            •	Berani untuk mengungkapkan pendapat<br>
            •	Dapat menghargai pendapat, kehadiran dan eksistensi manusia lain<br>
            •	Bisa menghargai waktu dan menyusun rencananya<br>
            •	Memanfaatkan potensi
            ';
        }else{
            $nilai = 'Error!<br>Mohon jawab semua soal test';
        }
        return view('hasil', compact('nilai'));
    }
}