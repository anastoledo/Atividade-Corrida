<?php

require_once("modelo/Corrida.php"); 
require_once("modelo/Equipe.php"); 
require_once("modelo/Piloto.php"); 

//Cadastrar as 4 Equipes
$equipe1 = new Equipe("Scuderia Ferrari HP", 1950, "Frédéric Vasseur", "Italiano");
$equipe2 = New Equipe("Mercedes-AMG Petronas Formula One Team", 1954, "Toto Wolff", "Alemão");
$equipe3 = New Equipe("McLaren F1 Team", )


//Cadastrar os 4 pilotos

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

