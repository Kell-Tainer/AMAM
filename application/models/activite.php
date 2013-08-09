<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Activite extends CI_Model
{
    protected $table = 'activite';
    
    /**
    *  Retourne une liste de activite
    */
    public function liste_activite()
    {
         return $this->db->select('*')
            ->from($this->table)
            ->order_by('id', 'libelle')
            ->get()
            ->result();
    }
    
    /**
     *  Ajoute une activite
     */
    public function ajouter_activite()
    {
         
    }
     
    /**
     *  Édite une activite déjà existante
     */
    public function editer_activite()
    {
         
    }
     
    /**
     *  Supprime une activite
     */
    public function supprimer_activite()
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
