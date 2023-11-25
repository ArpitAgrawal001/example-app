<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <main>
        
        <h2>Songs</h2>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Song Title</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <!-- songs-list.blade.php -->
            <tbody>
                <!-- Add song rows here -->
                @foreach ($songs as $song)
                <tr>
                    <td>{{ $song->id }}</td>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->artist}}</td>
                    <td>Album 1</td>
                    <td>4:15</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>

