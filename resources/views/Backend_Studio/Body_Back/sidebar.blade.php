
<!-- [ Navigation ] -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

        <div class="">
            <div class="main-menu-header">
                <img class="img-radius" src="{{asset('Backend')}}/dist/assets/images/digitama.png" alt="User-Profile-Image">
                <div class="user-details">   
                </div>
            </div>      
        </div>

        <ul class="nav pcoded-inner-navbar ">
            <li class="nav-item pcoded-menu-caption">
                <label>Collection</label>
            </li>
            <li class="nav-item">
                <a href="{{ route('overall.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Main Page</span></a>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="{{ route('digimon.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Digimon</span></a>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="{{ route('digimon02.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Digimon 02</span></a>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="{{ route('digimontamers.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Digimon Tamers</span></a>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="{{ route('digimonfrontier.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Digimon Frontier</span></a>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="{{ route('digimonsavers.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Digimon Savers</span></a>
            </li>
            <li class="nav-item pcoded-hasmenu">
                <a href="{{ route('digimonxroswars.page') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Digimon Xros Wars</span></a>
            </li>
        </ul>

        </div>
    </div>
</nav>
<!-- [ Navigation ] -->
