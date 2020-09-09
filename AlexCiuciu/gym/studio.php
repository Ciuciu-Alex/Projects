<!DOCTYPE html>
<html>
    <head>
        <title>xGym</title>
        <link rel="stylesheet" href="assets/sccs/style.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="navbar">
            <div class="studio_image">
                <img src="../GYM/images/studio.jpg" alt="Studio">
            </div>
            <div class="menu_items">
                <div class="logo"><a href="https://www.google.ro/webhp?source=search_app&gws_rd=cr,ssl&ei=A-SaVJulIMqAywPZqYCwCw"><img src="../GYM/images/logo.png" alt="Logo"></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php" onclick="myFunction()">start</a></li>
                        <li><a href="studio.php" onclick="myFunction()">studio</a></li>
                        <li><a href="register.php" onclick="myFunction()">register</a></li>
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
            <div class="studio">
                <h3>studio</h3>
                <h2>EXPERIMENTEAZĂ ÎNTREAGA VARIETATE DE FITNESS ALL-INCLUSIVE!</h2>
                <div class="carousel">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/a.jpg" class="d-block w-100" alt="Image1">
                          </div>
                          <div class="carousel-item">
                            <img src="images/b.jpg" class="d-block w-100" alt="Image2">
                          </div>
                          <div class="carousel-item">
                            <img src="images/c.jpg" class="d-block w-100" alt="Image3">
                          </div>
                          <div class="carousel-item">
                            <img src="images/d.jpg" class="d-block w-100" alt="Image3">
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
            </div>
            <div class="about_us">
                <h3>echipament</h3>
                <h2>TOT CE AI NEVOIE</h2>
            </div>
            <div class="explain">
                <div class="echipament">
                    <div>
                        <img src="images/studio_01.jpg" alt="01" id="img">
                    </div>
                    <div class="studio_01">
                        <h2>ANTRENAMENT PERSONALIZAT</h2>
                        <p>Fie că doriți să vă îmbunătățiți rezistența, să vă modelați figura sau să vă consolidați mușchii, fie că preferați să vă petreceți împreună cu alții la cursul de fitness sau preferați să vă faceți antrenamentul singur - cu XGYM all inclusive fitness veți găsi tot ceea ce aveți nevoie. Formatorii noștri instruiți vă ajută din start să adaptați pregătirea perfectă la nevoile dvs. și sunt întotdeauna acolo pentru dvs. Și după antrenament vă puteți relaxa cu noi - la duș, în solar și cu o băutură la bar!</p>
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