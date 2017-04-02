<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('homepage') }}">Home</a>
            <a class="navbar-brand" href="{{ route('product.index') }}">Products</a>
            <a class="navbar-brand" href="{{ route('aboutpage') }}">About</a>
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin</a>

            <form class="navbar-form navbar-left" action="{{ route('searchresults.index') }}" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="input">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping cart
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true">

                        </i> User Management <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><a href="{{ route('user.profile') }}">User profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        @else
                            <li><a href="{{ route('user.signup') }}">Signup</a></li>
                            <li><a href="{{ route('user.signin') }}">Signin</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>