<div class="navbar sticky top-0 container w-full mx-auto bg-base-100 z-10 ">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/#about">About</a></li>
                <li tabindex="0">
                    <a class="justify-between">
                        {{ Auth::check() ? Auth::user()->name : '' }}
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2">
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                        <li><a href="/dashboard">Dashboard</a></li>

                    </ul>
                </li>

            </ul>
        </div>
        <x-application-logo />
    </div>
    <div class="navbar-end hidden lg:flex">
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/#about">About</a></li>
                @auth
                    <li class=" ml-4"><a href="{{ url('/dashboard') }}"
                            class="btn-primary text-primary-content">Dashboard</a></li>
                    </li>
                    <li class=" ml-4">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                @else
                    <li class=" ml-4"><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li class=" ml-4"><a href="{{ route('register') }}"
                                class="btn btn-primary text-primary-content">Register</a></li>
                    @endif

                @endauth
            </ul>
        </div>
    </div>
</div>
