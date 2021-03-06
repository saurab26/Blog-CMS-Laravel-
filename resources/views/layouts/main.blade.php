<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBlog | My Awesome Blog</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css"> 

    @yield('meta_content')
</head>
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=598416459bfbf80011bda358&product=inline-share-buttons"></script>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('blog')}}">MyBlog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="{{Route::currentRouteName()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>
                <li class="{{Route::currentRouteName()=='about' ? 'active' : ''}}"><a href="{{route('about')}}">About Me</a></li>
                <li class="{{Route::currentRouteName()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>

        @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2019 Saurab Karmacharya</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="https://facebook.com" class="i fa fa-facebook"></a></li>
                            <li><a href="http://twitter.com" class="i fa fa-twitter"></a></li>
                            <li><a href="http://googleplus.com" class="i fa fa-google-plus"></a></li>
                            <li><a href="https://github.com" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>