<header>
    <div class="tw-w-full tw-bg-[#b98e44] tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">

        <!-- Kiri: Logo atau Judul -->
        
        <!-- Tengah: Menu Navigasi -->
        <div class="tw-hidden lg:tw-flex tw-gap-6">
          <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-mortarboard"></i> Dashboard
          </a>
          <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-journal-bookmark"></i> LMS IWU
          </a>
          <a href="https://pmb.iwu.ac.id/" class="tw-flex tw-text-gray-200 tw-text-base tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-book"></i> PMB IWU
          </a>
        </div>
        
        <!-- Kanan: Pilihan Bahasa -->
        <div class="tw-hidden lg:tw-flex tw-gap-2">
          <button class="tw-bg-[#b98e44] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#c09956] tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
          <button class="tw-bg-[#b98e44] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#c09956] tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
          <button class="tw-bg-[#b98e44] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#c09956] tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
        </div>
    </div>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed border-bottom border-color-transparent-white-light lg:tw-mt-12">
        <div class="container-fluid"> 
            <div class="col-auto">
                <a class="navbar-brand" href="demo-lawyer.html">
                    <img src="{{asset('images/gambar/logoiwu.png')}}" data-at2x="{{asset('images/gambar/logoiwu.png')}}" alt="" class="default-logo">
                    <img src="{{asset('images/gambar/logoiwu.png')}}" data-at2x="{{asset('images/gambar/logoiwu.png')}}" alt="" class="alt-logo">
                    <img src="{{asset('images/gambar/logoiwu.png')}}" data-at2x="{{asset('images/gambar/logoiwu.png')}}" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order left-nav ps-60px lg-ps-20px md-ps-15px">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav"> 
                        <li class="nav-item"><a href="demo-lawyer.html" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="demo-lawyer-about.html" class="nav-link">Tentang Kami</a></li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="demo-lawyer-practice-areas.html" class="nav-link">Akademik</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1"> 
                                <li><a href="demo-lawyer-practice-areas-details.html"><img src="images/demo-lawyer-practice-areas-icon-01.svg" alt="">Human rights law</a></li>
                                <li><a href="demo-lawyer-practice-areas-details.html"><img src="images/demo-lawyer-practice-areas-icon-06.svg" alt="">Criminal law</a></li>
                                <li><a href="demo-lawyer-practice-areas-details.html"><img src="images/demo-lawyer-practice-areas-icon-04.svg" alt="">Employment law</a></li>
                                <li><a href="demo-lawyer-practice-areas-details.html"><img src="images/demo-lawyer-practice-areas-icon-07.svg" alt="">Constitutional law</a></li>
                                <li><a href="demo-lawyer-practice-areas-details.html"><img src="images/demo-lawyer-practice-areas-icon-05.svg" alt="">Securities law</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="demo-lawyer-attorneys.html" class="nav-link">Publikasi</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        </li>
                        <li class="nav-item"><a href="demo-lawyer-journal.html" class="nav-link">Daftar Sekarang!</a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-auto ms-auto d-none d-lg-flex">  
                <div class="header-icon">
                    <div class="d-none d-xxl-flex me-25px xl-me-20px lg-me-0">
                        <div class="d-flex align-items-center widget-text"><span class="w-40px h-40px bg-base-color d-flex align-items-center justify-content-center me-10px rounded-circle fs-15"><i class="bi bi-telephone-outbound"></i></span><a href="tel:1234567890" class="widget-text text-white-hover">123 456 7890</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->