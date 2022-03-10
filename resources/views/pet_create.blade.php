<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new Pet</h1>
    <form action="/pet" method="POST">
        {{-- Obrigado a usar  @csrf criado um token para cada requisição --}}
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>NomePet:</td>
                <td><input type="text" name="nomePet" /></td>
            </tr>
            <tr>
                <td>Sexo: F ou M</td>
                <td><input type="text" name="sexo" /></td>
            </tr>
            <tr>
                <td>Raça</td>
                <td><input type="text" name="raca" /></td>
            </tr>
            <tr>
                <td>idade:</td>
                <td><input type="number" name="idade" /></td>
            </tr>
            <tr>
                <td>Informações Adicionais:</td>
                <td><textarea name="inforAdic" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Adotado:</td>
                <td><input type="checkbox" name="adotado" /></td>
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
