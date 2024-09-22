<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class Pertemuan1Controller extends Controller
{
    public function genapGanjil(Request $request){
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);
    
            $n = $validatedData['n'];
            $numberDetails = Number::getGenapGanjil($n);
            
            return redirect()->route('ganjil-genap')->with('numberDetails', $numberDetails);
        }
    
        $numberDetails = session('numberDetails', []);
        return view('ganjil-genap', compact('numberDetails'));
    }    

    public function bilanganPrima(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getPrima($n);
            
        }
        return view('prima', compact('numberDetails'));
    }

    public function fibonacci(Request $request)
    {
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getFibonaci($n);

            // Menggunakan session flash data untuk menyimpan hasil sementara
            return redirect()->route('fibonacci')->with('numberDetails', $numberDetails);
        }

        // Mengambil data dari session jika tersedia
        $numberDetails = session('numberDetails', []);
        return view('fibonacci', compact('numberDetails'));
    }

    
    public function param1($param1 = ''){
        $data['param1'] = $param1;
        // Mengubah path view sesuai dengan struktur direktori yang benar
        return view('param', compact('data'));
    }

    public function param2($param1 ='', $param2 =''){
        $data['param1'] = $param1;
        $data['param2'] = $param2;
        // Mengubah path view sesuai dengan struktur direktori yang benar
        return view('param', compact('data'));
    }
}
