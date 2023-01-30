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


  $hotel1 = new Hotel("HiltonStrasbourg", "202 Rue Colmar");
  $hotel2 = new Hotel("Regent **** paris", "202 rue de la foret blanc");

  $user1 = new User("Virgile", "GIBELLO", "Homme", "01-01-19980");
  $user2 = new User("Micka", "MURMANN", "Homme", "02-02-2002");


  $chambre1 = new Room("Chambre 1", 110, 2, $hotel1);
  $chambre2 = new Room("Chambre 2", 100, 2, $hotel1);
  $chambre3 = new Room("Chambre 3", 90, 2, $hotel1);

  $chambre16 = new Room("Chambre 16", 250, 2, $hotel1);
  $chambre17 = new Room("Chambre 17", 240, 2, $hotel1);
  $chambre18 = new Room("Chambre 18", 230, 2, $hotel1);
  $chambre19 = new Room("Chambre 19", 220, 2, $hotel1);

  //activated the wifi for the room n°3 & 16
  $chambre3->setWifi(true);
  $chambre16->setWifi(true);



  $reservation1 = new Reservation("01-01-2021", "02-01-2021", $user1, $chambre2, $hotel1);
  $reservation3 = new Reservation("05-01-2021", "10-01-2021", $user1, $chambre17, $hotel1);

  $reservation2 = new Reservation("04-02-2020", "02-01-2024", $user2, $chambre1, $hotel1);

  $hotel1->getHotelInfo();

  $hotel1->getHotelReservation();

  $hotel2->getHotelReservation();
  $user1->getUserReservation();

  $hotel1->listRoom();

  ?>
  </div>
</body>