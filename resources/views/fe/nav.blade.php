<header class="header">
    <nav>
        <a href="#" class="logo">SPORTIVO</a>
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Event</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
        <div class="user-info">
            @if(session('loginId'))
                <?php
                    // Ambil data pengguna berdasarkan ID yang ada di session
                    $user = \App\Models\User::find(session('loginId'));
                ?>
                <!-- Tampilkan gambar profil default atau gambar yang diupload -->
                <img src="{{asset('/img/default-profile.jpg')}}" alt="Profile Picture" class="profile-img" width="30" height="30">
                <span class="user-name">{{ $user->name }}</span>
                <!-- Tombol logout dengan <ul> dan <li> -->
                <ul class="logout-menu">
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn-logout">Logout</button>
                        </form>
                    </li>
                </ul>
            @else
                <!-- Tautan Login jika pengguna belum login -->
                <div class="auth-buttons">
                    <a href="/login" class="login">Login</a>
                    <a href="/signup" class="signup">Sign Up</a>
                </div>
            @endif
        </div>
    </nav>        
</header>