<h1>exercice 15 </h1>
<p>
    verifier si une adresse email a le bon format.
</p>

<?php
class EmailVal
{
    private $_mail;

    public function __construct($mail)
    {
        $this->_mail = $mail;
    }

    public function validerEmail($mail)
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                return true;
            } 
        else
            {
                return false;
            }
    }

    public function afficherMessage()
    {
        if ($this->validerEmail($this->_mail)) 
            {
                echo $this->_mail . " est valide";
            }
        else 
            {
                echo $this->_mail . " n'est pas valide";
            }
    }
}

$validateur = new EmailVal("elan@elan");
$validateur->afficherMessage();

