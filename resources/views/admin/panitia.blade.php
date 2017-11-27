@extends('layouts.content')
@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Daftar Panitia Genesis</h3>
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

      <div class="container-fluid">
        <a href="" class="btn btn-sm btn-primary">Tambah Data</a>
        <div class="row">
          <section class="card">
            <div class="card-block">

                    <form action="" method="post" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <center>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tgl Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Divisi</th>
                        <th>Angkatan</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </center>
                   </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1  ?>
                  <tr>
                    <center>
                      <td>{{$i++}}</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <button type="button" class="btn btn-inline btn-success btn-sm ladda-button" onclick="showModal({{}})" title="edit" name="button" data-toggle="modal" data-target="#modaledit" ><span class="fa fa-edit"></span></button>
                          <button type="delete" name="delete" id="btnhapus" value="delete" class="btn btn-inline btn-danger btn-sm ladda-button" onclick="return confirm('Are you sure to delete this data');"><i class="fa fa-trash"></i></button>
                      </td>
                  </center>
                  </tr>
                  <?php ;?>
                  </tbody>
                </table>
                    </form>

              </div>
          </section><!--.box-typical-->
        </div><!--.row-->
	    </div><!--.container-fluid-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
