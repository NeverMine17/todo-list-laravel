<html>
    <body>
        <ul>
            @foreach ($data as $todo)
            <li>{{$todo->id}}. {{ $todo->data }}</li>
            @endforeach
        </ul>
        <form method="POST">
            @csrf
            <input type="text" name="data"/>
            <button type="submit">Add</button>
        </form>
        <form method="POST">
            @csrf
            <input type="hidden" name="del" value="true">
            <input type="text" name="id"/>
            <button type="submit">Delete</button>
        </form>
    </body>
</html>