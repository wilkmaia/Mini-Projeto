<?php

require_once "../FaturaSimplesLib/FaturaSimples.php";

class FaturaSimples_Boletos
{

	private $base_url;
	private $token;

	function __construct( $base_url, $token )
	{
		$this->base_url = $base_url;
		$this->token = $token;
	}

	function configure()
	{
		$status = FaturaSimples::configure( $this->base_url, $this->token);

		//if( $status == 200 )
		return $status;
	}
}

?>