<?php 
class Regisztralt  
{
    public $Rendszam;
    public $Gyarto;
    public $Vizsgaztatva;
    public $Tipus;
    public $Uzembehelyezes;
    public $Ulohely;
    

    
    public function __construct($Rendszam,$Gyarto,$Vizsgaztatva,$Tipus,$Uzembehelyezes,$Ulohely) {
        $this->Rendszam = $Rendszam;
        $this->Gyarto = $Gyarto;
        $this->Vizsgaztatva = $Vizsgaztatva;
        $this->Tipus = $Tipus;
        $this->Uzembehelyezes = $Uzembehelyezes;
        $this->Ulohely = $Ulohely;
        
    }
}




?>