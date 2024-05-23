<!DOCTYPE html>
<html>
<head>
    <title>Show Item</title>
</head>
<body>
    <h1>Item Details</h1>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <p><a href="{{ route('items.edit', $item->id) }}">Edit</a></p>
    <form method="POST" action="{{ route('items.destroy', $item->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
