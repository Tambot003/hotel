<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

  });
  $hotel1 = new Hotel("Hilton Strasbourg", "202 Rue Colmar");
  $hotel2 = new Hotel("Regent ***** paris", "202 rue de la foret blanc");

//______________________________________________________________________________________________
  $user1 = new User("Virgile", "GIBELLO", "Homme", "01-01-1998");

  $user2 = new User("Micka", "MURMANN", "Homme", "02-02-2002");
//____________________________________________________________________________________________
  
$chambre1 = new Room("Chambre1", 50, 1, $hotel2);
$chambre2 = new Room("Chambre2", 55, 1, $hotel2);
$chambre3 = new Room("Chambre3", 68, 1, $hotel2);

  $chambre16 = new Room("Chambre16", 500, 4, $hotel1);
  $chambre17 = new Room("Chambre17", 240, 2, $hotel1);
  $chambre18 = new Room("Chambre18", 230, 2, $hotel1);
  $chambre19 = new Room("Chambre19", 220, 2, $hotel1);

//   $chambre1 = new Room("Chambre 3", 50, 1, $hotel2);
//   $chambre2 = new Room("Chambre 2", 55, 1, $hotel2);
//   $chambre3 = new Room("Chambre 3", 68, 1, $hotel2);
//   $chambre19 = new Room("Chambre 19", 220, 1, $ho2el2);
//   $chambre18 = new Room("Chambre 18", 230, 2, $ho2el2);
//   $chambre17 = new Room("Chambre 17", 240, 2, $hotel2);
//   $chambre16 = new Room("Chambre 16", 250, 2, $hotel2);
//______________________________________________________________________________________________
  $chambre16->setWifi(true);
  $chambre17->setWifi(true);
//$chambre18->setWifi(true);
  $chambre19->setWifi(true);
//______________________________________________________________________________________________
 
 
  $reservation = new Reservation("04-02-2020", "02-01-2024", $user1, $chambre16, $hotel2);
  $reservation = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre17, $hotel1);
  $reservation = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre18, $hotel2);
 // $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre19, $hotel1);
  $reservation = new Reservation("04-02-2020", "02-01-2024", $user1, $chambre1, $hotel1);

  // $reservation1 = new Reservation("01-01-2021", "02-01-2021", $user1, $chambre2, $hotel2);
  // $reservation2 = new Reservation("05-01-2021", "10-01-2021", $user1, $chambre3, $hotel2);
  // $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre16, $hotel2);
  // $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre17, $hotel12;
  // $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre18, $hotel2);
  // $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre19, $hotel2);
  // $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre1, $hotel2);
//______________________________________________________________________________________________
  
  $hotel1->getHotelInfo();
  echo "---------------------------------------------------------------------------------------------------";
  $hotel2->getHotelInfo();

  $hotel1->getHotelReservation();

  $hotel2->getHotelReservation();
  $user1->getUserReservation();

  $hotel1->listRoom();
  echo "---------------------------------------------------------------------------------------------------";
  $hotel2->listRoom();
  ?>
</body>