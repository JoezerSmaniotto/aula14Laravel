<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exlcui usuário</title>
</head>

<body>
    @if ($pet)
        <h1>{{ $pet->nomePet }}</h1>
        <ul>
            <li>Sexo: {{ $pet->sexo }}</li>
            <li>Raça: {{ $pet->raca }}</li>
            <li>Informaões Adicionais: {{ $pet->inforAdic }}</li>
        </ul>
        <form action="{{ route('removePet', $pet->id) }}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste Pet?</h4>
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
        <p>Pet não encontrados! </p>
        <a href="/pets">&#9664;Voltar</a>
    @endif
</body>

</html>
