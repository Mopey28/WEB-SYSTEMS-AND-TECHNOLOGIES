<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .container-custom {
            margin-top: 20px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            margin: 15px;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-image {
            max-width: 100px;
            max-height: 100px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .product-price {
            color: #ffc107;
            font-size: 1.25em;
            font-weight: bold;
        }

        .btn-purchase {
            margin-top: 10px;
            width: 100%;
        }

        .product-wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .alert {
            margin-top: 20px;
        }

        .product-info {
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        /* New styles for the search bar */
        .search-bar {
            max-width: 700px; /* Adjust the width as needed */
        }
    </style>
</head>
<body>
    <div class="container-custom">
        <h1 class="text-center">Products</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3 text-center">
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
        </div>

        <!-- Search Bar with Clear Button -->
        <form action="{{ route('products.index') }}" method="GET" class="mb-3">
            <div class="input-group search-bar mx-auto"> <!-- Added class for search bar -->
                <input type="text" name="search" class="form-control" 
                       placeholder="Search for products..." 
                       aria-label="Search for products" 
                       value="{{ request('search') }}"> <!-- Retain the search value -->
                <button class="btn btn-outline-secondary" type="submit">Search</button>
                <a href="{{ route('products.index') }}" class="btn btn-danger">Clear</a> <!-- Clear button -->
            </div>
        </form>

        <div class="product-wrapper">
            @foreach($products as $product)
                <div class="product-card">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" class="product-image">
                    <div class="product-info">
                        <h5>{{ $product->product_name }}</h5>
                        <p class="product-price">{{ $product->price }} Coins</p>
                    </div>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-primary btn-sm btn-purchase">Purchase</button>

                    <!-- Delete Button Form -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
