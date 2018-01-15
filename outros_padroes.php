<?php
$jogosRealizados = [];

$numeros = [];
for($i=1; $i<=25; $i++){
	$numeros[] = $i;
}

//###loto facil ##//
//metodo 1
//padrão 1 - 1 ao 12 excluir 4 dezenas e 13 ao 25 excluir 6 - jogar o restante que sobrou
$primeiraExclusao = [];
$continue = true;
$qtdExcluir1 = 4;
$qtdExcluir2 = 6;
while($continue){
    $rand = rand(0,11);

    if(!in_array($rand, $primeiraExclusao)){
        $primeiraExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($primeiraExclusao) ) == $qtdExcluir1 ){
        $continue = false;
    }
}

$continue = true;
$segundaExclusao = [];
while($continue){
    $rand = rand(12,24);

    if(!in_array($rand, $segundaExclusao)){
        $segundaExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($segundaExclusao) ) == $qtdExcluir2 ){
        $continue = false;
    }
}

$p = $numeros;

foreach($primeiraExclusao as $item){
    unset($p[$item]);
}
foreach($segundaExclusao as $item){
    unset($p[$item]);
}

$jogosRealizados[] = $p;

//padrao 2 - 1 ao 12 excluir 6 dezenas e 13 ao 25 excluir 4 - jogar o restante que sobrou
$primeiraExclusao = [];
$continue = true;
$qtdExcluir1 = 6;
$qtdExcluir2 = 4;
while($continue){
    $rand = rand(0,11);

    if(!in_array($rand, $primeiraExclusao)){
        $primeiraExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($primeiraExclusao) ) == $qtdExcluir1 ){
        $continue = false;
    }
}

$continue = true;
$segundaExclusao = [];
while($continue){
    $rand = rand(12,24);

    if(!in_array($rand, $segundaExclusao)){
        $segundaExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($segundaExclusao) ) == $qtdExcluir2 ){
        $continue = false;
    }
}

$p = $numeros;

foreach($primeiraExclusao as $item){
    unset($p[$item]);
}
foreach($segundaExclusao as $item){
    unset($p[$item]);
}

$jogosRealizados[] = $p;
//padrão 3 - 1 ao 12 excluir 3 dezenas e 13 ao 25 excluir 7 - jogar o restante que sobrou
$primeiraExclusao = [];
$continue = true;
$qtdExcluir1 = 3;
$qtdExcluir2 = 7;
while($continue){
    $rand = rand(0,11);

    if(!in_array($rand, $primeiraExclusao)){
        $primeiraExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($primeiraExclusao) ) == $qtdExcluir1 ){
        $continue = false;
    }
}

$continue = true;
$segundaExclusao = [];
while($continue){
    $rand = rand(12,24);

    if(!in_array($rand, $segundaExclusao)){
        $segundaExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($segundaExclusao) ) == $qtdExcluir2 ){
        $continue = false;
    }
}

$p = $numeros;

foreach($primeiraExclusao as $item){
    unset($p[$item]);
}
foreach($segundaExclusao as $item){
    unset($p[$item]);
}

$jogosRealizados[] = $p;
//padrao 4 - 1 ao 12 excluir 7 numeros e 13 ao 25 excluir 3 - jogar o restante que sobrou
$primeiraExclusao = [];
$continue = true;
$qtdExcluir1 = 7;
$qtdExcluir2 = 3;
while($continue){
    $rand = rand(0,11);

    if(!in_array($rand, $primeiraExclusao)){
        $primeiraExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($primeiraExclusao) ) == $qtdExcluir1 ){
        $continue = false;
    }
}

$continue = true;
$segundaExclusao = [];
while($continue){
    $rand = rand(12,24);

    if(!in_array($rand, $segundaExclusao)){
        $segundaExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($segundaExclusao) ) == $qtdExcluir2 ){
        $continue = false;
    }
}

$p = $numeros;

foreach($primeiraExclusao as $item){
    unset($p[$item]);
}
foreach($segundaExclusao as $item){
    unset($p[$item]);
}

$jogosRealizados[] = $p;
//padrão 5 - 1 ao 12 excluir 5 numeros e 13 ao 25 excluir 5 - jogar o restante que sobrou
$primeiraExclusao = [];
$continue = true;
$qtdExcluir1 = 5;
$qtdExcluir2 = 5;
while($continue){
    $rand = rand(0,11);

    if(!in_array($rand, $primeiraExclusao)){
        $primeiraExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($primeiraExclusao) ) == $qtdExcluir1 ){
        $continue = false;
    }
}

$continue = true;
$segundaExclusao = [];
while($continue){
    $rand = rand(12,24);

    if(!in_array($rand, $segundaExclusao)){
        $segundaExclusao[] = $rand;
    }else{
        continue;
    }

    if( (count($segundaExclusao) ) == $qtdExcluir2 ){
        $continue = false;
    }
}

$p = $numeros;

foreach($primeiraExclusao as $item){
    unset($p[$item]);
}
foreach($segundaExclusao as $item){
    unset($p[$item]);
}

$jogosRealizados[] = $p;

/*
######################################### metodo 2 ##############################################
*/
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
    table{
        margin: 0 auto;
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
		<?php
		foreach($jogosRealizados as $key=> $jogo){
		?>
        <h3>Padrão #<?=($key + 1); ?> </h3>
        <table border="1" class="">
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
        <br />
		<?php
		}
		?>
  </body>
</html>
