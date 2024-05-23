<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
    <!-- Tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Items List</h1>
        <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add New Item</a>
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">
                    {{ $item->name }}
                    <span class="float-right">
                        <a href="{{ route('items.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- Tautan ke file JavaScript Bootstrap (opsional, hanya jika Anda menggunakan komponen JS Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
