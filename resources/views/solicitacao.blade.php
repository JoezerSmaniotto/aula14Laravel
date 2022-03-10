<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação</title>
</head>

<body>
    <h1>Solicitação</h1>
    @if ($solicitacao->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome Usuario Solicitante</th>
                    <th>Pet ID</th>
                    <th>Aceita</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $solicitacao->id }}</td>
                    <td>{{ $solicitacao->nomeUserSolicitante }}</td>
                    <td>{{ $solicitacao->pet }}</td>
                    <td>{{ $solicitacao->aceita ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('editSoliciticao', $solicitacao->id) }}">Editar</a>
                        <a href="{{ route('deleteSoliciticao', $solicitacao->id) }}">Deletar</a>

                    </td>

                </tr>
            </tbody>
        </table>
    @else
        <p>Não há solicitações! </p>
    @endif
    <a href="/solciticacoes">Voltar para listagem de todos as solicitações</a>
</body>

</html>
