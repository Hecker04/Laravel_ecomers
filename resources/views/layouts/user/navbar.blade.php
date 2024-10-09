<header class="header_area sticky-header">
    <div class="main_menu">
        <div class="container">
            <!-- Navbar Starts -->
            <nav class="navbar navbar-expand-lg">
                <!-- Logo -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="{{ asset('assets/templates/user/img/logo.png')}}" alt="Logo">
                </a>
                <!-- Toggler button for mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <!-- Add more nav items here -->
                    </ul>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<style>
.header_area {
    background: #fff;
    /* Background warna navbar */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    /* Bayangan untuk efek kedalaman */
}

.navbar-nav .nav-link {
    padding: 15px 20px;
    /* Ruang dalam item nav */
    color: #333;
    /* Warna teks */
    transition: color 0.3s;
    /* Efek transisi */
}

.navbar-nav .nav-link:hover {
    color: #007bff;
    /* Warna saat hover */
}

.navbar-brand img {
    max-height: 50px;
    /* Tinggi maksimal logo */
}
</style>