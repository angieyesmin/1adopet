<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
    <link rel="register.php">
    <link rel="Catalogo.php">
    <link rel="Adopcion.php">
    <link rel="Donacion.php">
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
                        <a href="Catalogo.php" class="btn btn-primary">Catalgo</a>
                    </li>
                   
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
</header>
    <center>         

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src=" img\gato.jpg" width="65%" height="500px" alt="...">

                </div>


                <div class="carousel-item">
                    <img src=" img\pero.jpg " width="65%" height="500px" alt="...">

                </div>

                <div class="carousel-item">
                    <img src=" img\RejaPerrito.jpg" width="65%" height="500x" alt="...">

                </div>


                <div class="carousel-item">
                    <img src="img\R2.jpg" width="65%" height="500x" alt="...">

                </div>


                <div class="carousel-item">
                    <img src=" img\Gatitos.jpg " width="65%" height="500x" alt="...">

                </div>

                <div class="carousel-item">
                    <img src=" img\Perritos.jpg " width="65%" height="500x" alt="...">

                </div>


                <div class="carousel-item">
                    <img src=" img\Gatos_y_Perros.jpeg " width="65%" height="500x" alt="...">

                </div>
                
                <div class="carousel-item">
                    <img src=" img\PerritoBolsa.jpg " width="65%" height="500x" alt="...">

                </div>


                <div class="carousel-item">
                    <img src=" img\gatos.jpg" width="65%" height="500x" alt="...">

                </div>

            </div>


            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="color: #333333;"></span>
                <span class="sr-only">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="color: #333333;"></span>
                <span class="sr-only">Next</span>


            </button>
        </div>

        <style>

        header {
            background-color:#D9D9D9;
        }    

        body {
        background-color: #E6CCCC;
        }




        .card {
          margin-bottom: 20px;
          padding: 20px;
         
         border-radius: 10px;
         text-align: center;
         overflow: hidden;
         background-color: #f9f9f9; /* Cambio de color de fondo */
        }

        .card img {
         max-width: 80%; /* Cambio del ancho máximo de la imagen */
         margin: 20px auto; /* Cambio del margen de la imagen */
        
         
        }

        

        </style>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="img\perros.jpg" width="80%">
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Informacion</a>
                    </li>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img\image.jpg" width="80%">
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Informacion</a>
                    </li>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img\Adiop.jpg" width="80%">
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Informacion</a>
                    </li>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img\descarga.jpg" width="80%" height="auto">
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Informacion</a>
                    </li>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img\perro.jpg" width="80%" height="auto">
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Informacion</a>
                    </li>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img\perro¿.jpg" width="80%" height="auto">
                    <li style="display: inline-block; margin-right: 10px;">
                        <a href="Catalogo.php" class="btn btn-primary">Informacion</a>
                    </li>
                </div>
            </div>
        </div>

        <center>


            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img\N2.jpg" width="65%" height="500px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>GRACIAS POR ADOPTAR CON NOSOTROS </h5>
                    </div>
                </div>




            </div>
            <style>                   
            .footer-container {
                width: 100%;
                /* Ancho del contenido del footer */
                margin: 0 auto;
                /* Centrar el contenido del footer */
                background-color: #f2f2f2;
                padding: 20px 0;
                text-align: left;

            }
            .social-icons {
                font-size: 35px;
                text-align: right;
                margin-right: 50px;
                margin-bottom: 50px;
            }
            .social-icons a {
                color: #333;
                text-decoration: none;
                margin-right: 10px;
                /* Espacio entre los iconos */
            }
            .EL_GPS{

              
            }
            .LA_DECRIPCION{
              text-align: left;
              margin-left: 20px;
              font-size: 10px; /* Tamaño de fuente para la descripción */
            }
            </style>                                          
            <footer>
                      
                <div class="footer-container">
                        <center> 
                           <img src="img\adoppegea.png" width="29%" height="100px" alt="...">
                         </center>
                          <br>
                         <center>  
                        <div class="El_GPS">    
                          <img src="img\GPS.jpg" width="36%" height="400px" alt="...">
                         <!-- AQUI VA LA imagen de EL GPS  -->
                        </div>
                         </center>
                          <style>
                            .LA_DESCRIPCION {
                             background-color: #f0f0f0; /* Color de fondo */
                             padding: 20px; /* Espacio alrededor del contenido */
                             border-radius: 10px; /* Bordes redondeados */
                             text-align: center; /* Alineación del texto */
                             font-family: Arial, sans-serif; /* Tipo de fuente */
                            }
                           .LA_DESCRIPCION h1 {
                             color: #333; /* Color del texto */
                             font-size: 24px; /* Tamaño del texto */
                             font-weight: normal; /* Peso normal de la fuente */
                             line-height: 1.5; /* Altura de línea */
                            }
                          </style>
                         <div class= "LA_DESCRIPCION">
                         <h1>Querido usuario si le a gustado nuetra paguina nos gustaria 
                          que pudiera ingresar a nustras redes sociales en donde encontrara mas informcaion de 
                          nuestra organizacion, a si como de los patrocinadores de nuestra organizacion. 🐾🐾🐾
                         </h1> 
                         </div>
                         <div class="social-icons">
                        <a href="https://es-la.facebook.com/login/device-based/regular/login/?login_attempt=1"> <i
                                class="fab fa-facebook"></i> </a>
                        <a href="https://web.whatsapp.com/"> <i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
