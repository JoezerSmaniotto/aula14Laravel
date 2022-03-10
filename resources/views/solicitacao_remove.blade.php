<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão Solicitação</title>
</head>

<body>
    @if ($solicitacao)
        <h1>{{ $solicitacao->nomeUserSolicitante }}</h1>
        <p>{{ $solicitacao->pet }}</p>
        <ul>
            <li>Nome: {{ $solicitacao->nomeUserSolicitante }}</li>
            <li>IdPet: {{ $solicitacao->pet }}</li>
            <li>Aceita Adoção: {{ $solicitacao->aceita ? 'Sim' : 'Não' }}</li>
        </ul>
        <form action="{{ route('removeSoliciticao', $solicitacao->id) }}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar" />
                        <input type="submit" name='confirmar' value="Cancelar" />
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Sem Solicitações!</p>
        <a href="/solicitacoes">&#9664;Voltar</a>
    @endif
</body>

</html>
