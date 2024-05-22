<header id="header" class="d-flex align-items-center">
    <div class="w-100 d-flex align-items-center justify-content-center">

        <a href={{ route('home') }} class="logo"><img src="assets/img/logo_ukm.png" alt="" class="img-fluid"></a>
        <h1 class="logo me-5"><a href={{ route('home') }}>UKM Tahfidz Qur'an<br>Universitas Airlangga</a></h1>

        <nav id="navbar" class="navbar">
            <div class="mx-5">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="tahfidz.html">Program Tahfidz</a></li>
                    <li><a class="nav-link scrollto" href="publikasi.html">Publikasi</a></li>
                    <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
                </ul>
            </div>
            <div class="ms-5">
                <ul>
                    @if (Auth::check())
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex gap-4 items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div class="text-start">
                                        <p class="text-bold">{{ Auth::user()->name }}</p>
                                        <p class="capitalize">{{ Auth::user()->role->name }}</p>
                                    </div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard.' . Auth::user()->role->name)">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>


                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <li><button data-bs-toggle="modal" data-bs-target="#modalRegister"
                                class="register scrollto">Register</button></li>
                        <li><button class="login" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button>
                        </li>
                    @endif
                </ul>
            </div>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>


<x-modal-register />

<x-modal-login />
