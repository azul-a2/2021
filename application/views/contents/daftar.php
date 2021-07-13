<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-2 py-4">
        <div class="card-body">
            <form action="" method="post" class="row g-3" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label" for="login">Username</label>
                    <input class="form-control form-control-sm <?php echo form_error('login') ? 'border border-danger' : null ?>" type="text" name="login" value="<?php echo set_value('login') ?>">
                    <div class="form-text text-danger">
                        <?php echo form_error('nama')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control form-control-sm <?php echo form_error('password') ? 'border border-danger' : null ?>" type="password" name="password" value="<?php echo set_value('password') ?>">
                    <div id="passwordHelpBlock" class="form-text text-danger">
                        <?php echo form_error('password')?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="passconf">Konfirmasi Password</label>
                    <input class="form-control form-control-sm <?php echo form_error('passconf') ? 'border border-danger' : null ?>" type="password" name="passconf" value="<?php echo set_value('passconf') ?>">
                    <div id="passwordHelpBlock" class="form-text text-danger">
                        <?php echo form_error('passconf')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="nama">Nama Lengkap</label>
                    <input class="form-control form-control-sm <?php echo form_error('nama') ? 'border border-danger' : null ?>" type="text" name="nama" value="<?php echo set_value('nama') ?>">
                    <div class="form-text text-danger">
                        <?php echo form_error('nama')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control form-control-sm <?php echo form_error('email') ? 'border border-danger' : null ?>" type="text" name="email" value="<?php echo set_value('email') ?>">
                    <div class="form-text text-danger">
                        <?php echo form_error('email')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="login">Nomer Telephone</label>
                    <input class="form-control form-control-sm <?php echo form_error('almt_telp') ? 'border border-danger' : null ?>" type="text" name="almt_telp" value="<?php echo set_value('almt_telp') ?>">
                    <div class="form-text text-danger">
                        <?php echo form_error('nama')?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Alamat</label>
                    <textarea class="form-control form-control-sm <?php echo form_error('almt_kota') ? 'border border-danger' : null ?>" type="text" name="almt_kota"><?php echo set_value('almt_kota') ?></textarea>
                    <div class="form-text text-danger">
                        <?php echo form_error('almt_kota')?>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label class="form-label" for="jkel">Jenis Kelamin</label>
                    </div>
                    <div class="<?php echo form_error('jkel') ? 'border border-danger rounded' : null ?>">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jkel" value="Laki-laki" <?php echo set_value('jkel') == "Laki-laki" ? "checked" : null ?>>
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jkel" value="Perempuan" <?php echo set_value('jkel') == "Perempuan" ? "checked" : null ?>>
                            <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-text text-danger">
                        <?php echo form_error('jkel')?>
                    </div>
                </div>
                <div class="col-12 d-grid d-flex gap-2">
                    <button class="btn btn-primary" type="submit" name="btn" value="Save">Daftar</button>
                    <button class="btn btn-outline-primary" type="Reset" name="btn" value="Save">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

