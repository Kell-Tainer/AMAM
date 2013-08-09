<?php
 
class Accueil extends CI_Controller
{
    private $titre_defaut;
     
    public function __construct()
    {
        //  Obligatoire
        parent::__construct();
         
        //  Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
        $this->titre_defaut = 'AMAM';
        
    }
    
    public function index()
    {
        $this->mAccueil();
    }
    
    public function mAccueil($pseudo = '')
    {
        $this->load->library('layout');
        $data = array();
        $data['pseudo'] = !empty($pseudo)?$pseudo:'pas de pseudo';
        $data['email'] = 'email@ndd.fr';
        $data['en_ligne'] = true;
        
        $this->layout->view('accueil', $data);
    }
 
    //  Cette page accepte une variable $_GET facultative
    public function connection()
    {
        //  Chargement de la bibliothèque
        $this->load->library('form_validation');
        if($this->form_validation->run())
        {
            //  Le formulaire est valide
            $this->load->view('connexion_reussi');
        }
        else
        {
            //  Le formulaire est invalide ou vide
            $this->load->view('formulaire');
        }
    }
    
}
?>