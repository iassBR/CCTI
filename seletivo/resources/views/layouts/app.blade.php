<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SELETIVOS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="css/style.css">
	
	<style>
.navbar{
    margin: 0;
    border-radius: 0;
}

.navbar-toggle{
    display: inline-block;
    margin-left: 10px;
}

.main {
    display: flex;
    background-color: #ecf0f5;
    min-height: calc(100vh - 52px);
    overflow: hidden;
}

.content {
    width: 100%;
    padding-top: 20px;
}

.menu {
    width: 0px;
    border-top: 1px solid #333;
    background-color: #222;
    flex-shrink: 0;
    overflow: hidden;
    transition: width .5s;
}

.menu.menu-open {
    width: 300px;
}

.menu ul{
    list-style: none;
    padding: 10px 0px;
}

.menu ul li.active{
    background-color:#080808;
}

.menu ul li a{
    display: block;
    color:#9d9d9d;
    padding: 10px 15px;
    white-space: nowrap;
}

.menu ul li:hover a, .menu ul li.active a{
    color: white
}
</style>
</head>



<body>
<div id="app">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle pull-left">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CCTI Seletivos</a>
			</div>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Entrar</a></li>
                        <li><a href="{{ route('register') }}">Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
			</div>
		</div>
	</nav>
	@yield('content')		
							
</div>
    <!-- Scripts -->
   
	<script src="{{ asset('js/bootstrap.js') }}"></script>


	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>

</html>