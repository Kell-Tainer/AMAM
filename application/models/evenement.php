<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Evenement extends CI_Model
{
    protected $table = 'evenement';
    
    /**
    *  Retourne une liste de activite
    */
    public function liste_evenement()
    {
         return $this->db->select('*')
            ->from($this->table)
            ->order_by('id', 'libelle', 'description', 'date')
            ->get()
            ->result();
    }
    
    /**
     *  Ajoute une activite
     */
    public function ajouter_evenement()
    {
         
    }
     
    /**
     *  Édite une activite déjà existante
     */
    public function editer_evenement()
    {
         
    }
     
    /**
     *  Supprime une activite
     */
    public function supprimer_evenement()
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
