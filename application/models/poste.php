<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Poste extends CI_Model
{
    protected $table = 'poste';
    protected $t_a = 'p'; //alias de la table
    
    /**
    *  Retourne une liste des membres
    */
    public function liste_poste()
    {
         return $this->db->select("$this->t_a.id, $this->t_a.libelle")
            ->from($this->table.' '.$this->t_a)
            ->get()
            ->result();
         
    }
    
     /**
    *  Retourne une liste des membres
    */
    public function get_poste_by_membre($id_membre)
    {
       $res = $this->db->select("$this->t_a.id, $this->t_a.libelle")
            ->from($this->table.' '.$this->t_a)
            ->join('poste_membre pm', "$this->t_a.id = pm.id_poste", 'left')
            ->where("pm.id_membre", $id_membre)
            ->order_by("$this->t_a.id", 'ASC')
            ->get()
            ->result();
       return $res;
    }
    
    /**
     *  Ajoute un poste
     */
    public function ajouter_poste()
    {
         
    }
     
    /**
     *  Édite un poste déjà existante
     */
    public function editer_poste()
    {
         
    }
     
    /**
     *  Supprime un poste
     */
    public function supprimer_poste()
    {
         
    }
     
    /**
     *  Retourne le nombre de poste
     */
    public function count($where = array())
    {
        return $this->db->where($where)
                ->count_all_results($this->table);
    }
     
    
}
?>
