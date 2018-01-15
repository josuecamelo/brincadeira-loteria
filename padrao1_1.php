<?php
$jogosRealizados = [];

$numeros = [];
for($i=1; $i<=25; $i++){
	$numeros[] = $i;
}
//###loto facil ##//
//metodo 1
//padrão 1 - 1 ao 12 excluir 4 dezenas e 13 ao 25 excluir 6 - jogar o restante que sobrou
//padrao 2 - 1 ao 12 excluir 6 dezenas e 13 ao 25 excluir 4 - jogar o restante que sobrou
//padrão 3 - 1 ao 12 excluir 3 dezenas e 13 ao 25 excluir 7 - jogar o restante que sobrou
//padrao 4 - 1 ao 12 excluir 7 numeros e 13 ao 25 excluir 3 - jogar o restante que sobrou
//padrão 5 - 1 ao 12 excluir 5 numeros e 13 ao 25 excluir 5 - jogar o restante que sobrou

/*
######################################### metodo 2 ##############################################
*/

$qtd_jogos = 4;

while($qtd_jogos > 0){
	$quadrante_central = [7,8,9,12,13,14,17,18,19]; //escolher 5 deles
	$numeros_restantes = array_values( array_diff($numeros, $quadrante_central) );
	$numeros_marcar = [];
	//pegando 5 numeros do quadrante central
	$continue = true;
	$qtd = 5; //não alterar

	while($continue){
		$rand = rand(1,8);
		$numero_sorteado = $quadrante_central[$rand - 1];
		if(!in_array($numero_sorteado, $numeros_marcar)){
			$numeros_marcar[] = $numero_sorteado;
		}else{
			continue;
		}
		$qtd--;
		if($qtd == 0)
			$continue = false;
	}

	$continue = true;
	$qtd = 10; //não alterar
	while($continue){
		$rand = rand(0, 15);
	
		$numero_sorteado = $numeros_restantes[$rand];
	
		if(!in_array($numero_sorteado, $numeros_marcar)){
			$numeros_marcar[] = $numero_sorteado;
		}else{
			continue;
		}

		$qtd--;
		if($qtd == 0)
			$continue = false;
	}

	asort($numeros_marcar);
	$string_final = "";
	foreach($numeros_marcar as $num){
		$string_final .=  "[  ".str_pad($num, 2, "0", STR_PAD_LEFT ). "  ]      ";
		$jogosRealizados[$qtd_jogos][] = $num; 
	}

	echo $string_final."<br /><br />";

	$qtd_jogos--; 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loto Fácil - Sorteando Números para Jogo</title>
    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
	*{
		font-size: 18px;
		font-weight: bold;
		text-align: center;
	}
	.red{
		background-color: black;
		color: red;
		text-decoration: underline;
		text-align: center;
	}
    </style>
  </head>
  <body>
	<div class="row">
		<?php
		foreach($jogosRealizados as $jogo){
		?>
		<div class="col-md-2">
			<table class="table table-bordered table-striped">
				<tr>
				<?php
					for($i = 1; $i<=25; $i++){
						$final = [5,10,15,20,25];
						if(in_array($i, $final)){
							echo "<td ". (in_array($i, $jogo) ? 'class="red"': null ) .">".str_pad($i, 2, "0", STR_PAD_LEFT )."</td>";
							echo "</tr>";
						}else{
							echo "<td ". (in_array($i, $jogo) ? 'class="red"': null ) .">".str_pad($i, 2, "0", STR_PAD_LEFT )."</td>";
						}
					}
				?>
			</table>
		</div>
		<?php
		}
		?>
	</div>
  </body>
</html>
