<?php

$name = $mail = $msg ="";

$isGood = false;

$mailTo ="contact@kode-web.com";


$nameError = $mailError = $msgError="";

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $name = verifyInput($_POST["name"]);
    $mail = verifyInput($_POST["mail"]);
    $msg = verifyInput($_POST["msg"]);
    $isGood = true;
    $mailText ="";
    
    if (empty($name)) {
        $nameError = "Please reply";
        $isGood = false;
    }
    
    else $mailText .= "Message de :$name\n";
    
    if (!isEmail($mail)) {
        $mailError = " Please reply";
        $isGood = false;
    }
    
    else $mailText .= "Coordonnees :$mail\n";
    
    if (empty($mailError)) {
        $newRefonteError = " Please reply";
        $isGood = false;
    }
    
    else $mailText .= "msg :$newRefonte\n";
    
    


function verifyInput ($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    
    return $var;
}

function isEmail ($var){
return filter_var($var, FILTER_VALIDATE_EMAIL);  
    
}

  
    $header = "From: $name <$mail>\r\nReply-To : $mail";
    mail($mailTo, "Un message de votre site perso", $mailText, $header);
    
    $name = $mail = $msg ="";   
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Grégoire KARYDES | Portfolio</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Hi you ! I'm Gregoire Karydes and this is my portfolio as dev. web">
        <meta name="keywords" content="grégoire, karydes, portfolio, cv, contact, developpeur web">
        <link rel="icon" type="image/png" href="/home/img/emoji.png"/>

         <!-- Font -->
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">

        <!-- script  -->
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" > 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="script.js"></script>

        <!-- scrollmagic -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>

        <!-- GreenSock -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
    
    </head>

    
    <body>
        <header>
            <div class="logo">
                <img src="../home/img/emoji.png" alt="KARYDES GREGOIRE">
                <div class="text">
                    <h1>Grégoire KARYDES</h1>
                    <h3>Personal website</h3>
                </div>
            </div>
            <div class="menu">
                <div class="contact">
                    <img src="../home/img/msg.png" alt="contact" id="msg">
                </div>
                <div class="icon">
                    <ul>
                        <li><a href="../index.html"><img src="../home/img/accueil.png" id="accueil"></a></li>
                        <li><a href="../profil/profil.html"><img src="../home/img/user.png" id="user"></a> </li>
                        <li><a href="#"><img src="../home/img/suitcase.png" id="portfolio"></a> </li>
                    </ul> 
                </div>
            </div>
        </header>
        <content>
 

            <div id="div_horloge"></div>
            <div class="chat">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-5a121ca1-c812-4799-bb0b-b39a7020366c"></div>
            </div>
            <div class="formulaire">
                <p class="thanks" style="display : <?php if($isGood) echo 'block'; else echo 'none';?>"> Merci pour votre confiance nous vous répondrons dans les meilleurs délais</p>
                
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
                        
                            <div class="row">
                                
                                <div class="col-md-12">
                                            <label> Who are you <span class="blue">*</span> ?</label>
                                            <input type="text"  name="name" id="name" class="form-control" placeholder="Name & FirstName" value="<?php echo $name;?>">
                                            <p class="comments"> <?php echo "$nameError" ?></p>
                                </div>
                                
                                <div class="col-md-12">
                                            <label> What's your mail <span class="blue">*</span> :</label>
                                            <input type="email"  name="mail" id="mail" class="form-control" placeholder="Your email"value="<?php echo $mail;?>">
                                            <p class="comments"> <?php echo "$mailError" ?></p>
                                </div>
                                
                                <div class="col-md-12">
                                            <label> Your message : <span class="blue"> *</span> </label>
                                            <textarea name="msg" id="msg2" class="form-control" rows="4">
                                    </textarea>
                                    
                                    <div class="col-md-12"> <p class="blue" id="requis">* Thank's to reply</p></div> 
                                    <div class="col-md-12">
                                        <input type="submit" class="button1" value="Send" id="submit">
                                    
                                    </div>  
                                    
                                   
                                    </div>          
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                    
                            
                            </div>
                        
                        </form>
                    
                    </div>
                    
                    
                    
                    
    
                
                </div>
            </div>
            
        </content>
         <footer> 
        </footer>
    </body>
</html>