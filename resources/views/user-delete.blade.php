<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
<h1>Delete User, Order, Cart</h1>

@if (session('message'))
    <p style="color: green;">{{ session('message') }}</p>
@endif

<form action="{{ route('users.delete.user') }}" method="POST">
    @csrf
    <label for="user_id">Select User to Delete:</label>
    <select name="user_id" id="user_id" required>
        <option value="">--Select User--</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <button type="submit">Delete User</button>
</form>
</body>
</html>
