<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'NE Pinball Locator' --}}
        @yield('title','NE Pinball Locator')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href="/css/p4.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>
<body>

    <header>
        <div class="container">
            <div class="well col-md-12 top-banner" >
                <div class="row">
                    <div class="col-md-1">
                        <a href='/'>
                        <img
                        class="home-image"
                        src='/images/bumper-cap-trans.png'
                        alt='Bumper Cap'>
                        </a>
                    </div><!--
                 --><div class="col-md-7">
                        <h1>New England Pinball Locator</h1>
                    </div><!--
                 --><div class="col-md-4">
                        <div class="login-info-div">
                            @if(Auth::check())
                                <span class="login-info">Welcome back, {{Auth::user()->name}}!</span>
                                <a href='/logout' class="btn">Logout</a>
                            @else
                                <a href='/register'>Register</a> <span class="login-info">to get full access to the site.</span><br/>
                                <span class="login-info">Already registered? </span><a href='/login'>Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav>
        {{-- Navigation Bar --}}
        <div class="container">
            <div class="well well-sm nav-style">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active home"><a href='/'>Home</a></li>
                    @yield('navigation')
                </ul>
                @if(Session::get('message') != null)
                    <div class='flash-message'>{{ Session::get('message') }}</div>
                @endif
            </div>
        </div>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }} &nbsp;&nbsp;
        </div>
    </footer>

    {{-- Bootstrap and jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Page specific JS files --}}
    @yield('body')

</body>
</html>
