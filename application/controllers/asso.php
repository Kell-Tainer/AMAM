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
        $this->load->model('activite');
        $data = array();
        $data['activites'] = $this->activite->liste_activite();
        $data['nb_activites'] = $this->activite->count();
        
        $this->load->library('layout');
        $this->layout->view('asso', $data);
    }
}