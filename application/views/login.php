    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <center><img src="<?= base_url(); ?>assets/gambar/Logo Apps.png" alt="logo"></center>
                <?= $this->session->flashdata('message'); ?>
                <form method="POST" action="<?= base_url('auth'); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col-8" style="padding-left: 0"><a href="" style="color: #2492F4;font-weight: bold;">Forgot Password</a></div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <p style="margin-bottom: 0;">Don’t have an account?</p>
                        <a href="<?= base_url('auth/registration'); ?>" style="color: #2492F4;font-weight: bold;font-size: 12pt;">Register</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
    </body>

    </html>