@extends('layouts.content')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
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
                          <label class="col-sm-9 form-control-label">Update Foto :</label>
                          <input type="file" class="form-control" name="foto" accept="image/*" onchange="ValidateSize(this)" placeholder="Masukkan Foto" required>
            							<small style="color:red">*Max file 200Kb</small>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          {{-- <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li> --}}
                          <li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">

                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">
                            <div class="box-typical box-typical-padding">

                            <h5 class="m-t-lg with-border">Update Profil</h5>
                                <form action="/postprasaranacabor" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                              <br>
                              <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Nama Prasarana :</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nama_prasarana" placeholder="Masukkan Nama Prasarana" required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Nama Prasarana :</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="nama_prasarana" placeholder="Masukkan Nama Prasarana" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                      <label class="col-sm-3 form-control-label">Nama Prasarana :</label>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama_prasarana" placeholder="Masukkan Nama Prasarana" required>
                                      </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Alamat :</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                                    </div>
                                </div>
                                <div>
                                    <center>
                                      <div class="margin">
                                        <button  type="submit" name="simpan" id="btnsimpan" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profil</button>
                                                  <button  type="button" name="batal" class="btn btn-danger" onclick="refreshPage()"><i class="fa fa-ban"></i> Batal</button>
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
