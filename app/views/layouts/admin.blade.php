<html>
<head>
    <meta name="viewport" content="width=device-width" />

    <title>UpstatePHP Admin</title>
    {{ Orchestra\Asset::container('admin-styles')->styles() }}
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">UpstatePHP</a>
            </div>
            <div class="navbar-collapse collapse">
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li><a href="#">Dashboard</a></li>--}}
                    {{--<li><a href="#">Settings</a></li>--}}
                    {{--<li><a href="#">Profile</a></li>--}}
                    {{--<li><a href="#">Help</a></li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                @include('partials.admin.sidebar')
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Dashboard</h1>
                @yield('body')
            </div>
        </div>
    </div>

</body>
</html>