<div class="container">
    <form action="">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" id="usr" name="username">
            <div class="input-group-prepend">
                <span class="input-group-text" type="button"><i class="mdi mdi-close-circle"></i></span>
                <span class="input-group-text" type="button"><i class="fa fa-search"></i></span>
            </div>
        </div>
    </form>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/gambar/image.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/gambar/image.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/gambar/image.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container" style="margin-bottom: 316px;">
    <div class="row mb-4">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <center><img src="<?= base_url(); ?>assets/gambar/card_giftcard_24pxsad.svg" alt="">
                        <p class="card-text" style="color: #2492F4;">Material</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <center><img src="<?= base_url(); ?>assets/gambar/build_24px_outlined.svg" alt="">
                        <p class="card-text" style="color: #2492F4;">Tools</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <center><img src="<?= base_url(); ?>assets/gambar/perm_data_setting_24px_outlined.svg" alt="">
                        <p class="card-text" style="color: #2492F4;">Fitting</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <center><i class="mdi mdi-24px mdi-view-carousel-outline" style="color: #2492F4;"></i>
                        <p class="card-text" style="color: #2492F4;">Ceramics</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <center><img src="<?= base_url(); ?>assets/gambar/layers_24px_outlined.svg" alt="">
                        <p class="card-text" style="color: #2492F4;">Acrylic</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <center><img src="<?= base_url(); ?>assets/gambar/category_24px_outlined.svg" alt="">
                        <p class="card-text" style="color: #2492F4;">Other</p>
                    </center>
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