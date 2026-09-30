<?php
$idade = $_POST["idade"];
function verificarid($idade){
    if ($idade <= 1){
        $filhote = "Filhote";
    }else {
        $filhote = "Adulto ou Sênior";
    }
    return $filhote;
}
function verificaran($idade){
    if ($idade > 0 && $idade <= 1){
        $distracao = "<br>A melhor distração para Pets com um ano ou menos é o
        oferecimento de brinquedos para mordida.";
    }elseif ($idade > 1 && $idade <= 6){
        $distracao = "<br>A melhor distração para Pets com entre 1 e 6 anos é o
        enriquecimento alimentar e cognitivo.";
    }elseif ($idade > 6 && $idade <= 11){
        $distracao = "<br>A melhor distração para Pets com entre 6 anos e um mês e 11 anos é o
        oferecimento de jogos mentais de baixo impacto.";
    }elseif ($idade > 11){
        $distracao = "<br>A melhor distração para Pets Sênior é o
        oferecimento de conforto, presença e estímulos leves.";
    }
    return $distracao;
}

$tutores = [
    [
        "nometu" => $_POST["nometu"],
        "telefone" => $_POST["telefone"],
        "email" => $_POST["email"]
    ]
];
$aumigos = [
    [
        "nomepet" => $_POST["pet"],
        "especie" => $_POST["especie"],
        "raca" => $_POST["raca"],
        "peso" => $_POST["peso"],
        "condicao" => $_POST["condicao"],
        "idade" => $idade
    ]
];
require_once "view saída.php";
?>