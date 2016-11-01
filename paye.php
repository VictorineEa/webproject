
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



            <form method="post" action="siteweb.php">

            <br> <br>
               <fieldset>
                   <legend>Payement </legend> <!-- Titre du fieldset -->
             

                <p>
                   <label for="pays">Dans quel pays habitez-vous ?</label><br />
                   <select name="pays" id="pays">
                    <optgroup label="Europe">
                       <option value="france">France</option>
                       <option value="espagne">Espagne</option>
                       <option value="italie">Italie</option>
                       <option value="royaume-uni">Royaume-Uni</option>
                    </optgroup>   
                    <optgroup label="Amerique"> 
                       <option value="canada">Canada</option>
                       <option value="etats-unis">États-Unis</option>
                    </optgroup>
                    <optgroup label="Asie"> 
                       <option value="chine" selected >Chine</option>
                       <option value="japon">Japon</option>
                    </optgroup>
                   </select>
               </p>


                   <p>
                       Type de payement :

                       <input type="radio" name="souhait" value="riche" id="riche" /> <label for="riche"> <img src="images/cb.png"> </label>
                       <input type="radio" name="souhait" value="celebre" id="celebre" /> <label for="celebre"> <img src="images/cb2.png"></label>
                       <input type="radio" name="souhait" value="intelligent" id="intelligent" /> <label for="intelligent"><img src="images/cb3.png"></label>
                       <input type="radio" name="souhait" value="intelligent" id="intelligent" /> <label for="intelligent"><img src="images/cb1.png"></label>
                   </p>
             
                   <p>
                       <label for="pseudo"> Number of card : </label>
                        <input type="text" name="pseudo" id="pseudo" size="30" maxlength="16" />
                   <br > <br>

                   <label for="pseudo"> Date d'expiration : </label>
                        <input type="text" name="pseudo" id="pseudo"  /> / <input type="text" name="pseudo" id="pseudo" />
                   <br > <br>

                   <label for="pseudo"> Cryptogramme : </label>
                        <input type="text" name="pseudo" id="pseudo" size="30" maxlength="3" />
                   <br ><br>


                   </p>
               </fieldset>
       
                    <p>
                   <input type="submit" class="confirm" value="PAYD" /> 
                    </p>


        </form>



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
                    <label for="mail"> Email </label>
                    <input type="text" name="mail" id="mail" size="30" placeholder="Email" required>
                    <input type="submit" class="confirm" value="CONFIRM">
                    </form>
                       
                    </div>
                </div>

            </footer>




            
        </div>
    </body>
</html>
