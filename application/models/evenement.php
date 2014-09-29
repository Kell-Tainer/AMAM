<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Evenement extends CI_Model
{
    protected $table = 'evenement';
    
    /**
    *  Retourne une liste de activite
    */
    public function get_evenement()
    {
         return $this->db->select("id, libelle, description, date")
            ->from($this->table)
            ->order_by('date', 'DESC')
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
     
    public function get_next_evenement(){
        return $this->db->select('*')
            ->from($this->table)
            ->where('date >', date('Y-m-d'))
            ->order_by('date','asc')
            ->limit(3)
            ->get()
            ->result();
    }
    
    public function get_past_evenement(){
        return $this->db->select('*')
            ->from($this->table)
            ->where('date <', date('Y-m-d'))
            ->order_by('date', 'desc')
            ->limit(6)
            ->get()
            ->result();
    }
    
}
?>
