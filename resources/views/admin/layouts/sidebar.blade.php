<style>
    #sidebar-menu a {
        text-decoration: none;
    }

</style>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title" style="font-size: 21px; text-decoration: none;"><i class="fa-solid fa-database"></i>
                <span>Control Center </span></a>
        </div>
        <div class="clearfix"></div>

        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ route('dashboard') }}" style="text-decoration: none;"><i class="fa fa-home"></i> Dashboard </a></li>

                    <!-- Dropdown Menu -->
                    <li>
                        <a style="text-decoration: none;"><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('form') }}" style="text-decoration: none;">Form 1</a></li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a style="text-decoration: none;"><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/table1') }}" style="text-decoration: none;">Table 1</a></li>
                            <li><a href="{{ url('/table2') }}" style="text-decoration: none;">Table 2</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            {{-- <a data-toggle="tooltip" data-placement="top" title="Settings" href="#" style="text-decoration: none;">
                <span class="glyphicon glyphicon-cog" aria-hidden="true" style="color: #73879C;"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#" style="text-decoration: none;">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true" style="color: #73879C;"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock" href="#" style="text-decoration: none;">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true" style="color: #73879C;"></span>
            </a> --}}
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="#" style="text-decoration: none;">
                <span class="glyphicon glyphicon-off" aria-hidden="true" style="color: #73879C;"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->

    </div>
</div>
