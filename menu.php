<html lang="ro">
   <head>
      <meta charset="utf-8"/>
      <title>Menu</title>
      <title>Home</title>
      <!--favicon-->
      <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <!--Boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <!--Box Icons-->
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <!--Font 1-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;500;700&display=swap" rel="stylesheet">
      <!--Scroll Reveal-->
      <script src="https://unpkg.com/scrollreveal"></script>
      <?php include 'trimite_comanda.php';?>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg">
         <div class="container-fluid">
            <a class="navbar-brand">
            <img src="images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" id="active" href="menu.php">Menu</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Despre</a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="despre.html">Despre Noi</a></li>
                        <li><a class="dropdown-item" href="despre.html#accordionExample">Întrebări Frecvente</a></li>
                        <li><a class="dropdown-item" href="#contact">Contact</a></li>
                        <li><a class="dropdown-item" href="despre.html#locatie">Locatie</a></li>
                     </ul>
                  </li>
               </ul>
               <!-----------dark mode----------->
               <p style="color: var(--text-color);">Temă<i class="bx bx-moon" id="darkmode"></i></p>
            </div>
         </div>
      </nav>
      <!-----------home----------->
      <div class="home" id="home">
         <div class="home-text">
            <h1>Pizzeria Luigi Menu <i class='bx bxs-food-menu'></i></h1>
            <h2>Ingrediente <mark class="brown">proaspete</mark> în fiecare zi! </i></h2>
         </div>
         <div class="home-img">
            <img src="images/logo.png">
         </div>
      </div>
      <!-------------Menu--------------->
      <div class="center-text">
         <strong>Menu</strong>
         <h2>Selectează o categorie</h2>
      </div>
      <section>
         <div class="tab" id="tab">
            <i class='bx bxs-pizza bx-rotate-270' style="font-size: 30px; color: var(--text-color)"></i>
            <button class="tablinks active" id="myButton" onclick="openTab(event, 'tab1')">Pizza Classic</button>
            <button class="tablinks" id="myButton" onclick="openTab(event, 'tab2')">Pizza Party </button>
            <button class="tablinks" id="myButton" onclick="openTab(event, 'tab3')">Pizza Menu </button>
            <i class='bx bxs-pizza'style="font-size: 30px; color: var(--text-color)" ></i>
         </div>
         <div id="tab1" class="tabcontent">
            <div class="cards">
               <!-------------Pizza Chicken--------------->
               <div class="card">
                  <img src="images/pizza-pui.png" alt="Pizza 1" class="dis">
                  <h4>27 lei</h4>
                  <h5>Pizza Chicken</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal1" >Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal1">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-pui.png" class="modal-img">
                     <h2>Pizza Pui </h2>
                     <ol>
                        <li>
                           <p>Ingrediente:  blat pizza, sos pizza, mozzarella, pui, gorgonzola</p>
                        </li>
                        <li>
                           <p>Gramaj:  500gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 95%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Quattro--------------->
               <div class="card">
                  <img src="images/pizza-quattro.png" alt="Pizza 2" class="dis">
                  <h4>28 lei</h4>
                  <h5>Pizza Quattro</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal2">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf' style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal2">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-quattro.png" class="modal-img">
                     <h2>Pizza Quattro </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, mozzarella, gorgonzola, brie, parmezan</p>
                        </li>
                        <li>
                           <p>Gramaj:  670gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 93%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Veggy--------------->
               <div class="card">
                  <img src="images/pizza-veggy.png" alt="Pizza 3" class="dis">
                  <h4>25 lei</h4>
                  <h5>Pizza Veggy</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal3">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal3">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-veggy.png" class="modal-img">
                     <h2>Pizza Veggy </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, ciuperci, ardei, rosii, ceapa, masline, porumb</p>
                        </li>
                        <li>
                           <p>Gramaj:  800gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 87%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Margherita--------------->
               <div class="card">
                  <img src="images/pizza-margherita.png" alt="Pizza 4" class="dis">
                  <h4>23 lei</h4>
                  <h5>Pizza Margherita</h5>
                  <p>32 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal4">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal4">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-margherita.png" class="modal-img">
                     <h2>Pizza Margherita </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: sos pizza, mozzarella, busuioc</p>
                        </li>
                        <li>
                           <p>Gramaj:  500gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza pepperoni--------------->
               <div class="card">
                  <img src="images/pizza-peperonni.png" alt="Pizza 5" class="dis">
                  <h4>25 lei</h4>
                  <h5>Pizza Pepperoni</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal5">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal5">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-peperonni.png" class="modal-img">
                     <h2>Pizza Pepperoni </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, pepperoni</p>
                        </li>
                        <li>
                           <p>Gramaj:  550gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Carbonara--------------->
               <div class="card">
                  <img src="images/pizza-carbonara.png" alt="Pizza 6" class="dis">
                  <h4>25 lei</h4>
                  <h5>Pizza Carbonara</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal6">Info</button>
                     <button class="buy-btn"onclick="addToCart(this)" >Adaugă </button>
                     <div class="top">
                        <h6 class="veg">Nou <i class='bx bxs-bookmark'></i></h6>
                     </div>
                  </div>
               </div>
               <div class="modal" id="modal6">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-carbonara.png" class="modal-img">
                     <h2>Pizza Carbonara </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, mozzarella, pui, gran cucina, ou, parmezan</p>
                        </li>
                        <li>
                           <p>Gramaj:  480gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Carni--------------->
               <div class="card">
                  <img src="images/pizza-carni.png" alt="Pizza 7" class="dis">
                  <h4>27 lei</h4>
                  <h5>Pizza Carni</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal7">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal7">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-carni.png" class="modal-img">
                     <h2>Pizza Carni </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, sunca, salam, bacon, pui</p>
                        </li>
                        <li>
                           <p>Gramaj:  610gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Ciuperci--------------->
               <div class="card">
                  <img src="images/pizza-ciuperci.png" alt="Pizza 8" class="dis">
                  <h4>26 lei</h4>
                  <h5>Pizza Ciuperci</h5>
                  <p>32 cm</p>
                  <div class="card-btns">
                     <button class="modal-open" data-modal="modal8">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal8">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-ciuperci.png" class="modal-img">
                     <h2>Pizza Ciuperci </h2>
                     <ol>
                        <li>
                           <p>Ingrediente:blat pizza, sos pizza, mozzarella, ciuperci, rosii, ceapa, masline, ardei</p>
                        </li>
                        <li>
                           <p>Gramaj:  610gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Tonno--------------->
               <div class="card">
                  <img src="images/pizza-ton.png" alt="Pizza 9" class="dis">
                  <h4>25 lei</h4>
                  <h5>Pizza Tonno</h5>
                  <p>32 cm</p>
                  <div class="card-btns">
                     <button class="modal-open" data-modal="modal9">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal9">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-ton.png" class="modal-img">
                     <h2>Pizza Tonno </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, ton bucati, ceapa, lamai</p>
                        </li>
                        <li>
                           <p>Gramaj:  630gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Cheese--------------->
               <div class="card">
                  <img src="images/pizza-cheese.png" alt="Pizza 10" class="dis">
                  <h4>26 lei</h4>
                  <h5>Pizza Cheese</h5>
                  <p>32 cm</p>
                  <div class="card-btns">
                     <button class="modal-open" data-modal="modal10">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal10">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-cheese.png" class="modal-img">
                     <h2>Pizza Cheese </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, gorgonzola</p>
                        </li>
                        <li>
                           <p>Gramaj:  600gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 84%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Deliciosa--------------->
               <div class="card">
                  <img src="images/pizza-deliciosa.png" alt="Pizza 11" class="dis">
                  <h4>27 lei</h4>
                  <h5>Pizza Deliciosa</h5>
                  <p>32 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal11">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal11">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-deliciosa.png" class="modal-img">
                     <h2>Pizza Deliciosa </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos de rosii, mozzarella, ciuperci, prosciutto crudo, rosii chery, rucola, parmezan</p>
                        </li>
                        <li>
                           <p>Gramaj:  660gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 67%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Casei--------------->
               <div class="card">
                  <img src="images/pizza-casei.png" alt="Pizza 12" class="dis">
                  <h4>26 lei</h4>
                  <h5>Pizza Casei</h5>
                  <p>32 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal12">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal12">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-casei.png" class="modal-img">
                     <h2>Pizza Casei </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, ciuperci, sunca, salam, bacon, rosii, ardei, masline</p>
                        </li>
                        <li>
                           <p>Gramaj:  700gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----------- TAB2 ----------->
         <div id="tab2" class="tabcontent" style="display: none;">
            <div class="cards">
               <!-------------Pizza Party Chicken--------------->
               <div class="card">
                  <img src="images/pizza-pui.png" alt="Pizza 1" class="dis">
                  <h4>75 lei</h4>
                  <h5>Pizza Party <br> Chicken</h5>
                  <p>50 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal13">Info</button>
                     <button class="buy-btn"onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal13">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-pui.png" class="modal-img">
                     <h2>Pizza Party Chicken </h2>
                     <ol>
                        <li>
                           <p>Ingrediente:  blat pizza, sos pizza, mozzarella, pui, gorgonzola</p>
                        </li>
                        <li>
                           <p>Gramaj:  1200gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 95%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Quattro--------------->
               <div class="card">
                  <img src="images/pizza-quattro.png" alt="Pizza 2" class="dis">
                  <h4>85 lei</h4>
                  <h5>Pizza Party <br>Quattro</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal14">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf' style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal14">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-quattro.png" class="modal-img">
                     <h2>Pizza Party Quattro </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, mozzarella, gorgonzola, brie, parmezan</p>
                        </li>
                        <li>
                           <p>Gramaj:  1450gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 93%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Veggy--------------->
               <div class="card">
                  <img src="images/pizza-veggy.png" alt="Pizza 3" class="dis">
                  <h4>70 lei</h4>
                  <h5>Pizza Party <br> Veggy</h5>
                  <p>50 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal15">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal15">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-veggy.png" class="modal-img">
                     <h2>Pizza Party Veggy </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, ciuperci, ardei, rosii, ceapa, masline, porumb</p>
                        </li>
                        <li>
                           <p>Gramaj:  1700gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 87%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Margherita--------------->
               <div class="card">
                  <img src="images/pizza-margherita.png" alt="Pizza 4" class="dis">
                  <h4>65 lei</h4>
                  <h5>Pizza Party <br> Margherita</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal16">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="star">Top <i class='bx bxs-star'></i></h6>
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal16">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-margherita.png" class="modal-img">
                     <h2>Pizza Party Margherita </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: sos pizza, mozzarella, busuioc</p>
                        </li>
                        <li>
                           <p>Gramaj:  1000gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Peperonni--------------->
               <div class="card">
                  <img src="images/pizza-peperonni.png" alt="Pizza 5" class="dis">
                  <h4>81 lei</h4>
                  <h5>Pizza Party <br> Peperonni</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal17">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal17">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-peperonni.png" class="modal-img">
                     <h2>Pizza Party Peperonni </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, pepperoni</p>
                        </li>
                        <li>
                           <p>Gramaj:  1150gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Carbonara--------------->
               <div class="card">
                  <img src="images/pizza-carbonara.png" alt="Pizza 6" class="dis">
                  <h4>82 lei</h4>
                  <h5>Pizza Party <br> Carbonara</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal18">Info</button>
                     <button class="buy-btn"onclick="addToCart(this)">Adaugă </button>
                     <div class="top">
                        <h6 class="veg">Nou <i class='bx bxs-bookmark'></i></h6>
                     </div>
                  </div>
               </div>
               <div class="modal" id="modal18">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-carbonara.png" class="modal-img">
                     <h2>Pizza Party Carbonara </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, mozzarella, pui, gran cucina, ou, parmezan</p>
                        </li>
                        <li>
                           <p>Gramaj:  1050gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Carni--------------->
               <div class="card">
                  <img src="images/pizza-carni.png" alt="Pizza 7" class="dis">
                  <h4>85 lei</h4>
                  <h5>Pizza Party <br> Carni</h5>
                  <p>50 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal19">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal19">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-carni.png" class="modal-img">
                     <h2>Pizza Party Carni </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, sunca, salam, bacon, pui</p>
                        </li>
                        <li>
                           <p>Gramaj:  1300gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Ciuperci--------------->
               <div class="card">
                  <img src="images/pizza-ciuperci.png" alt="Pizza 8" class="dis">
                  <h4>78 lei</h4>
                  <h5>Pizza Party <br> Ciuperci</h5>
                  <p>50 cm</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal20">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal20">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-ciuperci.png" class="modal-img">
                     <h2>Pizza Party Ciuperci </h2>
                     <ol>
                        <li>
                           <p>Ingrediente:blat pizza, sos pizza, mozzarella, ciuperci, rosii, ceapa, masline, ardei</p>
                        </li>
                        <li>
                           <p>Gramaj:  1270gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star-half'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Tonno--------------->
               <div class="card">
                  <img src="images/pizza-ton.png" alt="Pizza 9" class="dis">
                  <h4>80 lei</h4>
                  <h5>Pizza Party <br> Tonno</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal21">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal21">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-ton.png" class="modal-img">
                     <h2>Pizza Party Tonno </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, ton bucati, ceapa, lamai</p>
                        </li>
                        <li>
                           <p>Gramaj:  1200gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Cheese--------------->
               <div class="card">
                  <img src="images/pizza-cheese.png" alt="Pizza 10" class="dis">
                  <h4>83 lei</h4>
                  <h5>Pizza Party <br>  Cheese</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal22">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
                  <div class="top">
                     <h6 class="veg">Vegetarian <i class='bx bxs-leaf'style="color:green"></i></h6>
                  </div>
               </div>
               <div class="modal" id="modal22">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-cheese.png" class="modal-img">
                     <h2>Pizza Party Cheese </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, gorgonzola</p>
                        </li>
                        <li>
                           <p>Gramaj:  1300gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 84%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Deliciosa--------------->
               <div class="card">
                  <img src="images/pizza-deliciosa.png" alt="Pizza 11" class="dis">
                  <h4>70 lei</h4>
                  <h5>Pizza Party <br> Deliciosa</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal23">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)" >Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal23">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-deliciosa.png" class="modal-img">
                     <h2>Pizza Party Deliciosa </h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos de rosii, mozzarella, ciuperci, prosciutto crudo, rosii chery, rucola, parmezan</p>
                        </li>
                        <li>
                           <p>Gramaj:  1350gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 67%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Party Casei--------------->
               <div class="card">
                  <img src="images/pizza-casei.png" alt="Pizza 12" class="dis">
                  <h4>75 lei</h4>
                  <h5>Pizza Party <br> Casei</h5>
                  <p>50 cm</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal24">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal24">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-casei.png" class="modal-img">
                     <h2>Pizza Party Casei</h2>
                     <ol>
                        <li>
                           <p>Ingrediente: blat pizza, sos pizza, mozzarella, ciuperci, sunca, salam, bacon, rosii, ardei, masline</p>
                        </li>
                        <li>
                           <p>Gramaj:  1450gr.</p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!---------- TAB 3 ------------>
         <div id="tab3" class="tabcontent" style="display: none;">
            <div class="cards">
               <!-------------Pizza Menu L--------------->
               <div class="card">
                  <img src="images/pizza-menu-l.png" alt="Pizza 1" class="dis">
                  <h4>31 lei</h4>
                  <h5>Pizza Menu L </h5>
                  <p>Orice pizza Clasic + 1L suc</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal25">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal25">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-menu-l.png" class="modal-img">
                     <h2>Pizza Menu L</h2>
                     <ol>
                        <li>
                           <p>Descriere: Orice Pizza Classic + 1L de suc(Cola/Fanta/Sprite)* </p>
                           <p>*Pentru zomenzile online, specificati in căsuța Observatii din cosul de cumparaturi, ce tipuri de pizza/suc doriti. </p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Menu XL--------------->
               <div class="card">
                  <img src="images/pizza-menu-xl.png" alt="Pizza 1" class="dis">
                  <h4>37 lei</h4>
                  <h5>Pizza Menu XL </h5>
                  <p>Orice pizza Clasic + 2 Prajituri*</p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal26">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal26">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-menu-l.png" class="modal-img">
                     <h2>Pizza Menu XL</h2>
                     <ol>
                        <li>
                           <p>Descriere: Orice Pizza Classic + 2 Prajituri la alegere: Ciocolata/Capsuni/Zmeura/Vanilie </p>
                           <p>*Pentru comenzile online, specificati in căsuța Observatii din cosul de cumparaturi, ce tipuri de pizza doriti. </p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 78%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Menu XXL--------------->
               <div class="card">
                  <img src="images/pizza-menu-xxl.png" alt="Pizza 1" class="dis">
                  <h4>45 lei</h4>
                  <h5>Pizza Menu XXL </h5>
                  <p>Orice pizza Clasic + 1L suc + 2 Prajituri*</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal27">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal27">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-menu-xxl.png" class="modal-img">
                     <h2>Pizza Menu XL</h2>
                     <ol>
                        <li>
                           <p>Descriere: Orice Pizza Classic + 1 litru de suc la alegere: Cola/Fanta/Sprite + 2 Prajituri la alegere: Ciocolata/Capsuni/Zmeura/Vanilie </p>
                           <p>*Pentru comenzile online, specificati in căsuța Observatii din cosul de cumparaturi, ce tipuri de pizza/suc/prajituri doriti. </p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza Menu Pasta--------------->
               <div class="card">
                  <img src="images/pizza-menu-pasta.png" alt="Pizza 1" class="dis">
                  <h4>40 lei</h4>
                  <h5>Pizza + Pasta </h5>
                  <p>Orice pizza Clasic + 1 Portie Paste*</p>
                  <div class="card-btns"  >
                     <button class="modal-open" data-modal="modal28">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal28">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-menu-pasta.png" class="modal-img">
                     <h2>Pizza + Pasta</h2>
                     <ol>
                        <li>
                           <p>Descriere: Orice Pizza Classic + 1 portie de paste la alegere: Cheese/Chicken/Veggy </p>
                           <p>*Pentru comenzile online, specificati in căsuța Observatii din cosul de cumparaturi, ce tipuri de pizza/paste doriti. </p>
                        </li>
                        <li>
                           <p>Gramaj paste: 350gr.  </p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bx-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 64%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
               <!-------------Pizza 3+1 GRATIS--------------->
               <div class="card">
                  <img src="images/pizza-menu-pasta.png" alt="Pizza 1" class="dis">
                  <h4>65 lei</h4>
                  <h5>Pizza 3+1 GRATIS </h5>
                  <p>Orice 3 pizza Clasic + 1 Pizza Classic GRATIS* </p>
                  <div class="card-btns" >
                     <button class="modal-open" data-modal="modal29">Info</button>
                     <button class="buy-btn" onclick="addToCart(this)">Adaugă </button>
                  </div>
               </div>
               <div class="modal" id="modal29">
                  <div class="modal-content">
                     <i class="modal-close">&times; </i>
                     <img src="images/pizza-menu-pasta.png" class="modal-img">
                     <h2>Pizza 3+1 GRATIS</h2>
                     <ol>
                        <li>
                           <p>Descriere: La orice 3 Pizza Classic primiti 1 Pizza Classic gratis la alegere. </p>
                           <p>*Pentru comenzile online, specificati in căsuța Observatii din cosul de cumparaturi, ce tipuri de pizza doriti. </p>
                        </li>
                        <li>
                           <p>Rating Clienti:<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </li>
                        <li>
                           <p>Popularitate: </p>
                        </li>
                     </ol>
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="btns">
            <i onclick="scrollToCardLeft()" class='btn bx bxs-left-arrow'></i>
            <i onclick="scrollToCardRight()" class='btn bx bxs-right-arrow'></i>
         </div>
      </section>
      <!-----------------FORM COMANDA -------------------->
      <div class="center-text">
         <strong>Comandă</strong>
         <h2>Comandă online pizza preferată!</h2>
      </div>
      <form class="comanda-form" id="order-form" action="trimite_comanda.php" method="POST" onsubmit="submitForm()">
         <div id="shopping-cart">
            <h4>Coșul meu</h4>
            <ul id="cart-items"></ul>
            <p style="text-decoration: underline;">Preț Total: <span id="pret-total">0</span> lei</p>
         </div>
         <input type="hidden" id="cart-items-input" name="cart" value="">
         <div class="rows-comanda">
            <div class="row-comanda">
               <label for="nume">Nume:</label>
               <input type="text" id="nume" name="nume" required>
            </div>
            <div class="row-comanda">
               <label for="telefon">Telefon:</label>
               <input type="text" id="telefon" name="telefon" required pattern="\d{10}" title="Numar invalid!">
            </div>
            <div class="row-comanda">
               <label for="adresa">Adresa:</label>
               <input type="text" id="adresa" name="adresa" required>
            </div>
            <div class="row-comanda">
               <label for="livrare">Livrare:</label>
               <select id="livrare" name="livrare" required>
                  <option value="">-- Selectează --</option>
                  <option value="domiciliu">Livrare la domiciliu</option>
                  <option value="ridicare">Ridicare comandă în locație</option>
               </select>
            </div>
            <div class="row-comanda">
               <label for="observatii">Observații:</label>
               <textarea class="observatii" name="observatii"  placeholder="observații aditionale (opțional)" ></textarea>
            </div>
         </div>
         <button class="trimite" type="submit">Trimite Comanda</button>
      </form>
      <div id="cart-icon" class="cart-icon">
         <span id="cart-count" style="font-size: 23px;">0</span>
         <a href="#shopping-cart"><i class='bx bxs-cart-add' style='color:#ffffff; font-size:20px;'></i></a>
      </div>
      <div class="center-text">
         <strong>sau</strong>
         <h2>Sună și comandă telefonic <a class='bx bxs-phone' href="#contact"></a></h2>
      </div>

      <!------------------- CONTACT ---------------------->
      <div class="separator"></div>
      <div class="contact-content" id="contact">
         <div class="contact-text">
            <h2>Contactează-ne!</h2>
            <p>Nu uita să ne vizitezi și pe paginile noastre de Facebook, Instagram și Youtube pentru mai multe informații.
            </p>
            <div class="social">
               <a href="#"><i class='bx bxl-facebook'></i> </a>
               <a href="#"><i class='bx bxl-instagram-alt'></i> </a>
               <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>
         </div>
         <div class="detalii">
            <div class="info">
               <a href="despre.html#locatie"><i class='bx bxs-location-plus' ></i>Strada Frații Golești 113, Craiova</a>
            </div>
            <div class="info">
            <a href="#"><i class='bx bxs-phone' ></i>0780 105 122<br> 0760 117 105</a>
            </div>
            <div class="info">
               <a href="https://mail.google.com/" target="_blank"><i class='bx bxs-envelope' ></i>piza.luigi@gmail.com</a>
            </div>
            <div class="info">
               <a href="#"></i><i class='bx bxs-time-five' ></i>Duminica-Vineri: 8:00-24:00<br> Sambata: Închis</a>
            </div>
         </div>
      </div>
      <!--------------------scroll up -------------------->
      <a href="#" class="scroll">
      <i class='bx bxs-pizza bx-rotate-90' ></i>
      </a>
      <script src="script.js"></script>
   </body>
</html>