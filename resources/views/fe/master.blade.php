<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    @yield('nav')
    <!-- End Header Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Kolaborasi yang Membawa Turnamen Anda ke Level Berikutnya!</h1>
            <p>Satu Platform untuk Semua yang Kamu Butuhkan dalam Dunia Olahraga.</p>
            <a href="#" class="btn">DAFTAR MITRA</a>
        </div>
    </div>

    <!-- DaftarCepat Section -->
    @yield('daftar')
    <!-- End DaftarCepat Section -->

      
    <!-- Statistics Section -->
    @yield('stat')
    <!-- End Statistics Section -->


    <!-- Footer Section -->
    @yield('footer')
    <!-- End Footer Section -->
</body>
</html>
