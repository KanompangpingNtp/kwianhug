<style>
    #sidebar-menu a {
        text-decoration: none;
    }

</style>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('AdminIndex')}}" class="site_title" style="font-size: 21px; text-decoration: none;"><i class="fa-solid fa-database"></i>
                <span>ระบบจัดการข้อมูล</span></a>
        </div>
        <div class="clearfix"></div>

        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>เมนู</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{route('NoticeBoardHome')}}" style="text-decoration: none;">
                            <i class="fa-solid fa-folder" style="font-size: 16px; margin-right:3px;"></i>
                            ป้ายประกาศ
                        </a>
                    </li>
                    <li>
                        <a href="{{route('AwardsofPrideHome')}}" style="text-decoration: none;">
                            <i class="fa-solid fa-folder" style="font-size: 16px; margin-right:3px;"></i>
                            รางวัลแห่งความภาคภูมิใจ
                        </a>
                    </li>
                    <li>
                        <a href="{{route('ActivityHome')}}" style="text-decoration: none;">
                            <i class="fa-solid fa-folder" style="font-size: 16px; margin-right:3px;"></i>
                            กิจกรรม
                        </a>
                    </li>
                    <li>
                        <a href="{{route('PressReleaseHome')}}" style="text-decoration: none;">
                            <i class="fa-solid fa-folder" style="font-size: 16px; margin-right:3px;"></i>
                            ข่าวประชาสัมพันธ์
                        </a>
                    </li>

                    <!-- Dropdown Menu -->
                    <li>
                        <a style="text-decoration: none;"><i class="fa-solid fa-folder" style="font-size: 16px; margin-right:7px;"></i>จัดการประกาศ<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('ProcurementHome')}}" style="text-decoration: none;">ประกาศจัดซื้อจัดจ้าง</a></li>
                            <li><a href="{{route('ProcurementResultsHome')}}" style="text-decoration: none;">ผลประกาศจัดซื้อจัดจ้าง</a></li>
                            <li><a href="{{route('AveragePriceHome')}}" style="text-decoration: none;">ประกาศราคากลาง</a></li>
                            <li><a href="{{route('ProcurementReportHome')}}" style="text-decoration: none;">รายงานผลจัดซื้อจัดจ้าง</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('TouristAttractionPage')}}" style="text-decoration: none;">
                            <i class="fa-solid fa-folder" style="font-size: 16px; margin-right:3px;"></i>
                            แนะนำสถานที่ท่องเที่ยว
                        </a>
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
            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" title="Logout" style="text-decoration: none;">
                <span class="glyphicon glyphicon-off" aria-hidden="true" style="color: #73879C;"></span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </div>
</div>
