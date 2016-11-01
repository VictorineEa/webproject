<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="siteweb.css" />
        <title> GV bar </title>
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

                    

                            <div id="connect">
                            <h2> PLEASE CONNECT YOU FOR COMMAND </h2>
                         

                          <form action="command.php" method="post">
                             
                                  <p>Email</p>
                                  <input type="Courriel" required name="Courriel" placeholder="Write your mail">
                                  <p>Password</p>
                                  <input type="password" required name="password" placeholder="Write your password">
                                  
                                  <br> <br> <br>              
                                <input type="submit" class="confirm" value="SIGN IN"> 
                                

                            </form>  
                            
                            
                            <a href ="sign.php"> <input type="submit" class="confirm" value="Not already registered ?"></a>
                            
                            </div> 


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
