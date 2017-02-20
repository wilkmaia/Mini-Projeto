<?php

require_once "FaturaSimples_Boletos.php";
require_once "settings/general.php";

$o = new FaturaSimples_Boletos( BASE_URL, TOKEN );

$valor = @htmlspecialchars( $_POST['valor'] );

$o->configure();

$dados = array(
	"data" => date( "Y-m-d" ),
	"cliente" => "WILK MAIA",
	"servico" => "TESTE",
	"valor_venda" => $valor,
	"emissao_nfse" => FaturaSimples_Venda::EMISSAO_NFSE_NAO_EMITIR_NFSE,
	"meio_pagamento" => "Boleto",
	"nfse_municipio_emissao" => 2211001,
	"nfse_item_servico" => 102,
	"nfse_codigo_tributacao_municipio" => 6204000,
	"nfse_inscricao_municipal" => 123456,
	"nfse_optante_simples_nacional" => FaturaSimples_Venda::SIM,
	"nfse_incentivador_cultural" => FaturaSimples_Venda::NAO
);

$venda = FaturaSimples_Venda::criar( $dados );

$ar = json_decode( $venda, true );
$boleto = $ar["boletos"][0];

echo $boleto;

?>

