<?php

namespace App\MyClass;

class PesawatPenumpang extends Pesawat
{   protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function greeting()
    {
        return "Ini adalah informasi Pesawat Penumpang" . $this->getName();
    }

    public function getThreeRows()
    {
        // Return an array with 3 rows of data
        return [
            'Row 1' => $this->data . ' - Data 1',
            'Row 2' => $this->data . ' - Data 2',
            'Row 3' => $this->data . ' - Data 3'
        ];
    }
}
