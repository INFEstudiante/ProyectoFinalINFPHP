<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Usuario no Ingresado");
    window.location = "../";
    </script>
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Jeyson Jose Brito Melendez-->
    <!--proyecto Final -->
    <meta charset="iso-8859-1">
    <title>Menu Usuario</title>
    <LINK REL=StyleSheet HREF="../acesos/css/estilomenu.css" TYPE=" " MEDIA=screen>
    </head>
    <body>
    <header>
      <nav>
      <ul class="nav">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Paginas</a>
          <ul>
            <li><a href="https://infestudiate.000webhostapp.com/">Biografia</a></li>
            <li><a href="https://docs.google.com/spreadsheets/d/1tT6VCC8bmfC91uZvfbHTZQxoQiL5u-W2fibUTztG0VE/edit?usp=sharing">Etiquetas</a></li>
            <li><a href="https://infestudiante.github.io/Formulario/">Formulario Grafico</a></li>
            <li><a href="https://infestudiante.github.io/FormularioMultiple/">Formulario Multiple</a></li>
            <li><a href="https://infestudiante.github.io/MenuDinamico/">Menu Dinamico</a></li>
            <li><a href="https://infestudiante.github.io/ValidacionCedula/">Validacion Cedula</a></li>
            <li><a href="https://infestudiante.github.io/ManuBanco/">Menu Banco</a></li>
            </ul></li>
          <li><a href="#">Practicas</a>
          <ul>
            <li><a href="https://docs.google.com/document/d/1R3P8GOO3A1m8c6OJI-i7m9OugCucr2LVX5hdSyDmduM/edit?usp=sharing   ">JSON</a></li>
            <li><a href="https://docs.google.com/document/d/1qexNu5rn7xHd2q453DXEM7cQ8gDznPSfoTwX4wlUAu4/edit?usp=sharing ">XML</a></li>
            <li><a href="https://docs.google.com/document/d/1ONg99PIuIj1WCuQ388_Rm4OMFT1EtDB0ZXgD77uca0Q/edit?usp=sharing">AJAX</a></li>
            <li><a href="https://docs.google.com/document/d/14GJQ9pOeHCdjj2rclblsmQm-uyRBkcE47mPUxao7iWg/edit?usp=sharing">BASE DE DATOS</a></li>
            <li><a href="https://docs.google.com/document/d/1a5ZhwsbY6YU74No_KtLCsmPv-Cz_UbeVSvb0FjqH_n8/edit?usp=sharing">Spring Framework </a></li>
          </ul></li>
          <li><a href="cerrar_se.php">Salir</a></li>
        </ul>
      </nav>
    </header>
        <div class="section" id="contacts">
            <h1><span>Sigeme En:</span></h1>
            <div>
                <a href="https://www.sololearn.com/" target="_blank">
                    <img alt="SoloLearn" src="https://www.sololearn.com/Uploads/icons/sololearn.png" height="100" width="100"/>
                </a>
                <a href=" https://www.instagram.com/">
                    <img alt="instagram" src="../acesos/imagen/pngwing.com (1).png" height="100" width="100"/>
                </a>
                <a href="https://twitter.com/">
                    <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" height="100" width="100"/>
                </a>
                <a href="https://www.youtube.com/">
                    <img alt="youtube" src="../acesos/imagen/pngwing.com.png" height="100" width="100"/>
                </a>
            </div>
        </div>
    <footer>
        <div class="copyright">
            &copy; <b>2021. All rights reserved for Jeyson Jose Brito Melendez.</b>
        </div>
    </footer>
    <script src=""></script>

    </body>
</html>