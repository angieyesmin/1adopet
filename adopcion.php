<!DOCTYPE html>
<html lang="en">
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/booststrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- BOOSTSTRAP CDN-->
        <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
        <!--Owl-carousel CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
        <link  rel="stylesheet"
           href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
           integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
        <!--font awesome icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <!--Custom CSS file-->
        <link rel="index.php">
   
    </header>
    <body>
        <header>
            <section class="navbar">
                <center>
                   <div class="">
                        <div class="logo">
                            <a href ="#" tile ="logo">
                                <img src="img/adoppegea.png">
                            </a>
                        </div>
                    </div>
                </center>

                <div style="text-align: left;">
                   <div class="menu text-right">
                     <ul>
                        <li style="display: inline-block; margin-right:10px;">
                         <a href="Adopet.php" class ="btn btn-primary">Home</a>
                        </li>
                        <li style="display: inline-block; margin-right:10px;">
                         <a href="Donacion.php" class ="btn btn-primary">Donacion</a>
                        </li>
                        <li style="display: inline-block; margin-right:10px;">
                         <a href="Adopcion.php" class ="btn btn-primary">Adopcion</a>
                        </li>
                        <li style="display: inline-block; margin-right:10px;">
                         <a href="Catalogo.php" class ="btn btn-primary">Catalogos</a>
                        </li>
                     </ul>
                   </div>
                </div>
            </section>
        </header>
        <style>
            header{
                background-color:#D9D9D9;
            }
            body{
                background-color: #E6CCCC;
            }
            .form-container{
                display: flex;
                justify-content: center;
                aling-items: center;
                heigth: 100vh;
            }
        </style>
        <div class="form-container">
            <form action="php\insertar.php" class="form-register" method="post" enctype="multipart/form-data">
               <h1 class="form-title"> Introducir los papeles de adopcion</h1> 
               <div class="container-flex">
                 <label for="" class="form-label">Nombre</label>
                 <input type="text" class="form-input" name="Nombre" required>
               </div>
               <div class="contauner-flex">
                 <label for="" class="form-label">Domicilio</label>
                 <input type="text" class="form-input" name="Domicilio" required>
               </div>
               <div class="contauner-flex">
                 <label for="" class="form-label">Fecha</label>
                 <input type="date" class="form-input" name="Fecha" required>
               </div>
               <input type="hidden" name="tipo" value="adopcion">
               <input type="file" name="archivo" class="form-file" required>
               <input type="submit" class="form-submit">
            </form>
        </div>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                margin:0;
                font-family: sans-serif;
            }
            .form-register{
                width: 95%;
                max-width: 500px;
                background: white;
                padding: 20px;
            }
            .form-title{
                margin-top:0;
                font-size:1.7em;
                text-aling: center;
            }
            .form-label, .form-input{
                display: block;
            }
            .form-label{
                width:30%;
            }
            .form-input{
                width:70%;
                padding:10px;
                font-size:1em;
            }
            .form-file{
                font-size:1em;
                margin:10px 0;
            }
            .container-flex{
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
                align-items: center; 
            }
            .form-submit{
                width: 100%;
                background: #3E2E6F;
                border: none; 
                color: white;
               font-size: 1em;
               margin-top: 10px;
               cursor: pointer;
    }
        </style>
    </body>
</html>