<?php
$altura= 1.70;
$peso = 800;
$imc= $peso / ($altura**2);

if($imc <18.5)
{
    echo "Você está abaixo do peso e seu IMC É $imc ";
}
if($imc >= 18.5 and $imc <=24.9)
{
    echo "Você está no peso normal e seu IMC É $imc";
}
if($imc >= 25 and $imc <=29.9)
{
    echo "Você está sobrepeso e seu IMC É $imc";
}
if($imc >= 30 and $imc <=34.9)
{
    echo "Você está obesidade I e seu IMC É $imc";
}
if($imc >= 35 and $imc <=39.9)
{
    echo "Você está obesidade II e seu IMC É $imc";
}
if($imc > 40)
{
    echo "Você morreu e seu IMC É $imc";
}

    
