<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
</head>
<body>
    <h1>Items List</h1>
    <a href="{{ route('items.create') }}">Add New Item</a>
    <ul>
        @foreach($items as $item)
            <li>{{ $item->name }} - <a href="{{ route('items.show', $item->id) }}">View</a> | <a href="{{ route('items.edit', $item->id) }}">Edit</a></li>
        @endforeach
    </ul>
</body>
</html>
