<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* MLBB Background and Font */
        body {
            background-image: url('https://wallpaperaccess.com/full/2969785.jpg'); /* Mobile Legends background */
            background-size: cover;
            background-position: center;
            color: #f8f9fa; /* Light text color */
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Center the container */
        .container-custom {
            max-width: 600px;
            margin: 100px auto; /* Center horizontally and vertically with margin */
            padding: 20px;
            background: rgba(0, 0, 0, 0.85); /* Dark background for contrast */
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            color: #fff;
        }

        /* Title */
        h2 {
            text-align: center;
            color: #00d8ff; /* Mobile Legends blue accent */
            font-size: 2rem;
            margin-bottom: 30px;
        }

        /* Success and Error Alert Styling */
        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            text-align: center; /* Ensure the alert text is centered */
        }

        .alert-success {
            background-color: #28a745; /* Green for success */
            color: white;
        }

        .alert-danger {
            background-color: #dc3545; /* Red for error */
            color: white;
        }
        
        /* Custom Button Styling */
        .btn-custom, .btn-home {
            background-color: #00d8ff; /* Mobile Legends blue color */
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            width: 100%; /* Full width buttons */
            text-align: center;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .btn-home {
            margin-top: 20px;
        }

        .btn-custom:hover, .btn-home:hover {
            background-color: #008cbf; /* Darker blue on hover */
        }

        /* Form Label Styling */
        .form-label {
            color: #00d8ff; /* MLBB blue for form labels */
            font-weight: bold;
        }

        /* Input Styling */
        input, textarea {
            background-color: #333; /* Dark input fields */
            color: #fff; /* Light text color */
            border: 1px solid #00d8ff; /* Blue border */
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input:focus, textarea:focus {
            border-color: #008cbf; /* Darker blue on focus */
            outline: none;
            box-shadow: 0 0 10px rgba(0, 216, 255, 0.7); /* Blue glow on focus */
        }

        /* Mobile Responsive Adjustments */
        @media (max-width: 768px) {
            .container-custom {
                margin: 50px auto;
                padding: 15px;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="container-custom">
        <h2>Add New Product</h2>

        <!-- Error Handling -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="list-style: none; padding: 0; text-align: center;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form for adding product -->
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" value="{{ old('product_name') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-custom">Add Product</button>
        <!-- Button to navigate to home.blade.php -->
        <a href="{{ route('home') }}" class="btn btn-warning btn-home text-center">Back to Home</a>
        </form>
    </div>

</body>
</html>
