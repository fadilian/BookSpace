<div>
    <style>
        img {
            height: 60px;
        }
    </style>

    <button class="btn btn-primary d-md-none menu-toggle">☰</button>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="d-flex align-items-center">
            <img src="{{ asset('assets/bookspace-icon.png') }}" alt="Library Logo">
            <livewire:navigation-component />

        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group">
                <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-secondary"
                onclick="return confirmLogout(event)">Logout</a>
            </div>
        </div>
    </div>
    
</div>
