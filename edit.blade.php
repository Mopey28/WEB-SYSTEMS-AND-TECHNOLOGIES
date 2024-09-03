<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- Bootstrap CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/2969785.jpg'); /* MLBB background */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .container-custom {
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.8); /* Dark background with transparency */
            padding: 30px;
            border-radius: 15px;
            max-width: 600px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            color: #ffc107; /* Golden title */
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            color: #ddd; /* Light labels */
        }

        .form-control {
            background-color: #1c1c1c;
            color: #fff;
            border: none;
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #ffc107;
            box-shadow: 0 0 10px #ffc107;
        }

        .btn-custom {
            background-color: #007bff; /* MLBB blue button */
            color: #fff;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .alert {
            background-color: #dc3545; /* Red error messages */
            color: #fff;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center; /* Centering error messages */
        }

        .alert-success {
            background-color: #28a745; /* Success message in green */
        }

        img {
            display: block;
            margin: 10px auto;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .container-custom {
                padding: 20px;
            }

            h2 {
                font-size: 1.5rem;
            }
        }

        /* Custom styling for buttons */
        .btn-home, .btn-custom {
            margin-bottom: 10px; /* Add space between buttons */
        }
    </style>
</head>
<body>

    <div class="container-custom">
        <h2>Edit Product</h2>

        <!-- Error Handling -->
        @if ($errors->any())
            <div class="alert alert-danger text-center">
                <ul style="list-style: none; padding: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Success Message (if applicable) -->
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
            </div>

            <!-- Stock -->
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($product->image)
                    <img src="{{ Storage::url($product->image) }}" alt="Product Image" width="100" class="mt-3">
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-custom">Update Product</button>
            
            <!-- Home Button -->
            <a href="{{ route('home') }}" class="btn btn-warning btn-home text-center">Back to Home</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
