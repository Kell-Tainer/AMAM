<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Membre extends CI_Model
{
    protected $table = 'membre';
    
    /**
    *  Retourne une liste de activite
    */
    public function liste_membre()
    {
         return $this->db->select('*')
            ->from($this->table)
            ->where('visible', 1)
            ->order_by('nom', 'prenom')
            ->get()
            ->result();
    }
    
    /**
     *  Ajoute une activite
     */
    public function ajouter_membre()
    {
         
    }
     
    /**
     *  Édite une activite déjà existante
     */
    public function editer_membre()
    {
         
    }
     
    /**
     *  Supprime une activite
     */
    public function supprimer_membre()
    {
         
    }
     
    /**
     *  Retourne le nombre de activite
     */
    public function count($where = array())
    {
        return $this->db->where($where)
                ->count_all_results($this->table);
    }
     
    
}
?>
