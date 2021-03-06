<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/css/color.css" />

</head>

<body>
    @include('layout.nav')
    @if($flash = session('message'))
	<div id="flash-message" class="alert alert-success" role="alert">
	{{$flash}}
	</div>
	@endif
    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    @yield('content')
                     @include('layout.sidebar')
                </div>
            </div>
        </div>
    </section>
</body>

</html>