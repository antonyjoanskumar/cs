<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catholic Sangam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!-- Link to CSS -->

    <style>
        /* Custom style for navbar height increase */
        .navbar {
            padding-top: 2.5rem; /* Increase top padding */
            padding-bottom: 2.5rem; /* Increase bottom padding */
        }

        .navbar-expand-lg {
            height: 10vh; /* Set height as a percentage of the viewport height */
        }

        /* Increase the size of the left logo */
        .navbar .circular-logo {
            height: 70px; /* Adjust height as needed */
            width: auto; /* Maintain aspect ratio */
        }

        /* Increase the size of the right Jesus photo */
        .navbar img {
            height: 80px; /* Adjust height as needed */
            width: auto; /* Maintain aspect ratio */
        }

        /* Reduce slogan size */
        .navbar .slogan {
            font-size: 0.8rem; /* Adjust font size to make it smaller */
        }

        /* Light blue background for the page */
        body {
            background-color: #e3f2fd; /* Light blue shade */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
    <div class="container-fluid">
        <!-- Left: Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo.png" alt="Logo" class="circular-logo">
    <span class="fs-4 text-light">
        Kuzhithurai Diocese Catholic Sangam<br>
        <span class="slogan text-light">
            Towards social, political, and economic transformation through the leadership of the laity.
        </span>
    </span>
        </a>

        <!-- Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="governing.php">Governing Body</a></li>
                
                <!-- Dropdown Menu for Parish Level Units -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="parishDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Parish Level Units
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="parishDropdown">
                        <li><a class="dropdown-item" href="karankadu.php">Karankadu Vicariate</a></li>
                        <li><a class="dropdown-item" href="subcommittees.php">Mulagumoodu Vicariate</a></li>
                        <li><a class="dropdown-item" href="subcommittees.php">Maathiravilai Vicariate</a></li>
                        <li><a class="dropdown-item" href="subcommittees.php">Puthenkadai Vicariate</a></li>
                        <li><a class="dropdown-item" href="subcommittees.php">Vencode Vicariate</a></li>
                        <li><a class="dropdown-item" href="subcommittees.php">Thiruthuvapuram Vicariate</a></li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link text-light" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- Right: Jesus Photo -->
        <img src="images/deva2.jpg" alt="Logo" class="circular-logo">
    </div>
</nav>
<div class="container mt-4">
