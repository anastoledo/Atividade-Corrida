<?php

require_once("modelo/Corrida.php"); 
require_once("modelo/Equipe.php"); 
require_once("modelo/Piloto.php"); 

//Cadastrar as 4 Equipes
$equipe1 = new Equipe("Scuderia Ferrari HP", 1950, "Frédéric Vasseur", "Italiano");
$equipe2 = New Equipe("Mercedes-AMG Petronas Formula One Team", 1954, "Toto Wolff", "Alemão");
$equipe3 = New Equipe("McLaren F1 Team", 1966, "Andrea Stella", "Britânico");
$equipe4 = new Equipe("Oracle Red Bull Racing", 2005, "Christian Horner", "Austríaco");


//Cadastrar os 4 pilotos
$piloto1 = new Piloto("Charles Leclerc", 16, $equipe1, 27, "Monegasco");
$piloto2 = new Piloto("Lewis Hamilton", 44, $equipe2, 39, "Britânico");
$piloto3 = new Piloto("Oscar Piastri",81, $equipe3, 23, "Australiano");
$piloto4 = new Piloto("Max Verstappen", 1, $equipe4, 27, "Neerlandês");

//Laço do Menu (do-while)
$escolha = 0;
do {
    echo "\n-----------------------------";
    echo "\n1 - Cadastrar Equipe --------";
    echo "\n2 - Cadastrar Piloto --------";
    echo "\n3 - Listar Equipes ----------";
    echo "\n4 - Listar Pilotos ----------";
    echo "\n5 - Modo Corrida ------------";
    echo "\n0 - Desistir do Campeonato --";
    echo "\n-----------------------------\n";
    $escolha = readline("Informe sua decisão: ");

    switch ($escolha) {
        case '1':
            echo "\nVocê escolheu cadastrar uma Equipe.\n";
            $equipe = new Equipe();
            $equipe->setNome(readline("Informe o nome da equipe: "));
            $equipe->setAnoEntrada(readline("Informe em qual ano a Equipe entrou no esporte: "));
            $equipe->setChefeEquipe(readline("Informe o nome do Chefe de Equipe: "));
            $equipe->setNacionalidade(readline("Informe a nacionalidade da Equipe: "));
            echo "\n---------------\n";
            break;
        
        case '2':
            echo "\nVocê escolheu cadastrar um Piloto.\n";
            $piloto = new Piloto();
            $piloto->setNome(readline("Informe o nome do piloto: "));
            $piloto->setNumero(readline("Informe o número do piloto: "));
            $piloto->setIdade(readline("Informe a idade do piloto: "));
            break;
        
        default:
            # code...
            break;
    }
} while ($escolha > 0);

