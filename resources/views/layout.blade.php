<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Digitală Daniel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --lemn-inchis: #2c1b0e;
            --auriu: #d4af37;
            --hartie-veche: #fdf5e6;
        }
        body { background-color: #f4f1ea; font-family: 'Times New Roman', Times, serif; }
        
        
        .navbar { 
            background-color: var(--lemn-inchis) !important; 
            border-bottom: 4px solid var(--auriu);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .navbar-brand { color: var(--auriu) !important; font-weight: bold; font-size: 1.5rem; }
        .nav-link { color: #fdf5e6 !important; font-size: 1.1rem; }
        .nav-link:hover { color: var(--auriu) !important; }


        .card { 
            background-color: white; 
            border: 1px solid #ddd;
            transition: 0.3s;
            border-bottom: 5px solid var(--lemn-inchis);
        }
        .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.2); }
        
        .btn-biblioteca { 
            background-color: var(--lemn-inchis); 
            color: var(--auriu); 
            border: 1px solid var(--auriu); 
        }
        .btn-biblioteca:hover { background-color: #4a3221; color: white; }

        footer { background: var(--lemn-inchis); color: var(--auriu); padding: 20px 0; border-top: 4px solid var(--auriu); }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">📚 BIBLIOTECA DANIEL</a>
            <div class="ms-auto d-flex">
                <a class="nav-link px-3" href="/">Acasă</a>
                <a class="nav-link px-3" href="/about">Despre</a>
                <a class="nav-link px-3" href="/services">Catalog</a>
                <a class="nav-link px-3" href="/contact">Contact</a>
                <a class="nav-link btn btn-outline-warning ms-3 text-warning" href="/admin">Admin</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    <footer class="text-center">
        <p>&copy; 2026 Biblioteca Digitală - Stirbu Daniel | Laboratorul MVC</p>
    </footer>

</body>
</html>