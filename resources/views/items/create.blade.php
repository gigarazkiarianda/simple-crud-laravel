<!DOCTYPE html>
<html>
<head>
    <title>Create New Item</title>
</head>
<body>
    <h1>Create New Item</h1>
    <form method="POST" action="{{ route('items.store') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
