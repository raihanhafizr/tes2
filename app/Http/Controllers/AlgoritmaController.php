<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoritmaController extends Controller
{
    public function index()
    {
        return view('algoritma');
    }

    public function balikHuruf(Request $request)
    {
        $input = $request->input('kata');
        $alphabets = preg_replace('/[^a-zA-Z]/', '', $input);
        $numbers = preg_replace('/[^0-9]/', '', $input);
        $reversedAlphabets = strrev($alphabets);
        $hasil = $reversedAlphabets . $numbers;

        return view('algoritma', ['balikHurufHasil' => $hasil]);
    }

    public function kataTerpanjang(Request $request)
    {
        $kalimat = $request->input('kalimat');
        $kataTerpanjang = '';
        $kataArray = explode(' ', $kalimat);

        foreach ($kataArray as $kata) {
            if (strlen($kata) > strlen($kataTerpanjang)) {
                $kataTerpanjang = $kata;
            }
        }

        return view('algoritma', ['kataTerpanjang' => $kataTerpanjang, 'kataPanjang' => strlen($kataTerpanjang)]);
    }

    public function hitungKemunculan(Request $request)
    {
        $input = explode(',', $request->input('input'));
        $query = explode(',', $request->input('query'));
        $output = [];

        foreach ($query as $q) {
            $output[] = count(array_keys($input, $q));
        }

        return view('algoritma', ['hitungKemunculan' => $output]);
    }

    public function selisihDiagonal(Request $request)
    {
        $matriks = json_decode($request->input('matriks'), true);
        $n = count($matriks);
        $diagonalPertama = 0;
        $diagonalKedua = 0;

        for ($i = 0; $i < $n; $i++) {
            $diagonalPertama += $matriks[$i][$i];
            $diagonalKedua += $matriks[$i][$n - $i - 1];
        }

        $selisih = abs($diagonalPertama - $diagonalKedua);

        return view('algoritma', ['selisihDiagonal' => $selisih]);
    }
}
