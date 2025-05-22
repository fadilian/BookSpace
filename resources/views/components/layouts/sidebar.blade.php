<style>
    /* Gaya untuk sidebar */
    .nav-link.active {
        background-color: #007bff; /* Warna biru terang */
        color: white;
        font-weight: bold;
    }
</style>

<nav class="col-md-2 bg-dark sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }} text-white" href="{{ route('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('member') ? 'active' : '' }} text-white" href="{{ route('member') }}">
                    <span data-feather="users"></span>
                    Manage Members
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('books') ? 'active' : '' }} text-white" href="{{ route('books') }}">
                    <span data-feather="book"></span>
                    Manage Books
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('borrowings') ? 'active' : '' }} text-white" href="{{ route('borrowings') }}">
                    <span data-feather="file"></span>
                    Manage Loans
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('returns') ? 'active' : '' }} text-white" href="{{ route('returns') }}">
                    <span data-feather="check-circle"></span>
                    Manage Returns
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('categories') ? 'active' : '' }} text-white" href="{{ route('categories') }}">
                    <span data-feather="tag"></span>
                    Manage Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('user') ? 'active' : '' }} text-white" href="{{ route('user') }}">
                    <span data-feather="user"></span>
                    Manage Staff
                </a>
            </li>
        </ul>
    </div>
</nav>
