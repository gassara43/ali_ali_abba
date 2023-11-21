
<?php
class Livre 
{
    private string $titre;
    private int $nbPages;
    private int $anneeDparution;
    private float $prix;

    private Auteur $auteur;

    public function __construct(string $_titre,int $_anneeDparution,int $_nbPages,float $_prix,Auteur $_auteur)
        {
            $this->titre = $_titre;
            $this->nbPages = $_nbPages;
            $this->anneeDparution = $_anneeDparution;
            $this->prix = $_prix;
            $this->auteur =  $_auteur;
            $this->auteur->ajouterLivre($this);
        }

   
    public function  getTitre()
        {
            return $this->titre;
        }
    public function setTitre(string $_titre)
        {
            $this->titre = $_titre;
        }


    public function  getnbPages()
        {
            return $this->nbPages;
        }
    public function setnbPages(int $nbPages)
        {
            $this->nbPages = $_nbPages;
        }


    public function  getanDparution()
        {
            return $this->anneeDparution;
        }
    public function setanDparution(int $_anneeDparution)
        {
            $this->anneeDparution = $_anneeDparution;
        }


    public function  getPrix()
        {
            return $this->prix ;
        }
    public function setPrix(float $_prix)
        {
            $this->prix  = $_prix;
        }

    public function  getAUteur()
        {
            return $this->auteur ;
        }
    public function setAUteur(Auteur $_auteur)
        {
            $this->prix  = $_auteur;
        }

     

 }

