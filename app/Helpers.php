<?php

use App\CrudHelper;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Translation;

function eliminar_tildes($cadena)
{
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena
    );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena
    );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena
    );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena
    );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}
function getCountComments($slug)
{
}
function formatDate($date)
{
    return date_format($date, 'd/m/Y');
}
function previous_route()
{
    $previousRequest = app('request')->create(app('url')->previous());
    try {
        $routeName = app('router')->getRoutes()->match($previousRequest)->getName();
    } catch (NotFoundHttpException $exception) {
        return null;
    }
    return $routeName;
}

function data_noticia($data){
    setlocale(LC_ALL,"es_ES");
    $string = $data;
    $date = DateTime::createFromFormat("jS F Y h:i:s A", $string);
    return strftime("%A",$date->getTimestamp());
}

if (!function_exists('toggleField')) {
    function toggleField($request)
    {
        return CrudHelper::toggleField($request);
    }
}

function translate($label){
    $translation = Translation::where('key', $label)->first();

    if (session()->has('language')){
        app()->setLocale(session()->get('language'));
    }
    if ($translation->text){
        return $translation->text;
    }
    else if ($translation->text_description){
        return $translation->text_description;
    }
    return "undefined";
}