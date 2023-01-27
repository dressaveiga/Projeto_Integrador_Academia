<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login/login.css')}}">
</head>



<body>

<header>

<div class ="header-img">
<h1>o augusto é gay</h1>
<img src="imagens\muscle.png" alt="muscle" width="10%" height="10%">
</div>

</header>    

<div class="right-login">
<div class = "caixa-login">

<h1>Acesse o PTI Fit</h1>

<form action="{{route('login.perform')}}" method="POST">
    @csrf
    <label for="email"> Email </label>
    <br>
    <input type="email" name="email" id="email" >
    <br>
    <br>
    <label for="password">  Senha</label>
    <br>
    <input type="password" name="password" id="password" >
<br><br>
    <button type="submit"> ENTRAR </button>
</form>

<p>
Não tem cadastro?
<br>
Venha nos visitar!
</p>
</div>
</div>

<div class = "left-login">
    <h1> que odio</h1>
<img src="gym.svg" alt="gif">
</div>

</body>

<footer>

</footer>