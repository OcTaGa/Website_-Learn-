<!DOCTYPE html>
<html>
<head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" href="style.css" />

         <title>Streaming-Gratuit</title>
    </head>
    <body>
        <div id="bloc_page3">
        <header>
            <div id="titre_page">
            <h1><strong>Streaming-gratuit</strong></h1>
            </div>

            <body>
            <ul>
                <form id="myform" action="connect.php" method="post">
              <!--     <script src="script.js"></script> -->
                    <li><label class="form_col" for="Lastname">Pseudo : </label>
                    <input type="text" name="pseudo" id="A" /></li>
                    <span class="tooltip">le pseudo doit faire au moins 4 caractères</span><br /><br />

                    <li><label class="form_col" for="pwd1">Password : </label>
                    <input name="passwd" id="pwd1" type="password" /></li>
                    <span class="tooltip">le mdp doit faire au moins 6 caractères </span>

                    <br /><br />

                    <li><label class="form_col" for="pwd2">Repeat Password : </label>
                    <input name="passwd2" id="pwd2" type="password" /></li>
                    <span class="tooltip">le mdp doit faire au moins 6 caractères </span>

                    <br /><br />

                    <li><label class="form_col" for="email">Enter your email : </label>
                    <input type="email" name="email" id="email" /></li>
                    <span class="tooltip">*entré obligatoire </span>

                    <br /><br />

                    <span class="form_col"></span>
                    <input type="submit" name="register" value="M'inscrire" />

                </form>
            </ul>
            </body>
        </header>
        </div>
