<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="http://127.0.0.1:8000/clients">
        @csrf
        <label>Name</label>
        <input typw="text" placeholder="name" name="name">
        <br>
        <label>Email</label>
        <input typw="text" placeholder="email@gmail.com" name="email">
        <br>
        <label>Phone_number</label>
        <input typw="text" placeholder="612XXXXXXX" name="phone_number">
        <br>
        <button type="submit">
            Guardar
        </button>
    </form>
</body>
</html>