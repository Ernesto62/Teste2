<?php

$diaSemana = rand(0,6);
switch ($diaSemana) {
    case '0':
        print('Número=0 - dia é domingo');
        break;
    case '1':
    print('Número=1 - dia é segunda-feira');
    break;

    case '2':
        print('Número=2 - dia é terça-feira');
        break;

    case '3':
        print('Número=3 - dia é Quarta-Feira');
        break;

    case '4':
        print('Número=4 - dia é Quinta-Feira');
        break;

    case '5':
        print('Número=5 - dia é Sexta-Feira');
        break;

    case '6':
            print('Número=6 - dia é Sábado');
            break;

    default:
        echo 'Erro ao validar o dia da semana';
        break;
}
?>