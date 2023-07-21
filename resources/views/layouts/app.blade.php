
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Aquí puedes agregar el contenido del encabezado, como el menú de navegación -->
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/cervezas">Cervezas</a></li>
                <li><a href="/menu">Menú</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Aquí se mostrará el contenido específico de cada página -->
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes agregar el contenido del pie de página -->
        <p>Derechos de autor &copy; {{ date('Y') }} Cervecería Artesanal</p>
    </footer>
</body>
</html>

