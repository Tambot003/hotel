<?php
class Reservation {
    private $_dateBeg;
    private $_dateEnd;
    private $_user;
    private $_room;
    private $_hotel;
        
    public function __construct($beggining,$end,User $user,Room $room,Hotel $hotel){
        $this->_dateBeg = $beggining;
        $this->_dateEnd = $end;
        $this->_user = $user;
        $this->_user->addReserv($this);

        $this->_room = $room;
        $this->_room->changeEtat();
        $this->_room->addReserv($this);   
        
        $this->_hotel = $hotel;
        $this->_hotel->addReserv($this);
        //remove hotel from construct and the 2 ligne up this one if
        //$this->_hotel = $this->_room->getHotel();
    }
        
    //GET
    public function getDateBegging(){
        return $this->_dateBeg;
    }
    public function getDateEnd(){
        return $this->_dateEnd;
    }
    public function getUser(){
        return $this->_user;
    }
    public function getRoom(){
        return $this->_room;
    }
    public function getHotel(){
        return $this->_hotel;
    }
       
    //SET
    public function setDateBegging($begging){
        $this->_dateBeg = $begging;
    }
    public function setDateEnd($end){
        $this->_dateEnd = $end;
    }
    public function setBedNb($user){
        $this->_user = $user;
    }
    public function setWifi($room){
        $this->_room = $room;
    }
}
?>