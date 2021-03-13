<nav class="navbar navbar-expand-md bg-white navbar-white">

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class=""><i class="fas fa-chevron-left"></i></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
        <h3 style="color: #000;">User List</h3>
    </a>

</nav>

<div class="container" style="margin-bottom: 316px;">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-2 ">
                            <div class="lingkaran1"><i class="mdi mdi-36px mdi-account-outline" style="padding-left: 10px;"></i></div>
                        </div>
                        <div class="col-10">
                            <h3 style="margin-bottom: 0;margin-top: 1rem;">Steve Jobs</h3>
                            <p>steve@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-2 ">
                            <div class="lingkaran1"><i class="mdi mdi-36px mdi-account-outline" style="padding-left: 10px;"></i></div>
                        </div>
                        <div class="col-10">
                            <h3 style="margin-bottom: 0;margin-top: 1rem;">Steve Jobs</h3>
                            <p>steve@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container text-center">
    <div class="row">
        <div class="col-4">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= base_url('home'); ?>"><i class="mdi mdi-24px mdi-home-outline"></i></li>
                <li class="nav-item">Home</a></li>
            </ul>
        </div>
        <div class="col-4">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= base_url('home'); ?>"><i class="mdi mdi-24px mdi-cart-plus"></i></li>
                <li class="nav-item">Cart</a></li>
            </ul>
        </div>
        <div class="col-4">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= base_url('home/accounts'); ?>"><i class="mdi mdi-24px mdi-account-outline"></i></li>
                <li class="nav-item">Account</a></li>
            </ul>
        </div>
    </div>
</div>
</body>

</html>