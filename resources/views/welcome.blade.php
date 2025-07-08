<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome - Book Management System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #4e54c8, #8f94fb);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }
    .card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 1rem;
      padding: 2rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card shadow-lg text-white">
      <h1 class="mb-4">📚 Welcome to Book Management System</h1>
      <p class="lead">Manage your books, authors, and reports with ease.</p>

      <div class="mt-4 d-flex justify-content-center gap-3">
        <a href="{{ route('login') }}" class="btn btn-light">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
