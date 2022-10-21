<?php

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'home':
            include 'view/home.html';
            break;
        case 'servicos':
            include 'view/servicos.html';
            break;
        case 'galeria':
                include 'view/galeria.html';
                break;
        case 'preco':
                    include 'view/preco.html';
                    break;
        case 'contacto':
                        include 'view/contactos.html';
                        break;
        case 'login':
              include 'view/login.html';
             break;

        default:
        include 'view/home.html';
            break;
    }
}else {
    include 'view/home.html';
}

