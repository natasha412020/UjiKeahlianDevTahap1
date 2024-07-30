<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextFormat;

class TextFormatController extends Controller
{
    public function show()
    {
        $text = 'informasi pesawat yang biasanya merupakan hal yang harus dimiliki seluruh bandara';
        
        $capitalizedText = TextFormat::capitalize($text);
        $sentenceText = TextFormat::sentence($text);
        $upperText = TextFormat::upper($text);

        return response()->json([
            'original' => $text,
            'capitalized' => $capitalizedText,
            'sentence' => $sentenceText,
            'upper' => $upperText
        ]);
    }
}
