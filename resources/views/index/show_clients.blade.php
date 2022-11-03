<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>
        Clientes
    </h3>
    <table>
        <tr>
            <td>#</td>
            <td>name</td>
            <td>email</td>
            <td>phone_nomber</td>
        </tr>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>
                        {{$client->id}}
                    </td>
                    <td>
                        {{$client->name}}
                    </td>
                    <td>
                        {{$client->email}}
                    </td>
                    <td>
                        {{$client->phone_number}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>