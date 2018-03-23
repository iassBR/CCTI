<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Seletivo</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ route('home.index') }}">
            Processo Seletivo
          </a>
        </div>
      </div>
    </nav>
  
    <div class="container">
    <div class="row">
      <!-- Nav tabs -->  
        <ul id="tabEtapas" class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#etapa1" aria-controls="etapa1" role="tab" data-toggle="tab">Dados Pessoais</a></li>
          <li role="presentation" ><a href="#etapa2" aria-controls="etapa2" role="tab" data-toggle="tab">Experiências Profissionais</a></li>
          <li role="presentation"><a href="#etapa3" aria-controls="etapa3" role="tab" data-toggle="tab">Formação</a></li>
          
        </ul>


        @yield('corpo')
                

        
       
    </div>
</div>      
<!-- Include all compiled plugins (below), or include individual files as needed -->
   

    <script type="text/javascript" src="{{asset ('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/add.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/add2.js')}}"></script>     
    <script type="text/javascript" src="{{asset ('js/jquery-3.1.1.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/additional-methods.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/localization/messages_pt_BR.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/jquery.mask.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/holder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/localfilereader.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/validate.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/mask.js')}}"></script>

    </body>
</html>

