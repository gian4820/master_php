<!DOCTYPE html>
<html lang="es">

<head>
    <title>Nectarina Clothes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div id="container">
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:wheat; margin-bottom: 10px;  padding: 0px;">
            <div class="container-fluid">
                <div id="logo">
                    <img src="assets/img/logo/logo.png" alt="Logo">
                </div>
                <a class="navbar-brand" href="index.php">Nectarina Clothes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="content">
            <!--Side bar -->
            
            <aside id="sidebar">
                <div id="login" class="block_aside">
                    <h3>Login</h3>
                    <form action="#" method="POST">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <input type="submit" value="Login">
                    </form>
                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>  
                </div>
            </aside>


            <!-- GENERAL CONTENT -->
            <div id="central">
                <h1>Productos destacados    </h1>
                <div class="product">
                    <img src="assets/img/productos/DSC_4926.jpg" alt="">
                    <h2>Nombre del producto</h2>
                    <p>$500</p>
                    <button type="button" class="btn btn-outline-success btn-sm">Comprar</button>
                </div>
                <div class="product">
                    <img src="assets/img/productos/DSC_4926.jpg" alt="">
                    <h2>Nombre del producto</h2>
                    <p>$500</p>
                    <button type="button" class="btn btn-outline-success btn-sm">Comprar</button>
                </div>
                <div class="product">
                    <img src="assets/img/productos/DSC_4926.jpg" alt="">
                    <h2>Nombre del producto</h2>
                    <p>$500</p>
                    <button type="button" class="btn btn-outline-success btn-sm">Comprar</button>
                </div>
                <div class="product">
                    <img src="assets/img/productos/DSC_4926.jpg" alt="">
                    <h2>Nombre del producto</h2>
                    <p>$500</p>
                    <button type="button" class="btn btn-outline-success btn-sm">Comprar</button>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p>Developed by GG Design &copy 2020</p>
        </footer>

    </div>

</body>

</html>