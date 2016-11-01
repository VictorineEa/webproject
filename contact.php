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
                <div class="information">


                    <h1><img src="images/gvv.png" alt="Categorie restau" class="ico_categorie" /> THE GV bar</h1>
                    

                    <h1> INFORMATIONS </h1>
                    <p> 1233 Wall Street, Montréal, QC</p>
                    <p> Telephone: (514) 399-0989 </p>
                    <p> Email: <a class="mail" href="mailto:info@gv.ca"> <em> info@gv.ca</em> </a> </p>

                    <h1> RESERVATION </h1>
                 
                    <p> Telephone: (514) 399-0999 </p>
                    <p> Email: <a class="mail" href="mailto:reservation@gv.ca"> <em> reservation@gv.ca</em> </a> </p>

                     <h1> DRESS CODE </h1>
                    <p> Business casual </p>

                 </div>
             
                </article>

                <aside>
                	

  				 <h3>Leave us a message...</h3>
            
                            
		          <form action="envoi.php" method="post">
		             
		             
		                  <p>Name</p>
		                  <input type="text" required name="name" placeholder="Write your name">
		                  <p>Email</p>
		                  <input type="Courriel" required name="Courriel" placeholder="Write your email">
		                  <p>Phone Number </p>
		                  <input type="Telephone" required name="Phone" placeholder="Write your telephone">
		                  <p>Your message </p>
		                  <textarea cols="45" rows="13" name="msg" placeholder="Write your message"> </textarea>
		                  <br>		              
		                 <input type="submit" class="confirm" value="SEND">
		              
		            </form>   

                </aside>
                                     
                
            </section>


  			<div id="banniere_image3"> </div>

            
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
