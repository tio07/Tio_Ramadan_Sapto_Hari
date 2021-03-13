<nav class="navbar navbar-expand-md bg-white navbar-white">

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class=""><i class="fas fa-chevron-left"></i></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
        <h3 style="color: #000;">Form Register</h3>
    </a>

</nav>

<div class="container" style="margin-top: 5%;">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form class="users" method="POST" action="<?= base_url('auth/registration'); ?>">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="fullname1" id="fullname1" value="<?= set_value('fullname1'); ?>">
                    <?= form_error('fullname1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="fullname2" value="<?= set_value('fullname2'); ?>">
                    <?= form_error('fullname2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" id="inlineFormInputGroup" name="password1">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="glyphicon glyphicon-eye-open"></i></div>
                        </div>
                    </div>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" id="inlineFormInputGroup" name="password2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="glyphicon glyphicon-eye-open"></i></div>
                        </div>
                    </div>
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary col-12" name="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>