<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="{{ url('clients/')}}">
        @method('PUT')
        @csrf
        <label>Name</label>
        <input typw="text" name="name" value="{{ $client->name }}">
        <br>
        <label>Email</label>
        <input typw="text" name="email" value="{{ $client->email }}">
        <br>
        <label>Phone_number</label>
        <input typw="text"  name="phone_number" value="{{ $client->phone_number }}">
        <br>
        <input typw="hidden"  name="id" value="{{ $client->id }}">
        <button type="submit">
            Actualizar
        </button>
    </form>
</body>
</html>