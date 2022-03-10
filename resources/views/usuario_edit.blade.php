<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new User</h1>
    <form action="{{ route('updateUser', $usuario->id) }}" method="POST">
        {{-- Obrigado a usar  @csrf criado um token para cada requisição --}}
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{ $usuario->nome }}" /></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" value="{{ $usuario->email }}" /></td>
            </tr>
            <tr>
                <td>cpf:</td>
                <td><input type="text" name="cpf" value="{{ $usuario->cpf }}" /></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" value="{{ $usuario->endereco }}" /></td>
            </tr>
            <tr>
                <td>Celular:</td>
                <td><input type="text" name="celular" value="{{ $usuario->celular }}" /></td>
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
