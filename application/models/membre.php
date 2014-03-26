<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Membre extends CI_Model
{
    protected $table = 'membre';
    protected $t_a = 'm'; //alias de la table
    
    /**
    *  Retourne une liste des membres
    */
    public function liste_membre_less_bureau()
    {
         return $this->db->select("$this->t_a.id, $this->t_a.nom, $this->t_a.prenom, $this->t_a.entreprise, p.id as id_poste, $this->t_a.promotion, $this->t_a.visible")
            ->from($this->table.' '.$this->t_a)
            ->join('poste_membre pm', "$this->t_a.id = pm.id_membre", 'left')
            ->join('poste p', 'pm.id_poste = p.id', 'left')
            ->where("$this->t_a.visible", 1)
            ->where("p.bureau", 0)
            ->order_by('promotion', 'DESC')
            ->order_by('prenom', 'ASC')
            ->get()
            ->result();
         
    }
    
     /**
    *  Retourne une liste des membres
    */
    public function liste_membre_bureau()
    {
         return $this->db->select("$this->t_a.id, $this->t_a.nom, $this->t_a.prenom,  $this->t_a.entreprise, $this->t_a.promotion")
            ->distinct()
            ->from($this->table.' '.$this->t_a)
            ->join('poste_membre pm', "$this->t_a.id = pm.id_membre", 'left')
            ->join('poste p', 'pm.id_poste = p.id', 'left')
            ->where("$this->t_a.visible", 1)
            ->where("p.bureau", 1)
            ->order_by('id_poste', 'ASC')
            ->order_by('prenom', 'ASC')
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
