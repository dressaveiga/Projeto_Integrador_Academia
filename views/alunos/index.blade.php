<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">


<x-layout title="Listagem de Alunos" :role="$user->role">
<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/index.css')}}">
</head>



<body>
    @include('./components/headeraluno') 
    <div class="lista-alunos">
    @foreach ($alunos as $aluno)
    <div class="alunos">
        <h2>{{$aluno->name}} </h2>
        <p>Idade: {{$aluno->age}}</p>  
        <p>CPF: {{$aluno->CPF}}</p>
        <p>RG: {{$aluno->RG}}</p>
        <p>Telefone: {{$aluno->phone}}</p>
        <p>Cidade: {{$aluno->endereco->city}}</p>
        <p>Bairro: {{$aluno->endereco->neighborhood}}</p>
        <p>Rua: {{$aluno->endereco->street}}</p>
        <p>Número: {{$aluno->endereco->number}}</p>
        <p>CEP: {{$aluno->endereco->CEP}}</p>
        <form action="{{route('alunos.edit', $aluno->id)}}" method="GET">
            @csrf
            <button class="button-editar" type="submit"> Editar </button>
        </form>
    
        <form action="{{route('alunos.destroy', $aluno->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button-excluir" type="submit"> Excluir </button>
        </form>             
    </div>
    @endforeach
</div>

    <br>
    <form action="{{route('alunos.create')}}" method= "GET">
     <button class="button-adicionar"> adicionar </button>
    </form>

</body>
</x-layout>




