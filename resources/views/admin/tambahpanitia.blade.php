@extends('layouts.content')
@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Tambah Tempat Wisata</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              {{-- <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                  <div id="crop-avatar">
                    <!-- Current avatar -->
                    <img class="img-responsive avatar-view" src="images/hehehe.jpg" alt="Avatar"
                    style="width: 200px; height:200px; object-fit:cover" title="Change the avatar">
                  </div>
                </div>
                <br />
                <ul class="list-unstyled user_data">
                  <li class="col-sm-10">
                    <label class="col-sm-9 form-control-label">Tambah Foto :</label>
                    <input type="file" class="form-control" name="foto" accept="image/*" onchange="ValidateSize(this)" placeholder="Masukkan Foto" required>
                    <small style="color:red">*Max file 200Kb</small>
                  </li>
                </ul>
              </div> --}}
               {{-- col-sm-9 col-xs-12 --}}
              <div class="col-md-12">

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    {{-- <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                    </li> --}}
                    <li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">Tempat Wisata</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tambah Data</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">
                      <div class="box-typical box-typical-padding">

                      {{-- <h5 class="m-t-lg with-border">Tambah Data</h5> --}}
                          <form action="/postprasaranacabor" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Nama Lengkap :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_lengkap"
                                       placeholder="Masukkan Nama Lengkap Atlet" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Tempat Lahir :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir"
                                       placeholder="Masukkan Tempat Lahir Atlet" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Tanggal Lahir :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="datepicker" name="tanggal_lahir"
                                       placeholder="Masukkan Tanggal Lahir Atlet, format dd-mm-yyyy" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Jenis Kelamin :</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jenis_kelamin">
                                    <option selected disabled>-Pilih Jenis Kelamin-</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Klub :</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="id_klub" required>
                                    <option selected disabled>-Pilih Klub Atlet-</option>

                                    <option value=""></option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Organisasi :</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="id_organisasi" required>
                                    <option selected disabled>-Pilih Organisasi Atlet-</option>

                                    <option value=""></option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Prestasi :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="datepicker" name="prestasi"
                                       placeholder="Masukkan Prestasi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Foto :</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="foto" onchange="ValidateSize(this)" accept="image/*" placeholder="Masukkan Foto" required>
                                <small style="color:red">*Max file 200Kb</small>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-2 form-control-label">Description</label>
                          <div class="col-sm-9">
                            <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                          </div>
                        </div>

                        <div>
                            <center>
                                <div class="margin">
                                    <button type="submit" name="simpan" id="btnsimpan" class="btn btn-primary"><i
                                                class="fa fa-save"></i> Simpan
                                    </button>
                                    <button type="button" name="batal" class="btn btn-danger" onclick="refreshPage()"><i
                                                class="fa fa-ban"></i> Batal
                                    </button>
                                </div>
                            </center>
                        </div>
                      </form>
                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
