<html>
    <body>
        <ul>
            @foreach ($data as $todo)
            <li>{{$todo->id}}. {{ $todo->data }}</li>
            @endforeach
        </ul>
        <form method="POST">
            @csrf
            <input type="text" name="data" placeholder="текст"/>
            <button type="submit">Add</button>
        </form>
        <form method="POST">
            @csrf
            <input type="hidden" name="del" value="true">
            <input type="text" name="id" placeholder="ID элемента"/>
            <button type="submit">Delete</button>
        </form>
        <form method="POST">
            @csrf
            <input type="hidden" name="edit" value="true">
            <input type="text" name="id" placeholder="ID элемента">
            <input type="text" name="data" placeholder="текст">
            <button type="submit">Edit</button>
        </form>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>