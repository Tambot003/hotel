<?php
class User {
    protected $_name;
    protected $_fName;
    protected $_sexe;
    protected $_birthday;
    protected $_reservation;
        
    public function __construct(string $fName,string $name,string $sexe,$birthday){
        $this->_name = $name;
        $this->_fName = $fName;
        $this->_sexe = $sexe;
        $this->_birthday = $birthday;
        $this->_reservations =[];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }
    public function getFName(){
        return $this->_fName;
    }
    public function getsexe(){
        return $this->_sexe;
    }
    public function getBirthday(){
        return $this->_birthday;
    }

    public function __toString(){
        return $this->getFName()." ".$this->getName();
    }
        
    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setFName($fName){
        $this->_fName = $fName;
    }
    public function setSexe($sexe){
        $this->_sexe = $sexe;
    }
    public function setBirthday($birthday){
        $this->_birthday = $birthday;
    } 

    public function addReserv($reservation){
        array_push($this->_reservations,$reservation);
    }

    public function countReserved()
    {
        $i = 0;
        foreach ($this->_reservations as $reserv) {
                $i++;
        }
        return $i;
    }

    
    public function getUserReservation()
    {
        echo "<h2>Réservations de l'utilisateur " . $this . '</h2><p class="green reservation">' .
            $this->countReserved() . " RÉSERVATION";
        // rajouté un S pour le pluriels
        if ($this->countReserved() > 1) {
            echo "S";
        };
        echo "</p>";

        //create $totalprice to count during the foreach
        $totalPrice = 0;

        foreach ($this->_reservations as $reserv) {

            echo '<p><bold class="bold">' . $reserv->getHotel() . "</bold> - " . $reserv->getRoom()->getName() . " (" . $reserv->getRoom()->getBedNb() . " lit";
            //add S for pluriels
            if($reserv->getRoom()->getBedNb() > 1) {
                echo "s";
            }

            echo " - " . $reserv->getRoom()->getPrice() . "€ - Wifi : ";
            
            //display the wifi statut
            if($reserv->getRoom()->getWifi() == true) {
                echo "oui";
            } else {
                echo "non";
            }

            echo ") du " . $reserv->getDateBegging() . " au " . $reserv->getDateEnd() . " Nuit : ";

            $date1 = date_create($reserv->getDateBegging());
            $date2 = date_create($reserv->getDateEnd());
            $dateDif = date_diff($date1 ,$date2);
            $totalPrice += $dateDif->format("%d") * $reserv->getRoom()->getPrice();

            echo $dateDif->format("%d"). "</p>";
        }
        echo "<p>Prix total : " . $totalPrice . " €</p>";
    }

}
?>