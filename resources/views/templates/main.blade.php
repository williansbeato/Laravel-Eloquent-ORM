<html>
    <head>
        <title>SISAR @yield('titulo')</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body{ padding:40px;}
            .navbar{margin-bottom:30px;}
            .card{margin:20px;}
            .card-header{color: #000;}
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}"><b>SISAR</b></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li @if($tag=="CUR") class="nav-item active" @else class="nav-item" @endif>
                        <a class="nav-link" href="{{ route('curso.index') }}">
                            <b>Cursos</b>
                        </a>
                    </li>
                    <li @if($tag=="DIS") class="nav-item active" @else class="nav-item" @endif>
                        <a class="nav-link" href="{{ route('disciplina.index')}}">
                            <b>Disciplina</b>
                        </a>
                    </li>
                   
                    <li @if($tag=="PRO") class="nav-item active" @else class="nav-item" @endif>
                        <a class="nav-link" href="{{ route('professor.index')}}">
                            <b>Professores</b>
                        </a>
                    </li>

                    <li @if($tag=="ALU") class="nav-item active" @else class="nav-item" @endif>
                        <a class="nav-link" href="{{ route('aluno.index')}}">
                            <b>Aluno</b>
                        </a>
                    </li>

                    <li @if($tag=="HOME") class="nav-item active" @else class="nav-item" @endif>
                        <a class="nav-link" href="{{ url('/') }}">
                            <b>Home</b>
                        </a>
                    </li>
                   
                  
                </ul>
            </div>

        </nav>

        <div class="card">
            <div class="card-header bg-dark">
                <h3><b style="color: white";>{{ $titulo }}</b></h2>
            </div>
            <div class="card-body">
                @yield("conteudo")
            </div>
        </div>

    </body>
    <footer>
        <b>&copy;2021 - Willians Beato.</b>
    </footer>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>

    @yield('script')


</html>