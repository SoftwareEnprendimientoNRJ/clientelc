<?php

namespace App\Http\Controllers;

class CLienteKioskosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showLiquidacion()
    {
      $pregunta = [
            "Cuenta" => "001001010006",
            "Interes" => "0",
            "MesesSinInteres" => false,
            "Password" => "K10sk05",
            "Periodo" => "20201|20202",
            "Usuario" => "Kioskos",
            
        ];       

        $wsdl = 'http://ovica.finanzas.cdmx.gob.mx/ovica-backend/public/kioskos?wsdl';
        //$wsdl = 'http://localhost:8000/kioskos?wsdl';
        //$wsdl = 'http://10.1.128.131/ovica-back/public/kioskos?wsdl';



        $cliente = new \nusoap_client($wsdl, 'wsdl');
$cliente->soap_defencoding = 'ISO-8859-1';
$cliente->decode_utf8 = TRUE;

        try {
            $resultado = $cliente->call('solicita_seleccionados', $pregunta);
            // Finalmente muestras la respuesta 
            dd($cliente);
        } catch (\Throwable $th) {
            echo '<pre>';
            echo $th;
            print_r($cliente->__getLastRequest());
            //print_r($cliente->__getLastRequestHeaders());
            print_r($cliente->__getLastResponse());
            //print_r($cliente->__getLastResponseHeaders());
            echo '</pre>';
        }
    }
    
}