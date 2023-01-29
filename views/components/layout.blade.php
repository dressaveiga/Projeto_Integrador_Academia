<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/components/layout.css')}}">

    <a class="tit-listagem-aluno" href="{{route('alunos.index')}}">Listagem de alunos</a> 

    
    @if($role != 'aluno')
        <a href="{{route('professor.index')}}">Listagem de professores</a>
        <a href="{{route('equipamento.index')}}">Listagem de equipamentos</a>
        <a href="{{route('tipo_exercicio.index')}}">Cadastrar tipo de Exercicio</a>
    @endif

    <form action="{{route('logout')}}" method= "GET">
        <button class="button-sair"> Sair </button>
    </form>

</head>
<body>
    {{$slot}}  
    
</body>
</html>