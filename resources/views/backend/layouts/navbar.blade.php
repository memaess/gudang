<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">
                    <div class="row">
                        <div class="col-12 p-4">
                            <img src="{{ auth()->user()->photo != null ? asset('dist').'/users/'.auth()->user()->photo : asset('dist/img/users/no-image.png') }}" class="img-circle elevation-2" alt="User Image"  style="width: 100px;">
                        </div>
                        <div class="col-12">
                            <h5>
                                Hi, {{ auth()->user()->name }} !
                            </h5>
                        </div>
                    </div>
                </span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item text-center">
                    <i class="float-left fa fa-cogs" style="padding-top: 5px;"></i> Ubah Data Diri
                </a>  
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item text-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="float-left fa fa-sign-out-alt" style="padding-top: 5px;"></i> Logout
                </a>  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-divider"></div> 
                <div class="dropdown-item dropdown-footer">

                </div>
            </div>
        </li> 
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
    </ul>
</nav>
