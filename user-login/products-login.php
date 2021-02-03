<?php

    session_start();

    if (!isset($_SESSION['usuario']))
    {
        echo "<script>alert('Debes iniciar sesión!');</script>";
        echo "<script>window.location.href='index.php';</script>";
        die();
        exit();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Estilos del sitio -->

    <link rel="stylesheet" href="styles-login/styles-menu-user-login.css">
    <link rel="stylesheet" href="styles-login/styles-products-login.css">
    <link rel="stylesheet" href="../styles/styles-footer.css">

    <!-- Estilos externos -->

    <link rel="stylesheet" href="../styles/animate.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Scripts externos -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Scripts internos -->

    <script src="../js/scripts.js"></script>
    <script src="../js/addClas.js"></script>
    <script src="../js/OnScrol.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <title>Productos</title>
</head>
<body>
    <?php
        require('menu-login.php');
    ?>
    
    <div class="layout"></div>
    
    <div class="banner">
        <div class="img-banner">
            <p>PRODUCTS</p>
        </div>
    </div>

    <div class="body container-fluid row">
        
        <div class="content-bar col-xs-12 col-md-12">
            <div class="content-panel">
                <section row>
                    <div class="col-xs-4 col-md-2 invernaderos"><h3>Invernaderos</h3></div>
                    <div class="col-xs-4 col-md-2 aspersores"><h3>Aspersores</h3></div>
                    <div class="col-xs-4 col-md-2 complementos"><h3>Complementos</h3></div>
                    <div class="col-md-2 mangeuraRiego"><h3>Mangueras de riego</h3></div>
                    <div class="col-md-2 extAire"><h3>Extracores de aire</h3></div>
                    <div class="col-md-2 sistemaRiego"><h3>Sistemas de riego</h3></div>
                </section>
            </div>
        </div>

        
        <div class="content-cards row">
            <div id="head-content-card">
                <p>Encuentra los mejores productos para tu invernadero en GreenSource</p>
            </div>

            <div class="col-md-3 bar-left">
                <div>
                    <h3>Categorías</h3>
                    <ul>
                        <li><a href="#">Invernaderos</a></li>
                        <li><a href="#">Compolementos</a></li>
                        <li><a href="#">Riego</a></li>
                        <li><a href="#">Sensores</a></li>
                        <li><a href="#">Ventilación</a></li>
                        <li><a href="#">Luz</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3>Ordenar por precio</h3>
                    <ul>
                        <li><a href="#">$0 - $1000</a></li>
                        <li><a href="#">$1000 - $5000</a></li>
                        <li><a href="#">$5000 - $8000</a></li>
                        <li><a href="#"> $8000</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Comentarios</h3>
                    <form action="">
                        <input type="text" placeholder="Nombre del producto">
                        <input type="text" placeholder="Estado">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Comentarios"></textarea>
                        <br>
                        <input type="submit">
                    </form>
                </div>
            </div>
           
            <div class="cards col-md-9">
                <div>
                    <section id="p1">
                        <div class="description-cards">
                            <img src="../images/product-1.jpg">
                            <div>
                                <!-- <span class="icon-star"></span> -->
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                
                            </div>
                        </div>
                    </section>
                    <section id="p2">
                        <div class="description-cards">
                        
                            <img src="../images/product-2.jpg">
                            <div>
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div>
                        </div>
                    </section>
                    <section id="p3">
                        <div class="description-cards">
                        
                            <img src="../images/product-3.jpg">
                            <div>
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div>
                        </div>
                    </section>
                    <section id="p4">
                        <div class="description-cards">
                        
                            <img src="../images/product-4.jpg">
                            <div>
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div>
                        </div>
                    </section>
                    <section id="p5">
                        <div class="description-cards">
                        
                            <img src="../images/product-5.jpg">
                            <div>
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div>
                        </div>
                    </section>
                    <section id="p7">
                        <div class="description-cards">
                        
                            <img src="../images/product-6.jpg">
                            <div>
                                <p>Invernadero</p>  
                                <p class="price"> $10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div>
                        </div>
                    </section>
                    <section id="p8">
                        <div class="description-cards">
                        
                            <img src="../images/product-7.jpg">
                            <div>
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div> 
                        </div>
                    </section>
                    <section id="p9">
                        <div class="description-cards">
                            
                            <img src="../images/product-8.jpg">
                            <div>
                                <p>Invernadero</p>
                                <p class="price">$10000</p>
                                <p id="features">
                                    <a href="" class="btn btn-success">Comprar ahora</a>
                                </p>
                                <!-- <span class="icon-star"></span> -->
                            </div>     
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <?php
        require('../footer.html');
    ?>
</body>
</html>