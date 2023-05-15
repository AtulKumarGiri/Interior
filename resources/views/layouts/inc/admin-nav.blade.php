<nav class="sb-topnav navbar navbar-expand navbar-light bg-light d-flex justify-content-between">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ url('admin/dashboard')}}">Interior</a>
            <!-- Sidebar Toggle-->
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="d-flex justify-content-end"><a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-dark " style="text-decoration:none"><i class="fa fa-user mx-1 text-dark"></i> Logout</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">@csrf</form>
        </nav>