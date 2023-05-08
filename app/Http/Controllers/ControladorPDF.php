<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Habitacio;
use App\Models\Reserva;
use App\Models\User;
use PDF;

class ControladorPDF extends Controller
{

    public function generarPDFUsuaris($id)
    {
        $dades = User::findOrFail($id);
        
        $data = [
            'dades' => $dades,
        ];
    
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->stream('usuari.pdf');
    }

    public function generarPDFReserves($rid)
    {
        $dades = Reserva::where('rid', $rid)->get();
        $dades = $dades[0];
        
        $data = [
            'dades' => $dades,
        ];
    
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->stream('reserva.pdf');
    }

    public function generarPDFHabitacions($codiHab)
    {
        $dades = Habitacio::findOrFail($codiHab);
        
        $data = [
            'dades' => $dades,
        ];
    
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->stream('habitacio.pdf');
    }

    public function generarPDFClients($dni)
    {
        $dades = Client::findOrFail($dni);
        
        $data = [
            'dades' => $dades,
        ];
    
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->stream('client.pdf');
    }
    
      
}
