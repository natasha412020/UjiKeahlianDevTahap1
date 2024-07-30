<?php

namespace App\Http\Controllers;

use App\MyClass\PesawatPenumpang;
use App\MyClass\PesawatTempur;
use Illuminate\Support\Facades\Log;

class GreetingController extends Controller
{
    public function logGreetings()
    {
        // Buat instance dari masing-masing class anak
        $pesawatTempur = new PesawatPenumpang('Ini adalah Pesawat Penumpang Yang berisi manusia');
        $pesawatPenumpang = new PesawatTempur('Ini adalah Pesawat Tempur Yang berisi senjata-senjata tempur');

        // Dapatkan hasil greeting dari setiap class
        $greeting1 = $pesawatTempur->greeting();
        $greeting2 = $pesawatPenumpang->greeting();

        // Log greeting ke file log Laravel
        Log::channel('daily')->info($greeting1);
        Log::channel('daily')->info($greeting2);

        return response()->json([
            'message' => 'Informasi Pesawat',
            'pesawatTempur' => $greeting1,
            'pesawatPenumpang' => $greeting2
        ]);
    }
}
