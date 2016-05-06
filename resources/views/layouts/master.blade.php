<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'NE Pinball Locator' --}}
        @yield('title','NE Pinball Locator')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

{{--   <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'> --}}

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
{{--    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'> --}}

    <link href="/css/p4.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <div class="container">
            <div class="well col-md-12 top-banner" >
                <div class="row">
                    <div class="col-md-8 vbottom">
                        <h1>New England Pinball Locator</h1>
                        {{--
                        <a href='/'>
                        <img
                        src='http://making-the-internet.s3.amazonaws.com/laravel-foobooks-logo@2x.png'
                        style='width:300px'
                        alt='Foobooks Logo'>
                        </a>
                        --}}
                    </div><!--
                 --><div class="col-md-4 vbottom">
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
    </header>

    <nav>
        {{--
        <ul>
            <li><a href='/books'>View all books</a></li>
            <li><a href='/book/create'>Add a new book</a></li>
        </ul>
        --}}
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        {{--
        <a href='https://github.com/susanBuck/foobooks' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        <a href='http://foobooks.dwa15-practice.biz/' class='fa fa-link' target='_blank'> View Live</a>
        --}}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
