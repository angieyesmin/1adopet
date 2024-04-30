<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/style1.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="index.php">
<body>

<header>   

    <section class="navbar">

        <center>
            <div class="">
                <div class="logo">
                    <a href="#" tile="logo">
                        <img src="img/adoppegea.png" alt="Adocion de perros" class="imag-responsive">
                    </a>
                </div>
        </center>

        <div style="text-align: left;">
      <div class="menu text-right">
                <ul>
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Adopet.php" class="btn btn-primary">Home</a>
                    </li>
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Donacion.php" class="btn btn-primary">Donacion</a>
                    </li>
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Adopcion.php" class="btn btn-primary">Adopcion</a>
                    </li>
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Catalogo</a>
                    </li>
                    
                </ul>
            </div>

    </div>

  </div>
  <script src="script.js"></script>

</header>

<br>

  <body>

  <center>

<div>
<h5>    

hola me da mucho gusto que quiera donar en nuestra organizacion, con tu ayuda pordremos rescatar mas perritos y gatitos que necesitan de nuestra
ayuda, gracias por confiar en nosotros. 

</h5>
</div>
</center>

 

<!-- Aquí comienzan las tarjetas -->
<div class="container mt-5">
    <div class="row">
        <!-- Tarjeta 1 -->
        <div class="col-md-3">
            <div class="card">

                <img src="img/Gatito.jpg" class="card-img-top" alt="Imagen 1">

                <div class="card-body">
                <center>
                    <p class="card-text">Donar juguetes.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaljugetes">Donar</button>
                </center>
                </div>
            </div>
        </div>

        <!-- Tarjeta de donacion comida-->
        <div class="col-md-3">
            <div class="card">
                <!-- Ajusta la ruta de la imagen y el contenido según sea necesario -->
                <img src="img\gatos.jpg" class="card-img-top" alt="Imagen 2">
                <div class="card-body">
                <center>
                    <p class="card-text">Donar comida</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalcomida">Donar</button>
                    </center>
                </div>
            </div>
        </div>


        <!-- Tarjeta donar dinero -->
        <div class="col-md-3">
            <div class="card">
                <!-- Ajusta la ruta de la imagen y el contenido según sea necesario -->
                <img src="img\PerritoBolsa.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                <center>
                    <p class="card-text">Donar dinero</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDonacion2">Donar</button>
                    </center>
                </div>
            </div>
        </div>
        
       
     


    <!-- Modal de Donación -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="modalDonacionLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalDonacionLabel">Donación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">



            <!-- Formulario de Donación -->
            <form>
              <div class="form-group">
                <label for="nombreDonante">Nombre</label>
                <input type="text" class="form-control" id="nombreDonante">
              </div>
              <div class="form-group">
                <label for="cantidadDonacion">Cantidad</label>
                <input type="number" class="form-control" id="cantidadDonacion">
              </div>
              <button type="submit" class="btn btn-primary">Donar</button>
            </form>
          </div>
        </div>
      </div>
    </div>




    <!-- Modal de jugetes -->
    <div class="modal fade" id="modaljugetes" tabindex="-1" role="dialog" aria-labelledby="modalDonacionLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalDonacionLabel">jugetes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


          
            <!-- Formulario de Donación juegetes  -->
            <form>
              <div class="form-group">
              <form action="php/insertar.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nombreJuguete">Nombre del juguete</label>
        <input type="text" class="form-control" id="nombreJuguete" name="NombreJuguete" required>
    </div>

    <div class="form-group">
        <label for="cantidadJuguete">Cantidad</label>
        <input type="number" class="form-control" id="cantidadJuguete" name="CantidadJuguete" required>
    </div>

    <!-- Parte para la carga de la imagen en formato jpg -->
    <div class="form-group">
        <label for="imagenJuguete">Imagen del juguete</label>
        <input type="file" class="form-control-file" id="imagenJuguete" name="imagenJuguete" accept="image/*" required>
    </div>
    
    <!-- Vista previa de la imagen -->
    <div class="form-group">
        <label>Vista previa del juguete:</label>
        <img id="vistaPreviaImagen" src="#" alt="Vista previa del juguete" style="max-width: 100%; display: none;">
    </div>
    <!-- Botones para cancelar y donar -->
    <button type="reset" class="btn btn-primary">Cancelar</button>
    <button type="submit" class="btn btn-primary">Donar</button>
    <!-- Campo oculto para identificar el tipo de formulario -->
    <input type="hidden" name="tipo" value="juguetes">
