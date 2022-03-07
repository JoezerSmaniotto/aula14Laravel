<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>
    <h1>Usuários</h1>
    @if ($usuarios->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>cpf</th>
                    <th>endereco</th>
                    <th>celular</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td><a href="/usuario/{{ $usuario->id }}">{{ $usuario->id }}</a></td>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->cpf }}</td>
                        <td>{{ $usuario->endereco }}</td>
                        <td>{{ $usuario->celular }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Usuários não encontrados! </p>
    @endif
</body>

</html>
