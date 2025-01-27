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
                    $user = \App\Models\User::find(session('loginId')); // Mengambil data pengguna berdasarkan ID yang disimpan di session
                ?>
                <img src="{{ asset('storage/profile_pictures/'.$user->profile_picture) }}" alt="Profile Picture" class="profile-img" width="30" height="30">
                <span class="user-name">{{ $user->name }}</span>
                <!-- Logout Button -->
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            @else
                <!-- Link Login if user is not logged in -->
                <div class="auth-buttons">
                    <a href="/login" class="login">Login</a>
                    <a href="/signup" class="signup">Sign Up</a>
                </div>
            @endif
        </div>
       
    </nav>        
</header>