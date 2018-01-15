<?php
$jogosRealizados = [];

$numeros = [];
for($i=1; $i<=25; $i++){
	$numeros[] = $i;
}

$qtd_jogos = 1;

while($qtd_jogos > 0){
	$fixo = [
        1,7,19,23,//impares
        2,10,16,14,//pares
        3,20 //não sairam no ultimo resultado
    ];

	$grupo1 = [11,13, 8,18, 24]; //duas impares - 3 pares - duas ultimas dezenas que não foram sorteados no ultimo concurso
    $grupo2 = [4,22,5,15,17]; //3 pares, 2 duas impares
    $grupo3 = [6,12,9,21,25]; //duas pares e 3 impares

    $jogosRealizados = array();
    $jogosRealizados[0]  = $fixo;
    foreach ($grupo1 as $value1) {
        array_push($jogosRealizados[0], $value1);
    }
    $jogosRealizados[1]  = $fixo;
    foreach ($grupo2 as $value1) {
        array_push($jogosRealizados[1], $value1);
    }
    $jogosRealizados[2]  = $fixo;
    foreach ($grupo3 as $value1) {
        array_push($jogosRealizados[2], $value1);
    }

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
