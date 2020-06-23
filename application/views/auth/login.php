    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>"><b>Admin</b>PPDB</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login terlebih dahulu</p>
                <?= $this->session->flashdata('message'); ?>
                <form method="post" action="<?= base_url('auth') ?>">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" value="<?= set_value('email') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('email', '<p class="text-danger pl-3">', '</p>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<p class="text-danger pl-3">', '</p>'); ?>
                    <div class="row">
                        <div class="col-lg">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="<?= base_url('auth/registration') ?>" class="text-center">Register Acount</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->