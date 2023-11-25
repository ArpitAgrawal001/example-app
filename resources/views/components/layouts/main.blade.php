<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>
    <header>
        <div>
            <h1>Playlist Name</h1>
            <p>Basic Info</p>
        </div>
        <div>
            <a href="#">Edit Playlist</a>
            <a href="#">New Playlist</a>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <sidebar>
        <h2>Saved Playlists</h2>
        <ul>
            <li>Playlist 1</li>
            <li>Playlist 2</li>
            <li>Playlist 3</li>

            <!-- Add more playlists as needed -->
        </ul>
    </sidebar>

    

    <footer>
        <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Terms</a></p>
    </footer>
</body>
</html>
