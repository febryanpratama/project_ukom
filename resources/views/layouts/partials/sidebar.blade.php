<div class="deznav">
    <div class="deznav-scroll">
        @role('Admin')
        <ul class="metismenu" id="menu">
            <li><a class=" ai-icon" href="{{ url('dashboard') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ url('admin/portfolio') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-note"></i>
                    <span class="nav-text">Portofolio</span>
                </a>
            </li>
            <li><a href="{{ url('admin/assesment') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Assesment</span>
                </a>
            </li>
            <li><a href="{{ url('admin/list-sertifikasi') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Sertifikasi</span>
                </a>
            </li>
            
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Master Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/bank-assesment') }}">Soal Assesment</a></li>
                    <li><a href="{{ url('admin/dokumen-portfolio') }}">Dokumen Portofolio</a></li>
                    <li><a href="{{ url('admin/periode') }}">Periode</a></li>
                    <li><a href="{{ url('admin/user') }}">Pengguna</a></li>
                    <li><a href="{{ url('admin/sertifikasi') }}">Sertifikasi</a></li>
                </ul>
            </li>
        </ul>
        @endrole
        @role('User')
        <ul class="metismenu" id="menu">
            <li><a class=" ai-icon" href="{{ url('dashboard') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ url('user/profil') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user"></i>
                    <span class="nav-text">Profil</span>
                </a>
            </li>
            <li><a href="{{ url('user/portfolio') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-note"></i>
                    <span class="nav-text">Portofolio</span>
                </a>
            </li>
            <li><a href="{{ url('user/assesment') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Assesment</span>
                </a>
            </li>
            <li><a href="{{ url('user/sertifikasi') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Sertifikasi</span>
                </a>
            </li>
            

        </ul>
        @endrole
        {{-- <div class="add-menu-sidebar">
            <img src="images/calendar.png" alt="" class="mr-3">
            <p class="	font-w500 mb-0">Create Workout Plan Now</p>
        </div>
        <div class="copyright">
            <p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by DexignZone</p>
        </div> --}}
    </div>
</div>