<nav class="navbar navbar-expand-md bg-white navbar-white">

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class=""></span><i class="fas fa-bars"></i></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
        <img src="<?= base_url(); ?>assets/gambar/Logo Apps.png" alt="logo">
    </a>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/list'); ?>">User List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Log Out</a>
            </li>
        </ul>
        <hr>
        <p style="font-family: Roboto; font-size: 12pt; font-weight: 500;color: #696767; margin-bottom: 0;"><?= $user['fullname']; ?>V 1.0.0</p>
    </div>

</nav>