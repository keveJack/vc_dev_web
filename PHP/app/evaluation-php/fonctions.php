<?php declare (strict_types = 1);
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
/**
 * AJOUTER LE CODE MANQUANT!
 */

function routingPage(array $pGetReceived): string
{
    if (!isset($pGetReceived['page']) || empty($pGetReceived['page'])) {
        return "home";
    }

    if ($pGetReceived['page'] == 'list' || $pGetReceived['page'] == 'details') {
        return $pGetReceived['page'];
    }

    return "home";
}

function getParamSearch($pGetRecieved)
{
    if (isset($pGetRecieved['nom'])) {
        return strtoupper($pGetRecieved['nom']);
    } else {
        return '';
    }
}
function getParamDetail($pGetRecieved)
{

    if (isset($pGetRecieved['id'])) {
        return $pGetRecieved['id'];
    } else {
        return '';
    }
}
function showPage(String $pTemplate, $data = [])
{

    if (!file_exists($pTemplate)) {
        throw new ParseError('file not found');
    }

    ob_start();
    include $pTemplate;
    return ob_get_clean();

}
