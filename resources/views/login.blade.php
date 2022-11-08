<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        @if(Auth::user())
            {{Auth::user()->name}}
        @endif
    </h1>
    <form method="post" action="{{ url('login')}}">
 
        @csrf
        
        <label>Email</label>
        <input typw="text" name="email" value="{{ $client->email }}">
        <br>
        <label>Password</label>
        <input typw="password"  name="phone_number" value="{{ $client->phone_number }}">
        <br>
        <input typw="hidden"  name="id" value="{{ $client->id }}">
        <button type="submit">
            Acceder
        </button>
    </form>
</body>
</html>