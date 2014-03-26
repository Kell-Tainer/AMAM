<?php
 
class Asso extends CI_Controller
{
    public function __construct()
    {
        //  Obligatoire
        parent::__construct();
         
        //  Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
        $this->titre_defaut = 'AMAM';
        
    }
    
    public function index()
    {
        $this->accueil();
    }
    
    public function l_asso()
    {
        $this->load->model('membre');
        $this->load->model('poste');
        $data = array();
        $data['membres'] = $this->membre->liste_membre_less_bureau();
        
        foreach ($data['membres'] as $membre){
            $membre->postes = $this->poste->get_poste_by_membre($membre->id);
        }
        $data['bureaux'] = $this->membre->liste_membre_bureau();
        
        foreach ($data['bureaux'] as $bureau){
            $bureau->postes = $this->poste->get_poste_by_membre($bureau->id);
        }
        $data['nb_membre'] = $this->membre->count();
        
        $this->load->library('layout');
        $this->layout->view('asso', $data);
    }
}