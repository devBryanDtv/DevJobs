<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevJobs - Encuentra tu trabajo como Developer</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- FontAwesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f8f9fa;
            }
            .jumbotron {
                position: relative;
                background: url('https://source.unsplash.com/1600x900/?developer,code') no-repeat center center;
                background-size: cover;
                color: white;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            }
            .jumbotron::before {
                content: '';
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 1;
            }
            .jumbotron .container {
                position: relative;
                z-index: 2;
            }
            .feature {
                padding: 20px;
                border-radius: 10px;
                background-color: white;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                margin-bottom: 20px;
            }
            .feature:hover {
                box-shadow: 0 0 20px rgba(0,0,0,0.2);
            }
            .contact-section {
                background-color: #000;
                color: #fff;
                padding: 50px 0;
            }
            .contact-section h2, .contact-section h4, .contact-section a {
                color: #fff;
            }
            .contact-section a:hover {
                text-decoration: underline;
            }
            .contact-section .form-control {
                background-color: #333;
                color: #fff;
                border: 1px solid #444;
            }
            .contact-section .form-control::placeholder {
                color: #bbb;
            }
            .contact-section .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">DevJobs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jobs">Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <div class="container">
                <h1 class="display-4">Bienvenido a DevJobs</h1>
                <p class="lead">Encuentra tu trabajo ideal como Developer</p>
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Iniciar Sesión</a>
                <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Registrarse</a>
            </div>
        </div>

        <div class="container">
            <div id="features" class="row">
                <div class="col-md-4 feature">
                    <h3>Variedad de Ofertas</h3>
                    <p>Accede a una amplia variedad de ofertas de trabajo en el sector de desarrollo de software.</p>
                </div>
                <div class="col-md-4 feature">
                    <h3>Filtrado Avanzado</h3>
                    <p>Utiliza nuestro sistema de filtrado avanzado para encontrar las ofertas que mejor se adapten a ti.</p>
                </div>
                <div class="col-md-4 feature">
                    <h3>Postulación Rápida</h3>
                    <p>Postúlate a los trabajos de manera rápida y sencilla con nuestro sistema optimizado.</p>
                </div>
            </div>

            <div id="jobs" class="row mt-5">
                <div class="col-12">
                    <h2 class="text-center">Trabajos Recientes</h2>
                    <!-- Aquí iría el listado dinámico de trabajos -->
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            Desarrollador Front-End en TechCorp
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Ingeniero de Software en WebSolutions
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Desarrollador Full-Stack en Innovatech
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="contact-section mt-5">
            <div class="container">
                <h2 class="text-center">Contacto</h2><br>
                <div class="row">
                    <div class="col-md-6">
                        <h4><i class="fas fa-envelope"></i> Correos Electrónicos</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-envelope"></i> Bryan De La Torre: <a href="mailto:2121100412@soy.utj.edu.mx">2121100412@soy.utj.edu.mx</a></li>
                            <li><i class="fas fa-envelope"></i> Alberto Magaña: <a href="mailto:2121100413@soy.utj.edu.mx">2121100413@soy.utj.edu.mx</a></li>
                            <li><i class="fas fa-envelope"></i> Paola Salvador: <a href="mailto:2121200440@soy.utj.edu.mx">2121200440@soy.utj.edu.mx</a></li>
                            <li><i class="fas fa-envelope"></i> Edmundo Guerrero: <a href="mailto:2121200440@soy.utj.edu.mx">2121200440@soy.utj.edu.mx</a></li>

                        </ul>

                    </div>
                    <div class="col-md-6">
                        <h4><i class="fab fa-whatsapp"></i> Teléfonos WhatsApp</h4>
                        <ul class="list-unstyled">
                            <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/523326992453">3326992453</a></li>
                            <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/523319172889">3319172889</a></li>
                            <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/523315635600">3315635600</a></li>
                            <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/523315635600">3315635600</a></li>

                        </ul>
                    </div>
                </div>
                <form class="mt-4">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
