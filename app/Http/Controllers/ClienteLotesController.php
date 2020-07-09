<?php

namespace App\Http\Controllers;

class ClienteLotesController extends Controller
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

    public function showLotes()
    {

        $tmpfile = "/home/jpalacig/clientelc/archivo_entrada.txt";   // temp filename
       $filename = "archivo_entrada.txt";      // Original filename
       
        $gestor = fopen($tmpfile, "rb");
        $contenido = fread($gestor, filesize($tmpfile));
        //$contenido = stream_get_contents($gestor);
        fclose($gestor);

        /* if(!empty($contenido)){
	
            $binario = '';
                
            $str = trim($contenido);
                
            $str_arr = str_split($contenido);
                
            for($i = 0; $i<count($str_arr); $i++)
                    
            $binario = $binario.str_pad(decbin(hexdec(bin2hex($str_arr[$i]))), strlen($str_arr[$i])*8, "0", STR_PAD_LEFT);
                
            $contenido = $binario;
                
        } */ 

       //$contenido   = base64_encode($contenido);

       /* var_dump($contenido);
       exit(); */
      $pregunta = [
            "CodError" => 0,
            "File" => base64_encode($contenido),
            "Folio" => 20201526,
            "Mensaje" => "",
            "idFile" => 2165,
                  
        ];       

        $wsdl = 'http://10.1.196.16/PRO/Fiscal/Lotes/MasivoService.svc?wsdl';
        
        $cliente = new \nusoap_client($wsdl, 'wsdl');
$cliente->soap_defencoding = 'ISO-8859-1';
//$cliente->soap_defencoding = 'UTF-8';
$cliente->decode_utf8 = TRUE;

        try {
            $resultado = $cliente->call('ProcesaVencidos', array('ProcesaVencidos' => $pregunta));
            // Finalmente muestras la respuesta 
            dd($cliente);
        } catch (\Throwable $th) {
            echo '<pre>';
            echo $th;
            //print_r($cliente->__getLastRequest());
            //print_r($cliente->__getLastRequestHeaders());
            print_r($cliente->__getLastResponse());
            //print_r($cliente->__getLastResponseHeaders());
            echo '</pre>';
        }
    }
    
}