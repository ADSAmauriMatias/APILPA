<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
    <a href="{{ route('user.create')}}">Teste route</a><br>
    <h2>Teste</h2>
    <form action="#" method('POST')>
        @csrf
        @method('POST')
        <label>Teste</label>
        <inut type="text" name""name" placeholder="Nome"></input>
        <label>Teste</label>
        <inut type="text" name""name" placeholder="Nome"></input>
        <label>Teste</label>
        <inut type="text" name""name" placeholder="Nome"></input>
        <label>Teste</label>
        <inut type="text" name""name" placeholder="Nome"></input>
            {{-- parei auqi --}}
    </form>
</body>
</html>
