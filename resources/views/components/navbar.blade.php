<div class="topnav shadow-sm">
    <div class="container-fluid active">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse active" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="uil-dashboard me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('transactions') }}" class="nav-link">
                            <i class="uil-bitcoin me-1"></i>Transactions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users') }}" class="nav-link">
                            <i class="uil-users-alt me-1"></i>Users
                        </a>
                    </li>
                </ul>
            </div>

            <div class="app-search dropdown">
                <form>
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..." id="top-search">
                        <span class="mdi mdi-magnify search-icon"></span>
                        <button class="input-group-text btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
