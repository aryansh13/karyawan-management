<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard Karyawan')</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Di bagian bawah body, tambahkan: -->
    @yield('scripts')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #495057;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            height: 100vh;
            width: 250px;
            padding: 2rem 1rem;
            background: linear-gradient(180deg, #007bff 0%, #00c4cc 100%);
            color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }

        .sidebar .nav-link {
            border-radius: 0.5rem;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar .nav-link.active {
            color: #007bff;
            background-color: #e9ecef;
            font-weight: bold;
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }

        .sidebar h4 {
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .sidebar .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 auto 1rem auto;
            /* Center horizontally and add margin below */
            border: 3px solid #fff;
            display: block;
            /* Ensure it is a block element for centering */
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .btn-custom {
            background-color: transparent;
            border: 2px solid #0056b3;
            color: #000000;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: static;
                height: auto;
                padding: 1rem;
                box-shadow: none;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="main-content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
