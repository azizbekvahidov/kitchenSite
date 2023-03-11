<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <form action="{{route('dashboard.profile.edit')}}">
                @csrf
                <input class="btn btn-outline-primary" type="submit" value="Профиль">
            </form>
        </li>
    </ul>
    <ul class="navbar-nav dropdown-menu-lg-right">
        <!-- Navbar Search -->
        <li class="nav-item pl-2">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <input class="btn btn-outline-primary" type="submit" value="Выход">
            </form>
        </li>
    </ul>
</nav>
