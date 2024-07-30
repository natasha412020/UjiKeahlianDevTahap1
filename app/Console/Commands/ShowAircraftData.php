<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\MyClass\PesawatPenumpang;
use App\MyClass\PesawatTempur;

class ShowAircraftData extends Command
{
    protected $signature = 'aircraft:show-data';
    protected $description = 'Display 3 rows of data in JSON format from each child class';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Create instances of each child class
        $pesawatPenumpang = new PesawatPenumpang('Pesawat Penumpang Data');
        $pesawatTempur = new PesawatTempur('Pesawat Tempur Data');

        // Assuming each class has a method to get 3 rows of data
        $dataPenumpang = $pesawatPenumpang->getThreeRows();
        $dataTempur = $pesawatTempur->getThreeRows();

        // Output data in JSON format
        $this->info(json_encode([
            'pesawatPenumpang' => $dataPenumpang,
            'pesawatTempur' => $dataTempur
        ], JSON_PRETTY_PRINT));
    }
}
