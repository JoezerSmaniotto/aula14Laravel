<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exlcui usuário</title>
</head>

<body>
    @if ($usuario)
        <h1>{{ $usuario->nome }}</h1>
        <p>{{ $usuario->email }}</p>
        <ul>
            <li>CPF: {{ $usuario->cpf }}</li>
            <li>Endereço: {{ $usuario->endereco }}</li>
            <li>celular: {{ $usuario->celular }}</li>
        </ul>
        <form action="{{ route('removeUser', $usuario->id) }}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste usuário?</h4>
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
        <p>Usuario não encontrados! </p>
        <a href="/usuarios">&#9664;Voltar</a>
    @endif
</body>

</html>
