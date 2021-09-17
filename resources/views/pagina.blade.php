<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!---Contenedor de anuncio --->
        <div class="container-fluid:100%" style="background-color: #2ac8ff;height:40px;">
            <div class="row">
                <div class="col mt-2" style="text-align: center">
                    <span style="color: white"><h6>Compra en linea y recibe en tu domicilio o recoge en tienda en 1 hora</h6></span>
                </div>
            </div>
        </div>
        <br>
        <!---Contenedor de imagen, buscador, iniciar sesión-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <img src="{{asset('img/logo3.png')}}" alt="" style="height: 160px;width:290px">
                </div>
                <div class="col-sm-5 mt-5">
                    <nav class="navbar ">
                        <form class="form-inline">
                            <input class="form-control mr-sm-1" type="search" placeholder="¿Que vamos a buscar.?" aria-label="Search" style="width: 400px">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </nav>
                </div>
                <div class="col mt-5">
                    <nav class="nav ">
                        <a class="nav-link active" href="#">Inicia sesión</a>
                        <a class="nav-link" href="">|</a>
                        <a class="nav-link" href="#">Crear cuenta</a>
                    </nav>
                </div>
            </div>
        </div>
        <br>
        
        <div class="container-fluid:100%" style="background-color: #2ac8ff;height:60px;">
            <div class="row">
                <div class="col mt-2">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><span style="color: white"><h6>Inicio</h6></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span style="color: white"><h6>Productos</h6></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span style="color: white"><h6>Ofertas</h6></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span style="color: white"><h6>Tienda fisica</h6></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span style="color: white"><h6>Mayoreo</h6></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span style="color: white"><h6>Servicio al cliente</h6></span></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <!---Carrucel--->
        <div class="container-fluid:100%">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/img1.jpg')}}" alt="First slide" style="height: 500px;width:120px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/img4.jpg')}}" alt="First slide" style="height: 500px;width:120px;" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/img3.jpg')}}" alt="First slide" style="height: 500px;width:120px;" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col">
                    <h3>ULTIMOS AGREGADOS</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p1.jpg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Invictus para hombre / 200 ml Eau De Toilette Spray</h5>
                                <p class="card-text">Paco Rabanne</p>
                                <small class="text-muted"><center><h5>$ 2,149.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/ss.jpg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sweet Like Candy para mujer / 236 ml Body Mist Spray</h5>
                                <p class="card-text">Ariana Grande</p>
                                <small class="text-muted"><center><h5>$ 299.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p3.jpeg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Ari para mujer / 236 ml Body Mist Spray</h5>
                                <p class="card-text">Ariana Grande</p>
                                <small class="text-muted"><center><h5>$ 299.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p4.jpeg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Perry Ellis 18 Orchid para mujer / 236 ml Body Mist Spray</h5>
                                <p class="card-text">Perry Ellis</p>
                                <small class="text-muted"><center><h5>$ 249.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p5.jpeg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Amor Amor para mujer / SET - 100 ml Eau De Toilette Spray</h5>
                                <p class="card-text">Cacharel</p>
                                <small class="text-muted"><center><h5>$ 1,099.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p6.jpg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Lady Million Empire para mujer / 80 ml Eau De Parfum Spray</h5>
                                <p class="card-text">Paco Rabanne</p>
                                <small class="text-muted"><center><h5>$ 1,649.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p7.jpg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">CH Beauties para mujer / 100 ml Eau De Parfum Spray</h5>
                                <p class="card-text">Carolina Herrera</p>
                                <small class="text-muted"><center><h5>$ 1,749.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p8.jpg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">CH Beasts para hombre / 100 ml Eau De Parfum Spray</h5>
                                <p class="card-text">Carolina Herrera</p>
                                <small class="text-muted"><center><h5>$ 1,849.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/p9.jpg')}}" alt="First slide" style="height:350px;width:200;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Good Girl Fantastic Pink para mujer / 80 ml Eau De Parfum Spray</h5>
                                <p class="card-text">Carolina Herrera</p>
                                <small class="text-muted"><center><h5>$ 1,849.00 MXN</h5></center></small>
                                <a href="#" class="btn btn-secondary">Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/a1.jpg')}}" alt="First slide" style="height: 400px;width:80px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/a2.jpg')}}" alt="First slide" style="height: 400px;width:80px;" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/a3.jpg')}}" alt="First slide" style="height: 400px;width:80px;" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5" style="text-align: center" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col mt-5">
                            <samp><h3>CONOCE NUESTRA TIENDA</h3></samp>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col" style="text-align: start">
                            <samp><h6>Ubicada en el centro comercial Multiplaza Bosques (Mega Soriana Bosques), en la zona de Aragón al oriente de la Ciudad de México.</h6></samp>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <samp><h6>Estamos a tus órdenes los 365 días del año.</h6></samp>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col">
                            <span class="btn btn-secondary btn-block">Ver más</span>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col" style="text-align: center"><h2>Perfumes Finos® Fragancias que inspiran</h2></div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col" style="text-align: center"><p>Somos el OUTLET online de perfumes originales más grande en México.</p></div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col" style="text-align: center"><p>Con nosotros encontrarás la mas amplia variedad de perfumes descontinuados, novedades, clásicos, al mejor precio del mercado.</p></div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col" style="text-align: center"><strong><p>Nuestro catálogo incluye más de 1000 perfumes de los mejores diseñadores internacionales.</p></strong></div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col" style="text-align: center"><p>Todos nuestros productos están plenamente garantizados.</p></div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        <div class="container" style="background-color: #e8dad8">
            <div class="row">
                <div class="col mt-2" style="text-align: center">
                    <span style="color: #968b89"><h2>Suscríbete a nuestro boletín</h2></span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col" style="text-align: center">
                    <span style="color:#968b89 "><p>Ingresa tu dirección de correo electrónico a continuación para unirte a nuestra lista de</p></span>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center">
                    <span style="color:#968b89 "><p>correo y recibir nuestras últimas noticias y ofertas en tu bandeja de entrada.</p></span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col" style="text-align: center">
                    <nav class="navbar ">
                        <form class="form-inline">
                            <input class="form-control mr-sm-1" type="search" placeholder="¿Que vamos a buscar.?" aria-label="Search" style="width: 400px">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
                        </form>
                    </nav>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="containe-fluid:100%" style="background-color: #282b28">
            <div class="row mt-4">
                <div class="col-sm-1"></div>
                <div class="col-sm-2 mt-4"><span style="color: slategrey"><h6>TIENDA</h6></span></div>
                <div class="col-sm-2 mt-4"><span style="color: slategrey"><h6>ENLACES DE INTERES</h6></span></div>
                <div class="col-sm-2 mt-4"><span style="color: slategrey"><h6>PAGINAS INFORMATIVAS</h6></span></div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Multiplaza Bosques Local 5</h6></span></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Perfumes de mujer</h6></span></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Quienes somos</h6></span></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Bosques de Aragón</h6></span></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Perfumes de hombre</h6></span></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Aviso de privacidad</h6></span></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>(MEGA Soriana Aragón)</h6></span></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Sets</h6></span></div>
                <div class="col-sm-2"><span style="color: slategrey"><h6>Política de reembolsos</h6></span></div>
            </div>
            <br>
            <div class="row">
                <div class="col" style="text-align: center">
                    <span style="color:white"><p>© 2021 PerfumesFinos.com.mx.</p></span>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </body>
</html>
