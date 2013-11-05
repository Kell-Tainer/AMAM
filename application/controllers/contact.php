<?php
 
class Contact extends CI_Controller
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
        $this->contact();
    }
    
    public function contact()
    {
        $this->load->model('membre');
        $data = array();
        $data['membres'] = $this->membre->liste_membre();
        $data['nb_membre'] = $this->membre->count();
        
        
        $this->load->library('layout');
        $this->layout->view('contact', $data);
    }
}