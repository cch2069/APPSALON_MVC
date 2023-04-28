<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Funcio que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isSession() : void {
    if(!isset($_SESSION)) {
        session_start();
    }
}

function esUltimo(string $actual, string $proximo): bool {
    if($actual !== $proximo) {
        return true;
    } else {
        return false;
    }
}

function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
    }

}