<?php

require_once "FaturaSimples_Boletos.php";
require_once "settings/general.php";

$o = new FaturaSimples_Boletos( BASE_URL, TOKEN );

$o->configure();
$vendas = FaturaSimples_Venda::listar( 0, 100, "data" );

$vendas = json_decode( $vendas, true );
$data = $vendas["data"];

$ar = array();
foreach( $data as $d )
{
	$ar[] = array(
		"boleto" => $d["boletos"][0],
		"valor" => $d["valor_venda"],
		"data" => $d["data"]
	);
}

echo json_encode( $ar );

?>