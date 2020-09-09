<!DOCTYPE html>
<html>
    <head>
        <title>xGym</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" href="assets/sccs/style.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="navbar">
            <div class="carousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/1.jpg" class="d-block w-100" alt="Image1">
                      </div>
                      <div class="carousel-item">
                        <img src="images/2.jpg" class="d-block w-100" alt="Image2">
                      </div>
                      <div class="carousel-item">
                        <img src="images/3.jpg" class="d-block w-100" alt="Image3">
                      </div>
                      <div class="carousel-item">
                        <img src="images/4.jpg" class="d-block w-100" alt="Image3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="menu_items">
                <div class="logo"><a href="https://www.google.ro/webhp?source=search_app&gws_rd=cr,ssl&ei=A-SaVJulIMqAywPZqYCwCw"><img src="../GYM/images/logo.png" alt="Logo"></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">start</a></li>
                        <li><a href="studio.php">studio</a></li>
                        <li><a href="register.php">register</a></li>
                        <li>
                            <div class="dropdown">
                                <a class="drop_a" onclick="myFunction()"> <i class="fa fa-caret-down">Account</i></a>
                                <div class="dropdown-content" id="myDropdown">
                                    <a href="" id="username">user</a>
                                    <a href="login.php">Log In</a>
                                    <a href="index.php">Log Out</a>
                                </div>
                            </div> 
                        </li> 
                    </ul>
                </div>
           </div>
        </div>
       <div class="container">
            <div class="first_row">
                <p id="first_row">Înregistrează-te acum și transformă de la 0 la 100 cu performanțele,<br>
                    rezistența și aspectul tău!</p>
            </div>
            <div class="second_row">
                <h3><img src="images/dispozitive.png" alt="DISPOZITIVE"><br><span>94</span> dispozitive</h3>
                <h3><img src="images/gantere.png" alt="GANTERE"><br><span>90 de</span> gantere</h3>
                <h3><img src="images/traineri.png" alt="TRAINERI"><br><span>10</span> traineri</h3>
                <h3><img src="images/camere.png" alt="CAMERE"><br><span>6</span> camere</h3>
            </div>
            <div class="about_us">
                <h3>despre noi</h3>
                <h2>de ce sa te antrenezi la noi?</h2>
            </div>
            <div class="explain">
                <div class="first_advice">
                    <div>
                        <img src="images/01.jpg" alt="01" id="img01">
                    </div>
                    <div class="advice_01">
                        <h3>01</h3>
                        <h2>raport pret/preformanta</h2>
                        <p>Datorită ofertei de fitness all inclusive, beneficiați de o reducere specială în primul an. Și chiar și după aceea, fitnessul all inclusive XGYM îți oferă încă o garanție de preț imbatabilă. Raportul preț / performanță la fitnessul all inclusive XGYM este unul dintre cele mai bune dintre centrele de fitness din Germania. <br><a href="index.php">aderare</a></p>
                    </div>
                </div>
                <div class="second_advice">
                    <div>
                        <img src="images/02.jpg" alt="02" id="img02">
                    </div>
                    <div class="advice_02">
                        <h3>02</h3>
                        <h2>motivatie</h2>
                        <p>Indiferent dacă te antrenezi într-un grup sau singur - alături de noi vei întâlni întotdeauna antrenori sau colegi de formare care te motivează și te împing până la limitele tale pentru a obține cât mai mult din corp. Convingeți-vă, faceți o poză și încercați-o - nu veți regreta!<br><a href="index.php">cursurile noastre</a></p>
                    </div>                    
                </div>
                <div class="third_advice">
                    <div>
                        <img src="images/03.jpg" alt="03" id="img03">
                    </div>
                    <div class="advice_03">
                        <h3>03</h3>
                        <h2>echipamente de ultima generetie</h2>
                        <p>Incă de la început, fitnessul all inclusive XGYM vă oferă o mare varietate de echipamente pentru a vă antrena în mod specific mușchii și a obține rezultate maxime. Ne bazăm întotdeauna pe cele mai moderne dispozitive care funcționează în conformitate cu cele mai noi descoperiri din domeniul științei medicale și sportive.<br><a href="index.php" id="a03">studiol nostru</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" id="footer">
           <div class="under_footer">
                <div class="text">
                    <p>Fitnessul all inclusive XGYM oferă tuturor antrenorilor o selecție largă de cele mai moderne echipamente de antrenament și cursuri de fitness. Echipa noastră formată de formatori garantează sprijin și asistență individuală pentru instruire încă de la început.</p>
                    <p>© XGYM GmbH 2020</p>
                </div>
                <div class="location">
                    <p>XGYM GmbH</p>
                    <p>Bismarckstrasse 71 67059 Ludwigshafen am Rhein</p>
                    <p>0621. 43 66 49 67 info (la) xgym-fitness.de</p>
                    <p><i class="far fa-clock"></i> Schedule: 09:00 - 22:00</p>
                </div>
                <div class="info">
                    <p><a href="" id="imprima">Imprima</a></h4>
                    <p><a href="" id="protectia">Protectia datelor</a></p>
                    <p><a href="" id="renuntarea">Renuntarea la rasapundere</a></p>
                    <p><a href="http://localhost/gym/contact.php" id="contact">Contact</a></p>
                </div>
                <div id="scroll">
                    <a title="Scroll to the top" class="top" href=""><i class="fas fa-sort-up"></i></a>
                </div>
           </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/jquery.easing-sooper.js"></script>
    <script src="assets/js/jquery.sooperfish"></script>
    <script src="assets/js/app.js"></script>
</html>