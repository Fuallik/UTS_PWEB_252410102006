@props(['username' => null])
<header>
    <nav>
        <div class="navbar">
            <div class="profil">
                <a href="{{ $username ? route('dashboard', ['username' => $username]) : route('login') }}">
                    <h1>Mohamad Fauzi Febrianto</h1>
                    <p>Mahasiswa Teknologi Informasi</p>
                </a>
            </div>

            @if ($username)
    <div class="hamburger" id="hamburger-menu">
        <img src="{{ asset('asset/menu.png') }}" id="icon-hamburger" alt="Menu" width="30">
    </div>
@endif

            <ul id="nav-list">
                @if ($username)
                    <li><a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a></li>
                    <li><a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a></li>
                    <li><a href="{{ route('profile', ['username' => $username]) }}">Profile</a></li>
                    <li><a href="{{ route('login') }}">Logout</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>