</form>

          </div>
        </div>
      </div>
    </div>

    <!-- Mostrar imagen de el archivo subido  funcionalidad en JS, jugetes-->
    <script>
document.getElementById('imagenJuguete').addEventListener('change', function(event) {
    var reader = new FileReader(); // Crea una nueva instancia de FileReader para leer el archivo
    reader.onload = function(e) {
        var vistaPrevia = document.getElementById('vistaPreviaImagen');
        vistaPrevia.src = e.target.result; // Establece el resultado de FileReader como src de la img
        vistaPrevia.style.display = 'block'; // Asegura que la imagen sea visible
    };
    reader.readAsDataURL(event.target.files[0]); // Lee el archivo seleccionado
});
</script>






<!-- Comienza parte del modal de comida  -->


<div class="modal fade" id="Modalcomida" tabindex="-1" role="dialog" aria-labelledby="modalDonacionLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Modalcomida">Comida</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

 <!-- Formulario de comida-->
 <form>
              <div class="form-group">
                <label for="nombreDonante">Nombre de la comida</label>
                <input type="text" class="form-control" id="nombreDonante">
              </div>
              <div class="form-group">
                <label for="cantidadDonacion">Cantidad</label>
                <input type="number" class="form-control" id="cantidadDonacion">
              </div>
              <div class="form-group">


    <label for="imagencomida">Imagen de comida </label>
    <input type="file" class="form-control-file" id="imagencomida" accept="image/*">
  </div>

  <!-- Vista previa de la imagen -->
  <div class="form-group">
    <label>Vista previa de la comida:</label>
    <img id="vistacomida" src="#" alt="Vista previa de la comida" style="max-width: 100%; display: none;">
  </div>

                <!-- Botones para cancelar y donar dentro del modal  -->
              <button type="submit" class="btn btn-primary">Cancelar </button>
              <button type="submit" class="btn btn-primary">Donar</button>

            </form>
          </div>
        </div>
      </div>
    </div>

        <!-- Mostrar imagen de el archivo subido  funcionalidad en JS, Comida-->
    






<!-- Comienza modal para la Donacion-->
<div class="modal fade" id="modalDonacion2" tabindex="-1" role="dialog" aria-labelledby="modalDonacionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDonacionLabel">Donacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de Donacion-->
                <form id="formularioDonacion">
                    <div class="form-group">
                        <label for="nombreDonante">Nombre</label>
                        <input type="text" class="form-control" id="nombreDonante">
                    </div>

                    <div class="form-group">
                        <label for="apellidoPaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellidoPaterno">
                    </div>

                    <div class="form-group">
                        <label for="apellidoMaterno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellidoMaterno">
                    </div>

                    <div class="form-group">
                        <label for="cantidadDonacion">Cantidad a donar</label>
                        <input type="number" class="form-control" id="cantidadDonacion">
                    </div>
                    
                    <!-- Botones para cancelar y donar dentro del modal  -->
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="btnDonar">Donar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para mostrar mensaje de éxito -->
<div class="modal fade" id="modalExito2" tabindex="-1" role="dialog" aria-labelledby="modalExito2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExito2Label">¡Gracias por tu donación!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tu generosidad nos ayuda a seguir adelante.
            </div>
            <div class="modal-footer">
                <a href="Donacion.php" class="btn btn-primary">Aceptar</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('formularioDonacion').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe

        // Aquí podrías enviar los datos del formulario a través de AJAX si lo necesitas

        // Oculta el modal de donación
        $('#modalDonacion2').modal('hide');

        // Muestra el modal de éxito
        $('#modalExito2').modal('show');
    });
</script>
    
    <!-- JavaScript de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>

  <style>

   header{
     background-color:#D9D9D9;
    }

   


    body{
      background-color: #E6CCCC;
    }
   .card-img-top {
      height: 200px; 
     width: 100%; 
     object-fit: cover;}
  </style>
</body>
</html>
