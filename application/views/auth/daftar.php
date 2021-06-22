<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-2 py-4">
        <div class="card-body">
            <form action="<?php echo site_url('auth/daftar') ?>" method="post" class="row g-3 needs-validation" enctype="multipart/form-data">
                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif;?>
                <div class="">
                    <label class="form-label" for="nama">Nama Lengkap</label>
                    <input type="name" class="form-control form-control-sm" type="text" name="nama" value="<?php echo set_value('nama')?>">
                </div>

                <div class="">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" type="text" name="email" value="<?php echo set_value('email')?>">
                </div>

                <div class="">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control form-control-sm" type="text" nama="password" value="<?php echo set_value('password')?>">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>

                <div class="">
                    <label class="form-label" for="nama">Konfirmasi Password</label>
                    <input type="password" class="form-control form-control-sm" type="text" nama="passconf" value="<?php echo set_value('passconf')?>">
                </div>

                <div class="">
                    <label class="form-label" for="nama">Alamat</label>
                    <textarea type="" class="form-control form-control-sm" type="text" nama="almt" value="<?php echo set_value("almt")?>"></textarea>
                </div>

                <div class="">
                <div>
                
                </div>
                    <div>
                        <label class="form-label" for="nama">Jenis Kelamin</label>
                    </div>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="" id="inlineRadio1" value="<? echo set_value('')?>">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<? echo set_value('')?>">
                            <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-grid">
                    <button class="btn btn-primary" type="submit" name="btn" value="Save">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>