<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('display_inline'))
{

    function display_inline($content = array(), $nb_col, $class = '')
    {
        $res = '<div class="row-fluid">';
        // Calcul de la taille des span (12 est la taille d'un row-fluid)
        $size = 12 / $nb_col;
        $i = 0;
        // On creer chaque élément
        foreach ($content as $key => $element)
        {
            if (count($content) > 3)
            {
                if (($i % $nb_col ) == 0)
                {
                    $res .= '</div><div class="row-fluid">';
                }
            }
            if (empty($element))
            {
                $res .= '<div class="span' . $size . '" data-size=' . $size . '></div>';
            }
            else
            {
                $res .= '<div class="span' . $size . ' ' . $class . '" id=' . $key . ' data-size=' . $size . '>' . $element . '</div>';
            }
            $i++;
        }
        $res .= '</div>';
        return $res;
    }

}

function display_incolumn($content = array(), $nb_col, $class = '')
{
    $res = '<div class="row-fluid">';
    $size = 12 / $nb_col;
    foreach ($content as $key => $element)
    {
        $res .= '</div><div class="row-fluid">';
        if (empty($element))
        {
            $res .= '<div class="span' . $size . '" data-size=' . $size . '></div>';
        }
        else
        {
            $res .= '<div class="span' . $size . ' ' . $class . '" id=' . $key . ' data-size=' . $size . '>' . $element . '</div>';
        }
    }
    $res .= '</div>';
    ;
    return $res;
}

?>
