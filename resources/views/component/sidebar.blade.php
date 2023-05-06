<!-- partial:partials/_sidebar.html -->
<div class="sidebar">
    <div class="user-profile">
        <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="{{ asset('images/profile/male/image_1.png') }}"
                alt="profle image">
        </div>
        <div class="info-wrapper">
            <p class="user-name">Mr Faisal</p>
            <h6 class="display-income">Finance Direktur</h6>
        </div>
    </div>
    <ul class="navigation-menu">
        <li class="nav-category-divider">MAIN</li>
        <li>
            <a href="{{ route('dashboard.index') }}">
                <span class="link-title">Dashboard</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('tanah.index') }}">
                <span class="link-title">Tanah</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
        <li>
            <a href="./pages/bangunan/bangunan.html">
                <span class="link-title">Bangunan</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
        <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">Project</span>
                <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
                <li>
                    <a href="pages/ui-components/buttons.html">Us-Embassy</a>
                </li>
                <li>
                    <a href="pages/ui-components/buttons.html">Lestari</a>
                </li>
                <li>
                    <a href="pages/ui-components/buttons.html">SOS</a>
                </li>
                <li>
                    <a href="pages/ui-components/tables.html">LU SH</a>
                </li>
                <li>
                    <a href="pages/ui-components/typography.html">TFCA</a>
                </li>
                <li>
                    <a href="pages/ui-components/buttons.html">Arcus</a>
                </li>
                <li>
                    <a href="pages/ui-components/buttons.html">Wish Indo</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">Kendaraan</span>
                <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
                <li>
                    <a href="pages/ui-components/buttons.html">Aset Mobil</a>
                </li>
                <li>
                    <a href="pages/ui-components/tables.html">Aset Motor</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="pages/forms/form-elements.html">
                <span class="link-title">Office</span>
                <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
        </li>
        <li>
            <a href="pages/charts/chartjs.html">
                <span class="link-title">Inv Card Master</span>
                <i class="mdi mdi-chart-donut link-icon"></i>
            </a>
        </li>
        <li class="nav-category-divider">DOCS</li>
        <li>
            <a href="../docs/docs.html">
                <span class="link-title">Documentation</span>
                <i class="mdi mdi-asterisk link-icon"></i>
            </a>
        </li>
    </ul>
</div>
