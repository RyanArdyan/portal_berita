<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            {{-- cetak rute berikut  --}}
            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            {{-- cetak rute berikut  --}}
            <a class="nav-link" href="{{ route('admin.category.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item">
            {{-- cetak rute berikut  --}}
            <a class="nav-link" href="{{ route('admin.article.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Articles</span>
            </a>
        </li>
    </ul>
</nav>
