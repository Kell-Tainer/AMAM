<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * DEBUG DEBUG DEBUG
 * @param array $array
 * @param boolean $exit
 */
function debug($array, $exit = true) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    if ($exit)
        exit;
}
?>
