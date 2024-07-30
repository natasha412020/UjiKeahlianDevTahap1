<?php

namespace App\Http\Controllers;

use App\MyClass\PesawatPenumpang;
use App\MyClass\PesawatTempur;
use Illuminate\Http\JsonResponse;

class AircraftDataController extends Controller
{
    public function showData(): JsonResponse
    {
        // Create instances of each child class
        $pesawatPenumpang = new PesawatPenumpang('Pesawat Penumpang Data');
        $pesawatTempur = new PesawatTempur('Pesawat Tempur Data');

        // Get 3 rows of data from each class
        $dataPenumpang = $pesawatPenumpang->getThreeRows();
        $dataTempur = $pesawatTempur->getThreeRows();

        // Return data in JSON format
        return response()->json([
            'pesawatPenumpang' => $dataPenumpang,
            'pesawatTempur' => $dataTempur
        ]);
    }
}
