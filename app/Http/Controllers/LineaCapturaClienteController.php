<?php

namespace App\Http\Controllers;

class LineaCapturaClienteController extends Controller
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

    public function showLC()
    {


        /*$pregunta = 		
        [
                'caja'=>'',
                'concepto'=>"VM",
                'cuentas'=>0,
                'fechaLimPP'=>"2020-05-31",
                'fpago'=>'',
                'idliquidacion'=>'',
                'idpre_liquida'=>'',
                'intImpuesto'=>81,
                'ip'=>'',
                'lote'=>'',
                'numPeriodos'=>2,
                'password'=>"829daf62494d2c85d5d55bc9c167ba42",
                'referencia'=>"01010201",
                'totalV'=>2245,
                'usuario'=>"ovica",
                'usuarioGen'=>"jmcastaneda",
        
            'arrayDatos'=>
                [[
                'bonifica'=>"0.00",
                'ctapredial'=>"008039200004",
                'id_pago'=>"01010201",
                'id_transf_elect'=>0,
                'impuesto'=>"1064.08",
                'multa'=>"0",
                'otros'=>"1079.08",
                'perayo'=>0,
                'perfin'=>201906,
                'perini'=>201906,
                'perven'=>0,
                'recargo1'=>"59.46",
                'recargo2'=>"0",
                'total'=>"1138.54",
                'ctaoptp' => '',
                'ctaagua' =>'',
                'ctarfc' => '',
                'ctaestatal' => '',
                'ctamercado' => '',
                'convenio' => '',
                'ctaeconum' => '',
                'nplaca' => '',
                'numcredito' => '',
                'numfolio'=> '',
                'liquidacion' => '',
                'vencim' => '',
                'derecho' => '',
                'importe1' => '',
                'importe2' => '',
                'iva' => '',
                'cobranza'=>'',
                'embargo'=>'',
                'subsidio' => '',
                'tdecla' => '',
                'tsaldo' => '',
                'taplic' => '',
                'fpago' => '',
                'pcancl' => '',
                'totemp1' => '',
                'totemp2' => '',
                'actividad' => '',
                'nparc' => '',
                'hracob' => '',
                'fraccion' => '',
                'deleg' => '',
                'fmove' => '',
                'numelem' => '',
                'tlic' => '',
                'imprime' => '',
                'remesa' => '',
                'lineacap' =>''
                ],
                [		
                'bonifica'=>"0.00",
                'ctapredial'=>"008039200004",
                'id_pago'=>"01010201",
                'id_transf_elect'=>0,
                'impuesto'=>"1106.12",
                'multa'=>"0",
                'otros'=>"1110.10",
                'perayo'=>0,
                'perfin'=>202001,
                'perini'=>202001,
                'perven'=>0,
                'recargo1'=>"42.96",
                'total'=>"1153.06",
                'recargo2'=>"",
                'ctaoptp' => '',
                'ctaagua' =>'',
                'ctarfc' => '',
                'ctaestatal' => '',
                'ctamercado' => '',
                'convenio' => '',
                'ctaeconum' => '',
                'nplaca' => '',
                'numcredito' => '',
                'numfolio'=> '',
                'liquidacion' => '',
                'vencim' => '',
                'derecho' => '',
                'importe1' => '',
                'importe2' => '',
                'iva' => '',
                'cobranza'=>'',
                'embargo'=>'',
                'subsidio' => '',
                'tdecla' => '',
                'tsaldo' => '',
                'taplic' => '',
                'fpago' => '',
                'pcancl' => '',
                'totemp1' => '',
                'totemp2' => '',
                'actividad' => '',
                'nparc' => '',
                'hracob' => '',
                'fraccion' => '',
                'deleg' => '',
                'fmove' => '',
                'numelem' => '',
                'tlic' => '',
                'imprime' => '',
                'remesa' => '',
                'lineacap' =>'',
            ]]
        ];*/

        /*$pregunta = [
            "usuario" => "ovica",
            "password" => "829daf62494d2c85d5d55bc9c167ba42",
            "intImpuesto" => 81,
            "referencia" => "01010201",
            "fechaLimPP" => "2020-01-02",
            "totalV" => 5884.41,
            "concepto" => "VM",
            "usuarioGen" => "jmcastaneda",
            "ip" => "10.1.14.46",
            "caja" => 0,
            "numPeriodos" =>1,
            "fpago"=>"",
            "idliquidacion"=>"",
            "idpre_liquida"=>"",
            "lote"=>"",
            "cuentas"=>"",
            "arrayDatos" => [
                [
                    "ctapredial" => "011109030004",
                    "bonifica" => "0",
                    "embargo" => "0",
                    "id_pago" => "01010201",
                    "id_transf_elect" => "0",
                    "importe2" => "0",
                    "multa" => "408",
                    "otros" => "3249.9",
                    "perayo" => "0",
                    "perfin" => "201406",
                    "perini" => "201406",
                    "perven" => "6",
                    "recargo1" => "2226.51",
                    "recargo2" => "398.68",
                    "subsidio" => "0",
                    "impuesto" => "2698.36",
                    "total" => "5884.41",
                    'recargo2'=>"",
                'ctaoptp' => '',
                'ctaagua' =>'',
                'ctarfc' => '',
                'ctaestatal' => '',
                'ctamercado' => '',
                'convenio' => '',
                'ctaeconum' => '',
                'nplaca' => '',
                'numcredito' => '',
                'numfolio'=> '',
                'liquidacion' => '',
                'vencim' => '',
                'derecho' => '',
                'importe1' => '',
                'importe2' => '',
                'iva' => '',
                'cobranza'=>'',
                'embargo'=>'',
                'subsidio' => '',
                'tdecla' => '',
                'tsaldo' => '',
                'taplic' => '',
                'fpago' => '',
                'pcancl' => '',
                'totemp1' => '',
                'totemp2' => '',
                'actividad' => '',
                'nparc' => '',
                'hracob' => '',
                'fraccion' => '',
                'deleg' => '',
                'fmove' => '',
                'numelem' => '',
                'tlic' => '',
                'imprime' => '',
                'remesa' => '',
                'lineacap' =>''
                ]

            ]
        ];*/


      $pregunta = [
            "usuario" => "ovica",
            "password" => "829daf62494d2c85d5d55bc9c167ba42",
            "intImpuesto" => 81,
            "referencia" => "0101047",
            "fechaLimPP" => "2020-06-30",
            "totalV" => 686,
            "numPeriodos" => 2,
            "concepto" => "03",
            "usuarioGen" => "jmcastaneda",
            //"ip" => "10.1.14.46",
            //"caja" => 0,
            "arrayDatos" => [
                [
                    "ctapredial" => "051035150005",
                    "bonifica" => "0",
                    "embargo" => "0",
                    "id_pago" => "01018532",
                    "id_transf_elect" => "0",
                    "importe2" => "0",
                    "cobranza" => "288.6",
                    "multa" => "26",
                    "otros" => "56.82",
                    "perayo" => "0",
                    "perfin" => "200101",
                    "perini" => "200101",
                    "perven" => "0",
                    "recargo1" => "46.04",
                    "recargo2" => "0",
                    "subsidio" => "0",
                    "impuesto" => "26",
                    "total" => "128.86",
              
                ],
                [
                    "ctapredial" => "051035150005",
                    "bonifica" => "0",
                    "embargo" => "0",
                    "id_pago" => "01018532",
                    "id_transf_elect" => "0",
                    "importe2" => "0",
                    "cobranza" => "288.6",
                    "multa" => "0",
                    "otros" => "71",
                    "perayo" => "0",
                    "perfin" => "202002",
                    "perini" => "202002",
                    "perven" => "0",
                    "recargo1" => "3.05",
                    "recargo2" => "3.05",
                    "subsidio" => "0",
                    "impuesto" => "71",
                    "total" => "71",
              
                ]

            ]
        ];

       /* $pregunta = [
            "usuario" => "ovica",
            "password" => "829daf62494d2c85d5d55bc9c167ba42",
            "intImpuesto" => "81",
            "referencia" => "0101047",
            "fechaLimPP" => "2020-05-31",
            "totalV" => "216",
            "numPeriodos" => "1",
            "concepto" => "03",
            "usuarioGen" => "jmcastaneda",
            //"ip" => "10.1.14.46",
            //"caja" => 0,
            "arrayDatos" => [
                [
                    "ctapredial" => "00406311004",
                    "perfin" => "202003",
                    "perini" => "202003",
                    "impuesto" => "216.23",
                    "total" => "216",
                    "id_pago" => "01010201",
              
                ]

            ]
        ]; */

        $wsdl = 'http://10.1.78.2/fut/LineaCaptura_WS/GeneralLC/lineaCapturaGenWs_secureServer.php?wsdl';



        $cliente = new \nusoap_client($wsdl, 'wsdl');
$cliente->soap_defencoding = 'UTF-8';
$cliente->decode_utf8 = FALSE;

// Calls




       /* $cliente = new \SoapClient($wsdl, [
            /*'login' => 'usuario',
            'password' => 'contraseña',
            'encoding' => 'UTF-8',
            'trace' => true
        ]);*/
        try {
            //$resultado = $cliente->solicitaLineaCapturaGen($pregunta);
            $resultado = $cliente->call('solicitaLineaCapturaGen', array($pregunta));

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

    //
}
