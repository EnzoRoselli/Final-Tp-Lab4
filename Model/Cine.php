<?php 
namespace Model;

    class Cine{
        private $name;
        private $address;
        private $capacity;
        private $ticketValue;
        private $id;
        private $active;

    public function __construct($name="", $address="", $capacity="", $ticketValue="")
    {
        $this->name = $name;
        $this->address = $address;
        $this->capacity = $capacity;
        $this->ticketValue = $ticketValue;
        $this->id=0;
        $this->active = true;
    }

    public function getId(){ return $this->id;}
    public function getName(){ return $this->name;}
    public function getAddress(){ return $this->address;}
    public function getCapacity(){ return $this->capacity;}
    public function getTicketValue(){ return $this->ticketValue;}
    public function getActive(){ return $this->active;}


    public function setName($name){$this->name=$name;}
    public function setAddress($address){$this->address=$address;}
    public function setCapacity($capacity){
        if($capacity > 0)
            $this->capacity=$capacity;
    }
    public function setTicketValue($ticketValue){
        if($ticketValue > 0)
            $this->ticketValue=$ticketValue;
    }
    public function setId($id){$this->id = $id;}
    public function setActive($active){$this->active = $active;}
    
    public function equals($cine){
        if($this->getName() === $cine->getName() && $this->getAddress() === $cine->getAddress()){
            return true;
        }else{
            return false;
        }
    }
    }
    
?>