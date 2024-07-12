<?php include("cabecera.php"); 
// include("conexion.php"); 
//$objConexion = new conexion();
//$proyectos = $objConexion-> consultar("SELECT * FROM `proyectos`");
?>

<hr id="SobreMi" class=" text-white-50 ">

<div class="container">
    <div  class="p-5 mb-4 rounded-3" >
        <div id="sobremi" class="text-center py-5">
            <h1 class="display-5 fw-bold">Me llamo Alan Zablosky</h1>
            <div class="sobremi">
                <p>¡Hola! Soy Alan Zablosky, estudiante autodidacta, artista digital y programador web.
                    Este es mi portafolio donde subiré proyectos de práctica con el fin
                    de adquirir más conocimiento en el mundo de la programación web.</p>
                <a href="img/Fy.webp">
                    <button  class="btn btn-primary btn-lg">Mas info ?</button>
                </a>
            </div>
        </div>
    </div>

    <hr id="project" class=" text-white-50">

    <div id="indice">
        <div>
            <h1 class="tituloProyecto">Proyectos</h1>
        </div>

    <div class="" style="display: flex; justify-content:  space-evenly;">
        <div  class="card" style="width: 18rem;">
            <a href="#" class="triangle-link" target="_blank">
                <img src="img/Fy.webp" class="card-img-top" alt="algo">
            </a>
            <div class="card-body">
                <p class="card-text text-center">Proyecto 1</p>
            </div>
        </div>

        <div  class="card" style="width: 18rem;">
            <a href="https://github.com/AlanZablosky/Repo1--PiedraPapelTijera-Python" class="triangle inverted" target="_blank">
                <img src="img\Proyect2.jpg" class="card-img-top clip-inverted" alt="algo"> 
            </a>
            <div class="card-body">
                <p class="card-text text-center">Proyecto: Piedra,papel o tijeras en Python en codigo</p>
            </div>
        </div>

        <div  class="card" style="width: 18rem;">
            <a href="#" class="triangle" target="_blank">
                <img src="img/Fy.webp" class="card-img-top" alt="algo">
            </a>
            <div class="card-body">
                <p class="card-text text-center">Proyecto 3</p>
            </div>
        </div>
    </div>
</div>

<hr class=" text-white-50 mt-5">

<style>
    #indice{
        margin-top: 150px;
        margin-bottom: 150px;
}
    .sobremi {
            text-align: center; /* Centra el texto dentro del div */
            margin: 0 auto; /* Centra el div en la página */
            width: 60%; /* Ancho del div */
            padding: 20px; /* Espacio interno del div */
}
    .card{
        transition-duration: .3s;
}
    .card:hover{
        border: 5px solid #fff;
        scale: 1.2;
}
    .tituloProyecto{
        text-align: center;
        margin: 50px;
    }
</style>

<div>
    
<?php 
include("form-contacto.php"); ?> 
<?php
include ("pie.php"); 
?> 