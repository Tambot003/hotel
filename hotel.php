<?php
class Hotel
{
    private string $_name;
    private $_rooms;
    private $_adress;
    private $_reservations;

    public function __construct($name, $adress)
    {
        $newName = str_replace("*", "*", $name);

        $this->_name = $newName;
        $this->_adress = $adress;

        $this->_rooms = [];
        $this->_reservations = [];
    }

    //GET
    public function getName()
    {
        return $this->_name;
    }
    public function getAdress()
    {
        return $this->_adress;
    }

    //SET
    public function setName($name)
    {
        $this->_name = $name;
    }
    public function setadress($adress)
    {
        $this->_name = $adress;
    }


    public function addReserv($reservation)
    {
        array_push($this->_reservations, $reservation);
    }

    public function addRoom($newRoom)
    {
        array_push($this->_rooms, $newRoom);
    }

    public function countRooms()
    {
        return count($this->_rooms);
    }
    public function countReservedRooms()
    {
        $i = 0;
        foreach ($this->_rooms as $room) {
            if ($room->getDisponibility() == false) {
                $i++;
            }
        }
        return $i;
    }

    public function getHotelInfo()
    {
        $roomDispo = $this->countRooms() - $this->countReservedRooms();

        echo "<h2>" . $this->getName() . "</h2>
            <p>" . $this->getAdress() . "</p>
            <p>Nombre de chambres : " . $this->countRooms() . "</p>
            <p>Nombre de chambres réservées : " . $this->countReservedRooms() . "</p>
            <p>Nombre de chambres dispo : " . $roomDispo . "</p>";
    }

    public function getHotelReservation()
    {
        echo "<h2>Réservations de l'hôtel " . $this->getName() . '</h2>';
        if ($this->countReservedRooms() > 0) {
            echo '<p class="green reservation">' . $this->countReservedRooms() . " RÉSERVATION";
            // rajouté un S pour le pluriels
            if ($this->countReservedRooms() > 1) {
                echo "S";
            }
            ;
            echo "</p>";
            foreach ($this->_reservations as $reserv) {

                echo '<p><bold class="bold">' . $reserv->getUser() . "</bold> - " . $reserv->getRoom()->getName() . " - du " . $reserv->getDateBegging() . " au " . $reserv->getDateEnd() . "</p>";
                if ($reserv->getRoom()->getDisponibility() == false) {
                }
            }
        } else {
            echo "<p>Aucune réservation</p>";
        }
    }

    public function listRoom()
    {
        echo "<h2>Statuts des chambres de " . $this->getName() . "</h2>   
        <table> 
            <thead>   
                <tr>
                    <th>Chambre</th>
                    <th>Prix</th>
                    <th>Wifi</th>
                    <th>État</th>
                </tr>
            </thead><tbody> ";
        foreach ($this->_rooms as $room) {
            echo "<tr>
                    <td>"
                . $room->getName() .
                "</td>
                    <td>"
                . $room->getPrice() . " €" .
                "</td>
                    <td>";
            if ($room->getWifi() == true) {
                echo "&#x1f4f6"; //wifi logo
            }
            echo "</td>
                    <td>";
            if ($room->getDisponibility() == true) {
                echo '<p class="green">Disponible</p>';
            } else {
                echo '<p class="red">Réservée</p>';
            }
            echo "</td>
                </tr>";
        }
        echo "</tbody></table>";
    }

    // public function __toString()
    // {
    //     return $this->getName();
    // }
    public function __toString()
    {
        return $this->name . $this->adress;
    }

}
//___________________________________________________________________  

