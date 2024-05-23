<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form method="POST" action="{{ route('items.update', $item->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $item->name }}"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $item->description }}</textarea><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
