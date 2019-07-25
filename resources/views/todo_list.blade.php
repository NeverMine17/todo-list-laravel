<html>
    <body>
        <ul>
            @foreach ($data as $todo)
            <li>{{ $todo->data }}</li>
            @endforeach
        </ul>
        <form method="POST">
            @csrf
            <input type="text" name="data"/>
            <button type="submit">Add</button>
        </form>
    </body>
</html>