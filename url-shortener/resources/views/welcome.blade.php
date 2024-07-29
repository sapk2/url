<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
        </ul>
    </nav>
    <div class="container mt-5">
        <h1>URL Shortener</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/shorten" method="POST">
            @csrf
            <div class="mb-3">
                <label for="original_url" class="form-label">Original URL</label>
                <input type="url" class="form-control" id="original_url" name="original_url" required>
            </div>
            <button type="submit" class="btn btn-primary">Shorten</button>
        </form>
    </div>
</body>
</html>
