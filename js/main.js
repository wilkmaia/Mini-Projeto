function inserirVenda()
{
	var v = document.getElementById( "inserirVenda" );
	var b = document.getElementById( "listarBoletos" );

	b.setAttribute( "style", "display: none;" );
	v.setAttribute( "style", "display: block;" );
}

function listarBoletos()
{
	var v = document.getElementById( "inserirVenda" );
	var b = document.getElementById( "listarBoletos" );

	v.setAttribute( "style", "display: none;" );
	b.setAttribute( "style", "display: block;" );
}

$( document ).ready(function(){
	$( "#inserir" ).click( function( e ){
		e.preventDefault();

		var valor = $( "#valor" ).val();
		console.log( valor );

		document.getElementById( "return-msg" ).innerHTML = "Processando...";

		$.ajax({
			method: "POST",
			url: "system/inserirVenda.php",
			data: {
				valor: valor
			}
		}).success( function( m ){
			console.log( m );
			document.getElementById( "return-msg" ).innerHTML = "Boleto gerado: <a href=" + m + " target='_blank'>link</a>";
		});

		f = document.getElementById( "form-venda" );
		f.reset();
	});

	$.ajax({
		method: "POST",
		url: "system/listarBoletos.php",
		data: {}
	}).success( function( m ){
		m = JSON.parse( m );
		numel = m.length;

		var html = "";
		for( i = 0; i < numel; ++i )
		{
			valor = m[i]["valor"];
			link = m[i]["boleto"];
			data = m[i]["data"];

			html += "Valor: " + valor + " | Data: " + data + " | <a href='" + link + "' target='_blank'>" + link + "</a><br />";
		}

		document.getElementById( "listarBoletos" ).innerHTML = html;
	});
});