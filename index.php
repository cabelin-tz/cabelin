<?php

require_once 'Operacao.php';


$minhacaneta = new Operacao();


$minhacaneta -> setValor1(1.0);
$minhacaneta -> setValor2(3.0);


echo "<p>DADOS -> Primeiro valor digitado: {$minhacaneta->getValor1()} | Segundo valor digitado: {$minhacaneta->getValor2()}</p>";

echo "<p>A soma de " . $minhacaneta->getValor1() . " com " . $minhacaneta->getValor2() . " é de: " . $minhacaneta->somar() . "</p><br>";
echo "<p>A subtração de " . $minhacaneta->getValor1() . " com " . $minhacaneta->getValor2() . " é de: " . $minhacaneta->subtrair() . "</p><br>";
echo "<p>A multiplicação de " . $minhacaneta->getValor1() . " com " . $minhacaneta->getValor2() . " é de: " . $minhacaneta->multiplicar() . "</p><br>";
echo "<p>A divisão de " . $minhacaneta->getValor1() . " com " . $minhacaneta->getValor2() . " é de: " . $minhacaneta->dividir() . "</p><br>";
echo "<p>A exponenciação de " . $minhacaneta->getValor1() . " com " . $minhacaneta->getValor2() . " é de: " . $minhacaneta->exponenciar() . "</p><br>";

?>
