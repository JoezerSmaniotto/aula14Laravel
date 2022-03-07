<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pet</title>
</head>

<body>
    <h1>Pet</h1>
    @if ($pet->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Raça</th>
                    <th>Informações Adicionais</th>
                    <th>idade</th>
                    <th>Adotado</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><a href="/pet/{{ $pet->id }}">{{ $pet->id }}</a></td>
                    <td>{{ $pet->nomePet }}</td>
                    <td>{{ $pet->sexo }}</td>
                    <td>{{ $pet->raca }}</td>
                    <td>{{ $pet->inforAdic }}</td>
                    <td>{{ $pet->idade }}</td>
                    <td>{{ $pet->adotado ? 'Sim' : 'Não' }}</td>


                </tr>

            </tbody>
        </table>
    @else
        <p>Pets não encontrados! </p>
        @endif <a href="/pets">voltar para listagem de todos os pets</a>

</body>

</html>
