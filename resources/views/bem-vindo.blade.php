teste

@auth
<h1>usuario LOGADO</h1>
<p>{{Auth::user()->nome}}</p>
<p>{{Auth::user()->email}}</p>
<p>{{Auth::user()->id}}</p>
@endauth

@guest
<h1>bem vindo visitante</h1>
@endguest