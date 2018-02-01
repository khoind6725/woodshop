<div class="main-menu">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="menu row m0">       
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="nav navbar-nav">
                    @foreach ( Config::get('customs.links') as $key => $value )
                        @if (count($value) > 1)
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $key }}</a>
                                <ul class="dropdown-menu">
                                @foreach ($value as $routeName => $itemName)
                                    <li><a href="{{ route($routeName) }}">{{ $itemName }}</a></li> 
                                @endforeach
                                </ul>
                            </li>
                        @else 
                            <li><a href="{{ route($key) }}">{{ $value }}</a></li> 
                        @endif                    
                    @endforeach
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>