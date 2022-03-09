<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuário</title>
</head>

<body>
    <h1>Usuário</h1>
    @if ($usuario->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>cpf</th>
                    <th>endereco</th>
                    <th>celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="/usuario/{{ $usuario->id }}">{{ $usuario->id }}</a></td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->cpf }}</td>
                    <td>{{ $usuario->endereco }}</td>
                    <td>{{ $usuario->celular }}</td>
                    <td>
                        <a href="{{ route('editUser', $usuario->id) }}">Editar</a>
                        <a href="{{ route('deleteUser', $usuario->id) }}">Deletar</a>

                    </td>

                </tr>
            </tbody>
        </table>
    @else
        <p>Usuário não encontrados! </p>
    @endif
    <a href="/usuarios">voltar para listagem de todos os usuários</a>
</body>

</html>
