<?php
 
class Event extends CI_Controller
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
    
    public function l_evenement()
    {
        // Data get
        $this->load->model('evenement');
        $data = array();
        $data['evenements'] = $this->evenement->liste_evenement();
        $data['nb_evenement'] = $this->evenement->count();
        
        // Helper get
        $this->load->helper('date');
        
        // View implementation
        $this->load->library('layout');
        $this->layout->view('evenement', $data);
    }
    
    
}