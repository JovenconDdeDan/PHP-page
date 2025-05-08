

<html>
    <head>
    <title> Login / Signup PHP</title>

            <!-- se referencian archivos externos que se utilizan 
            en la pagina -->
            <link rel= "stylesheet" href="style.css">

    </head>

    <!--  en el body es donde se especifica la estructura
          de la pagina-->
    <body>

            <!-- se incluye el archivo header.php -->
            <?php 
                     include "./includes/header.php";
             ?>

             <h1>   Bienvenido, por favor registrate o accede a la pagina   </h1>

             <div id="enlaces">
                     <a href = "login.php"> si tiene cuenta, acceda aqui</a>   
                     <a href = "signup.php"> Registrese aqui</a>   
             </div>


    </body>

        <?php
                include "./includes/footer.php";
         ?>

</html>

