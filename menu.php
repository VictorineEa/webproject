<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="siteweb.css" />
        <title> GV bar</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <header>

                <div id="titre_principal">
                    <div id="logo">
                        <a href="siteweb.php"> <img src="images/gvv.png" alt="Logo de GV" /> </a>
                        <h1> THE GV </h1>    
                    </div>
                   <h2> The best luxury bar of Montreal </h2>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="siteweb.php">Home</a></li>
                        <li><a href="menu.php">Cocktail Menu</a></li>
                        <li><a href="shop.php">Shop</a></li>
                          <li><a href="reserv.php">Sign In</a></li>           
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>

            </header>



            <section>
                <article>


                    <h1><img src="images/coc6.jpg" alt="Categorie restau" class="ico_categorie" /> Mojito $10</h1>
                    <p> Made with Havana Club Rhum, freshly squeezed lime and crushed mint. </p>
                    <br><br>

                    <h1><img src="images/coc.jpg" alt="Categorie restau" class="ico_categorie" /> Kamikaze  $12</h1>
                    <p> Made of equal parts Vodka, triple sec and lime juice. </p>
                    <br><br>


                    <h1><img src="images/coc3.jpg" alt="Categorie restau" class="ico_categorie" /> Bloody Strawberry $12</h1>
                    <p> Popular cocktail containing Backardi Vodka, strawberry juice and combination of spices and flavourings.</p>
                    <br><br>


                    <h1><img src="images/coc4.jpg" alt="Categorie restau" class="ico_categorie" /> Black Russian $15</h1>
                    <p> Made of vodka and coffee liqueur (Kahlua). </p>
                    <br><br>

                     <h1><img src="images/coc1.jpg" alt="Categorie restau" class="ico_categorie" /> Cosmopolitan $15</h1>
                    <p> Made with vodka, triple sec, cranberry juice and lime luice. </p>
                    <br><br>

                     <h1><img src="images/coc2.jpg" alt="Categorie restau" class="ico_categorie" /> Killer Kool-Aid $18</h1>
                    <p> Made of Chambord, vodka, gin, rum, cranberry juice and sour mix. </p>
                    <br><br>

                </article>
                    
                
                 
                     <aside>

                    <h1>HAPPY HOURS</h1> 
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />

                    <p id="happy"><img src="images/happyhour.jpg" alt="Happy hours" /></p>
                    <p> The Happy Hours is every day between 5pm and 8pm. </p>
               

                     </aside>    


                
            </section>




            
            <footer>
                <div id="info">
                    <h1> INFORMATIONS </h1>
                    <p> 1233 Wall Street, Montréal, QC</p>
                    <p> Telephone: (514) 399-0989 </p>
                    <p> Email: <a class="mail" href="mailto:info@gv.ca"> <em> info@gv.ca</em> </a> </p>
                </div>



                <div id="tweet">
                    <h1> RESEAUX SOCIAUX </h1>


 					 <p><a href="#"><img src="images/facebook.png" alt="Facebook"/></a><a href="#"><img src="images/twitter.png" alt="Twitter"/></a></p>


                </div>


                <div id="schedule">
                    <h1>SCHEDULE</h1>
                    <div id="listes_schedule">
            
			                    <p> <span><em>Friday </em> </span>   8pm - 12pm</p>
			                    <p> <em> Saturday </em> 8pm - 12pm</p>
			                    <p> <em> Sunday </em>   8pm - 11pm </p>
                   
                    </div>
                </div>

                    

                <div id="email">
                    <h1> CONTACT </h1>
                    <div id="listes_email">

                    <p> Please write your email for your registration of the newsletters </p> 

                    <form action="siteweb.php" method="post">
                    <label for="mail"> Email: </label>
                    <input type="text" name="mail" id="mail" size="30" placeholder="Email" required>
                    <input type="submit" class="confirm" value="CONFIRM">
                    </form>
                       
                    </div>
                </div>

            </footer>




            
        </div>
    </body>
</html>
