<?php

namespace App\Http\Controllers;
use App\Models\User;
use PDF;

class ControladorPDF extends Controller
{

    public function generarPDF($id)
    {
        $dades_user = User::findOrFail($id);
        
        $data = [
            'dades_user' => $dades_user,
        ];
    
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->stream('usuari.pdf');
    }
    
      
}
