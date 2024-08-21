<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('categories.index') }}">Categories</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        <h1>Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
        <ul class="list-group">
            @foreach ($products as $product)
                <li class="list-group-item">
                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> 
                </li>
            @endforeach
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
