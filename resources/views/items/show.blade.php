<!DOCTYPE html>
<html>
<head>
    <title>Show Item</title>
    <!-- Tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Atur margin untuk tombol Edit dan Delete */
        .edit-delete-btns {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Item Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $item->name }}</p>
                <p><strong>Description:</strong> {{ $item->description }}</p>
                <div class="edit-delete-btns">
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('items.destroy', $item->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tautan ke file JavaScript Bootstrap (opsional, hanya jika Anda menggunakan komponen JS Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
