<?php

// topo
include_once "paginas/includes/header.php";



//  meio
$paginas = $_GET["pg"];

if ($paginas) {  

switch ($paginas) {
    case 'inicial':
        include_once "paginas/inicial.php";
        break;
    
        case 'Produtos':
            include_once "paginas/Produtos.php";
            break;

            case 'sobre':
                include_once "paginas/sobre.php";
                break;

                case "contato";
                include_once "paginas/contato.php";
            break;
    

            case "pagamento";
            include_once "paginas/pagamento.php";
        break;


    }

 } ;


// final
include_once "paginas/includes/footer.php";

// final tag
