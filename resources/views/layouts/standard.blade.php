<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
<div class="container">

    @include('partials.navigation')

    <div class="container">
        <div class="row">
            <section id="sidebar" class="col-sm-3 col-md-2">
                @yield('sidebar')
            </section>
            <section id="content" class="col-sm-9 col-md-10">
                @yield('content')
            </section>
        </div>
        @include('partials.footer')
    </div>
</div>
</body>

</body>
</html>
