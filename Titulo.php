<?php

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ahorcado v2.0</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="center">
         <div id="ahorcado-div">
            <form action="controller.php" method="POST">
               <input type="hidden" name="action" value="1" />
               <p><a href="http://www.ahorcado.com" target="_blank" title="Ahorcado"><img src="http://www.ahorcado.com/img/logos/ahorcado--500x81.png" width="500" height="81" alt="Ahorcado" border="0"></a></p>
                <span id="credits">by <a href="http://https://github.com/Kbgeptupsi/Ahorcado_Php" target="_blank">Dev Kbgeptupsi</a></span>
          </div> 

                <div class="center">
                    <div id="levels-div">
                        <span id="level">
                            <input type="radio" name="level" checked="checked" id="level_0" value="0">
                                <label for="level_0">Principiante 10 Intentos.</label><br>
                            <input type="radio" name="level" id="level_1" value="1">
                                <label for="level_1">Medio 5 Intentos.</label><br>
                            <input type="radio" name="level" id="level_2" value="2">
                                <label for="level_2">Dificil 2 Intentos.</label>
                         </span>
                    </div>

                    <div>
                        <input type="submit" value="Jugar" id="submit-button" />
                    </div>
                </div>
            </form>
        </div>      
    </body>
</html>
