<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>PPDB</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new Acount</p>

            <form method="post" action="<?= base_url('auth/registration'); ?>">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Full name" value="<?= set_value('nama'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('nama', '<p class="text-danger pl-3">', '</p>'); ?>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<p class="text-danger pl-3">', '</p>'); ?>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password Minimal 6 Karakter">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<p class="text-danger pl-3">', '</p>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder=" Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="<?= base_url('auth') ?>" class="text-center">I already have a acounts</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->