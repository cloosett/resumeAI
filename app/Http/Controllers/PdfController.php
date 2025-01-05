<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function download()
    {
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
        return view('pdf', ['data' => $data]);
        // Завантажуємо PDF з вказаними даними
        $pdf = Pdf::loadView('pdf', ['data' => $data]);

        // Встановлюємо розмір сторінки A4 (портрет або ландшафт)
        $pdf->set_option('page-size', 'A4');
        $pdf->set_option('orientation', 'landscape');  // Портретна орієнтація

        // Додаткові опції для масштабування вмісту
        $pdf->set_option('zoom', 1); // Встановіть це значення меншою для масштабування

        // Включаємо опції для підтримки HTML5 і PHP-коду
        $pdf->set_option('isHtml5ParserEnabled', true);
        $pdf->set_option('isPhpEnabled', true);

        // Завантажуємо PDF файл
        return $pdf->download('invoice.pdf');
    }



}
