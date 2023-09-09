<div class="card-body">

  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div class="register-box">
        <div class="card">
          <div class="card-body register-card-body">
            <p class="login-box-msg">Login Admin</p>

            <?php

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');

            if ($this->session->flashdata('error')) {
              echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>';
              echo $this->session->flashdata('error');
              echo '</div>';
            }

            if ($this->session->flashdata('pesan')) {
              echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>';
              echo $this->session->flashdata('pesan');
              echo '</div>';
            }

            echo form_open('auth/login_user')
            ?>
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <a href="<?= base_url() ?>" class="btn btn-success btn-block">Website</a>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
              </div>
              <!-- /.col -->
            </div>
            <?php echo form_close() ?>


          </div>
          <!-- /.form-box -->
        </div>
      </div>
    </div>
    <div class="col-sm-4"></div>
  </div>

</div>