<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edição Solicitação</h1>
    <form action="{{ route('updateSoliciticao', $solicitacao->id) }}" method="POST">
        {{-- Obrigado a usar  @csrf criado um token para cada requisição --}}
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome usuário Solicitante:</td>
                <td><input type="text" name="nomeUserSolicitante" value="{{ $solicitacao->nomeUserSolicitante }}" />
                </td>
            </tr>
            <tr>
                <td>Id Pet:</td>
                <td><input type="number" name="pet" value="{{ $solicitacao->pet }}" /></td>
            </tr>
            <tr>
                <td>Aceita Solicitação:</td>
                <td><input type="checkbox" name="aceita" {{ $solicitacao->aceita ? 'checked' : '' }} /></td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="Salvar" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/usuarios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
