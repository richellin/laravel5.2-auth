<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a class="navbar-brand" href="{{ route('about') }}">about</a></li>
                <li><a class="navbar-brand" href="/">todolog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="">Hi, {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('logout') }}">로그아웃</a></li>
                @else
                    <li><a href="{{ route('register') }}">가입하기</a></li>
                    <li><a href="{{ route('login') }}">로그인</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>