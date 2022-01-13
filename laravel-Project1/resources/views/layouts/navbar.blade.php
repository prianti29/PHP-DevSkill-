<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url ("/home") }}">laravel demo</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url ("/home") }}">Home</a></li>
                <li class="active"><a href="#">About US</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url ("/signup") }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{ url ("/login") }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
