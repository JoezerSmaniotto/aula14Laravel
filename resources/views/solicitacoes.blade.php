<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações Adoção</title>
</head>

<body>
    <h1>Solicitações Adoção</h1>
    <a href="{{ route('createSolicitacao') }}">Criar</a>
    @if ($solicitacoes->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome Usuario Solicitante</th>
                    <th>Pet ID</th>
                    <th>Aceita</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitacoes as $solicitacao)
                    <tr>
                        <td><a href="/solicitacao/{{ $solicitacao->id }}">{{ $solicitacao->id }}</a></td>
                        <td>{{ $solicitacao->nomeUserSolicitante }}</td>
                        <td>{{ $solicitacao->pet }}</td>
                        <td>{{ $solicitacao->aceita }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Sem Solicitações !</p>
    @endif
</body>

</html>
