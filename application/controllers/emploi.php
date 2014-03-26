<?php
 
class Emploi extends CI_Controller
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
        $this->emploi();
    }
    
    public function emploi()
    {
        $this->load->library('layout');
        $data ='';
        $this->layout->view('emploi', $data);
    }
}