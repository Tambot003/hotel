<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>


<?php
spl_autoload_register(function ($class_name) {

  require_once $class_name . '.php';

});
$hotel1 = new Hotel("Hilton Strasbourg", "202 Rue Colmar");
$hotel2 = new Hotel("Regent ***** paris", "20 rue de la foret blanc");

//______________________________________________________________________________________________
$user1 = new User("Virgile", "GIBELLO", "Homme", "01-01-1998");
//$user3 = new User("jaxs", "hali", "Homme", "20-08-2010");
$user2 = new User("Micka", "MURMANN", "Homme", "02-02-2002");
//____________________________________________________________________________________________

$chambre1 = new Room("Chambre1", 50, 1, $hotel2);
$chambre2 = new Room("Chambre2", 55, 1, $hotel2);
$chambre3 = new Room("Chambre3", 68, 1, $hotel2);

$chambre16 = new Room("Chambre16", 500, 4, $hotel1);
$chambre17 = new Room("Chambre17", 500, 2, $hotel1);
$chambre18 = new Room("Chambre18", 500, 2, $hotel1);
$chambre19 = new Room("Chambre19", 500, 2, $hotel1);

//   $chambre1 = new Room("Chambre 3", 50, 1, $hotel2);
//   $chambre2 = new Room("Chambre 2", 55, 1, $hotel2);
//   $chambre3 = new Room("Chambre 3", 68, 1, $hotel2);
//   $chambre19 = new Room("Chambre 19", 220, 1, $ho2el2);
//   $chambre18 = new Room("Chambre 18", 230, 2, $ho2el2);
//   $chambre17 = new Room("Chambre 17", 240, 2, $hotel2);
//   $chambre16 = new Room("Chambre 16", 250, 2, $hotel2);
//______________________________________________________________________________________________
$chambre1->setWifi(true);
$chambre17->setWifi(true);
//$chambre18->setWifi(true);
$chambre19->setWifi(true);
//______________________________________________________________________________________________


$reservation1 = new Reservation($user2, "04-02-2023", "02-01-2023", $chambre1 );
$reservation2 = new Reservation($user2, "04-02-2023", "02-01-2023", $chambre17);



// $reservation1 = new Reservation("01-01-2021", "02-01-2021", $user1, $chambre2, $hotel2);
// $reservation2 = new Reservation("05-01-2021", "10-01-2021", $user1, $chambre3, $hotel2);
// $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre16, $hotel2);
// $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre17, $hotel12;
// $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre18, $hotel2);
// $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre19, $hotel2);
// $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre1, $hotel2);
//______________________________________________________________________________________________

$hotel2->getHotelInfo();
echo "---------------------------------------------------------------------------------------------------";
$hotel1->getHotelInfo();

$hotel1->getHotelReservation();
$hotel2->getHotelReservation();

$user1->getUserReservation();
$user2->getUserReservation();


$hotel2->listRoom();
echo "---------------------------------------------------------------------------------------------------";
$hotel1->listRoom();
?>