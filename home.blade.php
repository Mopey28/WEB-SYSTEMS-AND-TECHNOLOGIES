<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A leading e-commerce platform for all your shopping needs.">
    <meta name="keywords" content="e-commerce, online shopping, products">
    <meta name="author" content="Your Company Name">
    <title>Home Page - Mobile Legends Style</title>

    <!-- Google Fonts for a Mobile Legends-inspired font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap">

    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for Mobile Legends theme */
        body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        overflow-x: hidden;
        color: #fff;
        background: url('https://your-image-url.jpg') no-repeat center center fixed;
        background-size: cover;
    }
    
    /* Lighten the overlay to improve visibility */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4); /* Reduced opacity */
        z-index: -1;
    }

    .container-custom {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 100px 20px;
        text-align: center;
        color: #f8c31c; /* Gold color for better visibility */
    }

    .navbar-custom {
        background-color: rgba(0, 0, 0, 0.8); /* Darker semi-transparent navbar */
        border-bottom: 2px solid #f8c31c; /* Gold border */
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
        color: #f8c31c; /* Gold text color */
        font-weight: bold;
        text-shadow: 0 0 5px #000;
    }

    .navbar-custom .nav-link.active {
        color: #f8c31c; /* Gold color for the active link */
        font-weight: bold;
        text-shadow: 0 0 5px #000;
    }

    .navbar-custom .nav-link:hover {
        color: #fff;
    }

    .btn-custom {
        background-color: #f8c31c; /* Gold button color */
        border-color: #f8c31c;
        color: #000;
        font-weight: bold;
    }

    .btn-custom:hover {
        background-color: #e6ae14;
        border-color: #e6ae14;
    }

    footer {
        background-color: rgba(0, 0, 0, 0.8);
        color: #f8c31c;
        text-align: center;
        padding: 10px 20px;
        position: fixed;
        width: 100%;
        bottom: 0;
        z-index: 2;
        border-top: 2px solid #f8c31c; /* Gold border */
    }

    footer a {
        color: #f8c31c;
        text-decoration: none;
    }

    footer a:hover {
        color: #fff;
    }

    .ml-heading {
        font-family: 'Bangers', sans-serif;
        font-size: 4rem;
        text-transform: uppercase;
        color: #f8c31c; /* Gold color */
        text-shadow: 2px 2px 4px #000;
    }

    .animate-fade-in {
        animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    </style>
</head>
<body>
    <!-- Overlay for darkening the background image -->
    <div class="overlay"></div>

    <!-- Bootstrap Navbar for navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom animate-fade-in">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mobile Legend</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container-custom animate-fade-in">
        <h1 class="ml-heading">Mobile Legend Bang Bang</h1>
        <p class="lead">Experience the best online shopping platform, inspired by the dynamic world of Mobile Legends.</p>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
            <a href="{{ route('products.create') }}" class="btn btn-custom me-md-2">Add New Product</a>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">View Products</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Mobile Legend. All rights reserved.</p>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
    </footer>

    <!-- Bootstrap JS Framework for interactive components -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
