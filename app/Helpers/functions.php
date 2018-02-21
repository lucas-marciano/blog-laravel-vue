<?php
/**
 * Helper file
 * Created by PhpStorm.
 * User: Lucas Marciano
 * Date: 04/12/2017
 * Time: 11:22
 */

function formatDateAndTime($value, $format = 'd/m/Y')
{
    // Utiliza a classe de Carbon para converter ao formato de data ou hora desejado
    return Carbon\Carbon::parse($value)->format($format);
}

