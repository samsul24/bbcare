<div class="content">
  <div class="row">
    <div class="col-md-4 mt-6">
      <div class="card card-user">
        <!-- <div class="image">
          <img src="<?=base_url('assets/img/damir-bosnjak.jpg')?>" alt="...">
        </div> -->
        <div class="card-body">
          <div class="author">
            <img class="avatar rounded-circle" src="<?=base_url('uploads/user/'.$profile->foto)?>">
            <h3 class="title"> Nama : <?=$profile->nama_lengkap?></h3>
            <br>
            <h3 class="title"> CV : <?=$kantor->nama?></h3>
          </div>
        </div>
      </div>      
    </div>

    <div class="col-md-7 mt-6">
      <div class="card card-user">
        <div class="card-header">
          <h3 class="card-title">Edit Profile</h3>
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-5 pr-1">
                <div class="form-group">
                  <label>Perusahaan</label>
                  <input type="text" class="form-control" placeholder="Company" value="Baby Care Malang" disabled>
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" value="<?=$profile->username?>" disabled>
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" value="<?=$profile->email?>">
                </div>
              </div>
            </div>
              
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="<?=$profile->nama_lengkap?>">
                </div>
              </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <input type="hidden" name="old_password" value="<?=$profile->password?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Address" value="<?=$profile->alamat?>">
                </div>
              </div>
              <div class="col-md-4">
                  <label>Foto</label>
                  <input type="hidden" name="foto_lama" value="<?=$profile->foto?>">
                  <input type="file" name="foto" class="mt-1">
              </div>
            </div>
            <div class="row">
              <div class="ml-auto mr-auto">
                <input class="btn btn-primary btn-round" name="submit" type="submit" value="Update">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
