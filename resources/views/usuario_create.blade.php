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
    <form action="/usuario" method="POST">
        {{-- Obrigado a usar  @csrf criado um token para cada requisição --}}
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>cpf:</td>
                <td><input type="text" name="cpf" /></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" /></td>
            </tr>
            <tr>
                <td>Celular:</td>
                <td><input type="text" name="celular" /></td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/produtos" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
