<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pets</title>
</head>

<body>
    <h1>Pets</h1>
    <a href="{{ route('createPet') }}">Criar</a>
    @if ($pets->count() > 0)
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
                @foreach ($pets as $pet)
                    <tr>
                        <td><a href="/pet/{{ $pet->id }}">{{ $pet->id }}</a></td>
                        <td>{{ $pet->nomePet }}</td>
                        <td>{{ $pet->sexo }}</td>
                        <td>{{ $pet->raca }}</td>
                        <td>{{ $pet->inforAdic }}</td>
                        <td>{{ $pet->idade }}</td>
                        <td>{{ $pet->adotado ? 'Sim' : 'Não' }}</td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Pets não encontrados! </p>
    @endif
</body>

</html>
