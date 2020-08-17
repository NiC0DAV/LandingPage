<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Registra tus datos!</title>
</head>
<body>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/0.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>We predict the future</h5>
                    <p>We feed our universe with data in order to understand different realities. We're passionate about artificial intelligence, development, and content.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Artificial Intelligence</h5>
                    <p>The best way to predict the future is to create it. This premise leads us to develop strategies to make real time decisions.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Development</h5>
                    <p>If you imagine it, we develop it. We design strategies based on different technologies to efficiently automate your project.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Content</h5>
                    <p>We help you to identify your brand’s digital communication needs.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/4.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>E-Commerce</h5>
                    <p>Your own virtual store, we create solutions on the web, to boost your business.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid">
        <div class="formulario mt-5 px-2" style="border:solid #f8f9fa; border-radius:5px; max-width:800px; margin: auto;">
            <h3 class="text-center col">Formulario de registro</h3>
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="surname">Apellidos</label>
                    <input id="surname" class="form-control" type="text" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Télefono</label>
                    <input id="phone" class="form-control" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="id">Documento de Identidad</label>
                    <input id="id" class="form-control" type="number" name="id">
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea id="message" class="form-control" name="message" rows="3"></textarea>
                </div>
                <div class="text-center col">
                    <input type="submit" class="btn btn-success" value="Guardar" style="width:240px;">
                </div>
            </form>
        </div>
    </div>
</body>
</html>