<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class VacantePdfController extends Controller
{
    public function generarPdf($id)
    {
        $vacante = Vacante::findOrFail($id);
        
        $data = [
            'vacante' => $vacante,
        ];

        $pdf = PDF::loadView('vacantes/vacante', $data);
        return $pdf->download('vacantes.pdf');
    }
}
 