<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dateConv'))
{
/**
 * Convertie une date en datetime ou en date en changeant le format en fonction des délimiteurs envoyer en paramêtre
 * Le format de date passe également du format base de donnée (0000-00-00) au format affichable (00/00/0000)
 * @param string $value | chaine à convertir
 * @param string $delimiter | délimiteur actuellement présent dans la chaine
 * @param string $new_delimiter | délimiteur a insérer dans la chaine
 * @param boolean $datetime | booléan qui permet de faire retourner un datetime ou non
 * @param boolean $now | booléan qui permet de mettre l'heure courante ou non
 * @return string
 */
    function dateConv($value, $delimiter = '-', $new_delimiter = '/', $datetime = false, $now = false)
    {       
       if(!empty($value)){
        $result = '';
        $pos = strpos($value,' ');
        // On vérifie si la valeur en entrés est un datetime ou non
        if($pos !== false){
            $dateheure = explode(' ', $value);
            $date = $dateheure[0];
            $heure = $dateheure[1];
        }else{
            $date = $value;
        }

        // On vérifi que la valeur en entrée n'est pas nule
        if (empty($date) || $date == '0000-00-00' || $date == '00/00/0000'){
             $result =  '';
        }else{
            $valuereturn = explode($delimiter, $date);

            //On remet dans l'ordre la valeur en entrée
            if (is_array($valuereturn)) {
                $result = @$valuereturn[2] . $new_delimiter . @$valuereturn[1] . $new_delimiter . @$valuereturn[0];
            }
            //Si datetime est vrai, on retourne un date time (en fonction de la valeur d'entrée soit avec les données d'entrée soit avec 00:00:00 par defaut
            if ($datetime){
                if(isset($heure)){
                    $result .= ' '.$heure;
                }else{
                    if($now){
                        $result .= ' '.date("H:i:s");
                    }else{
                        $result .= ' 00:00:00';
                    }
                }
            }
        }
    }else{
        $result = '';
    }
    return $result;
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
