<div class="navcontainer">
    <nav class="navbar navbar-default" role="navigation">

        <div class="col-sm-3 col-md-2 navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#md-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
{{--            <a class="navbar-brand brand" href="/">
                <img class="img-responsive" src="images/logo.png" alt="logo">
            </a>--}}
            <a class="navbar-brand" href="{{ route('home') }}">Mediacollectie</a>
        </div>
        <div class="col-sm-7 col-md-8">
            <form class="navbar-form" role="search" action="{{route('home')}}" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="searchstring" value="{{ $searchstring or '' }}">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
        <div class="col-sm-2 col-md-2 collapse navbar-collapse navbar-right" id="md-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
            </ul>
        </div>
    </nav>
</div>
