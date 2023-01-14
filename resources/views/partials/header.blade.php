<div class="az-header">
    <div class="container">
      <div class="az-header-left">
        <a href="index.html" class="az-logo"><span></span> Arsip</a>
        <a id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
      </div><!-- az-header-left -->
      <div class="az-header-menu">
        <div class="az-header-menu-header">
          <a href="index.html" class="az-logo"><span></span> azia</a>
          <a class="close">&times;</a>
        </div><!-- az-header-menu-header -->
        <ul class="nav">
          <li class="nav-item active show">
            <a href="index.html" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.referensi') }}" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Referensi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link with-sub"><i class="typcn typcn-document"></i> Surat</a>
            <nav class="az-menu-sub">
              <a href="{{ route('admin.surat_masuk') }}" class="nav-link">Surat Masuk</a>
              <a href="{{ route('admin.surat_keluar') }}" class="nav-link">Surat Keluar</a>
            </nav>
          </li>
          <li class="nav-item">
            <a class="nav-link with-sub"><i class="typcn typcn-document"></i> Agenda</a>
            <nav class="az-menu-sub">
              <a href="{{ route('admin.agenda_surat_masuk') }}" class="nav-link">Surat Masuk</a>
              <a href="page-signup.html" class="nav-link">Surat Keluar</a>
            </nav>
          </li>
          <li class="nav-item">
            <a class="nav-link with-sub"><i class="typcn typcn-document"></i> Galeri File</a>
            <nav class="az-menu-sub">
              <a href="{{ route('admin.surat_masuk') }}" class="nav-link">Surat Masuk</a>
              <a href="{{ route('admin.surat_keluar') }}" class="nav-link">Surat Keluar</a>
            </nav>
          </li>
        </ul>
      </div><!-- az-header-menu -->
      <div class="az-header-right">
 
        <div class="dropdown az-profile-menu">
          <a class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
          <div class="dropdown-menu">
            <div class="az-dropdown-header d-sm-none">
              <a class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
            </div>
            <div class="az-header-profile">
              <div class="az-img-user">
                <img src="../img/faces/face1.jpg" alt="">
              </div><!-- az-img-user -->
              <h6>Aziana Pechon</h6>
              <span>Premium Member</span>
            </div><!-- az-header-profile -->

            <a class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
            <a class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
            <a class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
            <a class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
            <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
          </div><!-- dropdown-menu -->
        </div>
      </div><!-- az-header-right -->
    </div><!-- container -->
</div><!-- az-header -->