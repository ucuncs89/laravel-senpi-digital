<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{ route("index") }}" class="navbar-brand">
            <!--Logo start-->
            <div class="logo">
                <img id="logoPolice" src="../assets/images/icons/logo.png" data-toggle="sidebar" style="width: 138px" />
            </div>
            <!--logo End-->
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body data-scrollbar pt-0">
        <div class="sidebar-list">

            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("index") ? "active" : "" }}" aria-current="page"
                        href="{{ route("index") }}">
                        <i class="bi bi-columns-gap"></i>
                        <span class="item-name">Home</span>
                    </a>
                </li>
                @if (auth()->user()->hasRole("staff-it"))
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("staff-it-akun.index") ? "active" : "" }}" aria-current="page"
                            href="{{ route("staff-it-akun.index") }}">
                            <i class="bi bi-person"></i>
                            <span class="item-name">Akun</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("staff-it-personil.index") ? "active" : "" }}"
                            aria-current="page" href="{{ route("staff-it-personil.index") }}">
                            <i class="bi bi-people"></i>
                            <span class="item-name">Personil</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("staff-it-senjata-api.index") ? "active" : "" }}"
                            aria-current="page" href="{{ route("staff-it-senjata-api.index") }}">
                            <i class="bi bi-crosshair2"></i>
                            <span class="item-name">Senjata Api</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("staff-it-laporan") ? "active" : "" }}" aria-current="page"
                            href="{{ route("staff-it-laporan") }}">
                            <i class="bi bi-file-earmark-bar-graph-fill"></i>
                            <span class="item-name">Laporan</span>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->hasRole("approver"))
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("approver") ? "active" : "" }}" aria-current="page"
                            href="{{ route("approver") }}">
                            <i class="bi bi-file-earmark"></i>
                            <span class="item-name">Persetujuan</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link {{ Route::is("logout") ? "active" : "" }}" aria-current="page"
                        href="{{ route("logout") }}">
                        <i class="bi bi-box-arrow-left"></i>
                        <span class="item-name">Logout</span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
