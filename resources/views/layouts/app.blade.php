<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIGAPAN Clone</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
        }
        .navbar {
            background: #0d6efd;
        }
        .navbar-brand {
            font-weight: 700;
            color: #fff !important;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,.06);
        }
        .card-title {
            font-weight: 600;
            color: #555;
        }
        .card-value {
            font-size: 26px;
            font-weight: 700;
            color: #0d6efd;
        }
        table {
            background: white;
        }
        thead {
            background: #0d6efd;
            color: white;
        }
        th, td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">SIGAPAN CLONE</a>
    </div>
</nav>

<div class="container my-4">
    @yield('content')
</div>

</body>
</html>
