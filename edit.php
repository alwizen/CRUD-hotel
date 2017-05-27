<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    /**
    * Created by PhpStorm.
    * User: alwizen
    * Date: 20/05/2017
    * Time: 11:25
    */
    include 'alerts.php';
    include 'koneksi.php';
    $id = $_GET['id'];
    $input = mysql_query("SELECT tamu.* , kamar.* FROM tamu, kamar WHERE kamar.id='$id'");
    $data = mysql_fetch_array($input);
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Input Booking Hotel</a></li>
            <li><a href="rekap.php">List Booking</a></li>
          </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col-lg-6">
          <div class="page-header">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="glyphicon glyphicon-tag"></i> <b> Edit Booking Hotel </b> </h3>
          </div>
          <div class="panel-body">
            <form id="form_input" action="edit.php" method="post">
              <?php
               if(isset($_POST['update'])){

                 $id = $_POST['id'];
                 $nama = $_POST['nama'];
                 $jns_kel = $_POST['jns_kel'];
                 $notelp = $_POST['notelp'];
                 $keterangan = $_POST['keterangan'];
                 $jalan = $_POST['jalan'];
                 $provinsi = $_POST['provinsi'];
                 $kota = $_POST['kota'];
                 $kd_pos = $_POST['kd_pos'];

                 $no_kamar = $_POST['no_kamar'];
                 $tipe_kamar = $_POST['tipe_kamar'];
                 $jml_ranjang = $_POST['jml_ranjang'];

                 $tgl_checkin = $_POST['tgl_checkin'];
                 $tgl_checkout = $_POST['tgl_checkout'];

                 $update  = "UPDATE tamu, kamar SET tamu.id='".$id."', tamu.nama='".$nama."', tamu.jns_kel='".$jns_kel."', tamu.notelp='".$notelp."', tamu.jalan='".$jalan."', tamu.kota='".$kota."', tamu.provinsi='".$provinsi."', tamu.kd_pos='".$kd_pos."', tamu.keterangan='".$keterangan."',tamu.tgl_checkin='".$tgl_checkin."',tamu.tgl_checkout='".$tgl_checkout."',kamar.no_kamar='".$no_kamar."' WHERE kamar.id AND tamu.id= '".$id."'";

                 mysql_query($update, $con) or die(mysql_error());
                 $data = mysql_fetch_array($update);

                 writeMsg('save.sukses');

               }
               ?>
                 <div class="row">
                   <div class="col-xs-6 form-group">
                     <label class="control-label" for="id">No. Identitas (SIM/KTP)</label>
                     <input type="text" name="id" value="<?php echo $data['id']; ?>" class="form-control" required>
                   </div>
                   <div class="col-xs-6 form-group">
                     <label class="control-label" for="nama">Nama </label>
                     <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required>
                   </div>
                 </div>

                  <!-- field & combo jenis - hp -->
                 <div class="row">
                   <div class="col-xs-6 form-group">
                     <label for="sel1">Jenis Kelamin</label>
                     <select class="form-control" name="jns_kel">
                       <option>Laki-Laki</option>
                       <option>Perempuan</option>
                     </select>
                   </div>
                   <div class="col-xs-6 form-group">
                     <label class="control-label" for="hp">No Telepon</label>
                     <input type="number" class="form-control" value="<?php echo $data['notelp']; ?>" name="notelp">
                   </div>
                 </div>
                 <!-- akhir jns dan hp -->

                    <!--  Field alamat -->
                 <div class="form-group">
                   <label class="control-label" for="hp">Alamat</label>
                   <input type="text" class="form-control"  placeholder="Alamat Lengkap" name="jalan" value="<?php echo $data['jalan']; ?>">
                </div>

                 <div class="row">
                   <div class="col-xs-4 form-group">
                     <input type="text" class="form-control" placeholder="Provinsi" name="provinsi" value="<?php echo $data['provinsi']; ?>" required>
                   </div>
                   <div class="col-xs-4 form-group">
                     <input type="text" class="form-control" placeholder="Kota/Kabupaten" name="kota" value="<?php echo $data['kota']; ?>" required>
                   </div>
                   <div class="col-xs-4 form-group">
                     <input type="text" class="form-control" placeholder="Kode Pos" name="kd_pos" value="<?php echo $data['kd_pos']; ?>" required>
                   </div>
                 </div>
                 <!-- akhir bagian alamat -->

                 <!-- combo jenis kamar dan jmlranjang -->
                 <div class="row">
                   <div class="col-xs-4 form-group">
                     <label class="control-label">No. Kamar</label>
                     <input type="text" class="form-control" placeholder="No. Kamar" name="no_kamar" value="<?php echo $data['no_kamar']; ?>" required>
                   </div>
                   <div class="col-xs-4 form-group">
                     <label for="sel1">Jenis Kamar</label>
                     <select class="form-control" name="tipe_kamar">
                       <option>Standard room</option>
                       <option>Superior/Premium room</option>
                       <option>Deluxe room</option>
                       <option>Suite room</option>
                       <option>Presidential/penthouse room</option>
                     </select>
                   </div>
                   <div class="col-xs-4 form-group">
                     <label for="sel1">Jumlah Ranjang</label>
                     <select class="form-control" name="jml_ranjang">
                       <option>Single</option>
                       <option>Double</option>
                       <option>Triple/Family</option>
                     </select>
                   </div>
                 </div>
                 <!-- Akhir combo jenis kamar -->

                 <!-- datepicker  -->
                 <div class="row">
                   <div class="col-xs-6 form-group">
                     <label>Tgl. CheckIn</label>
                     <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                       <input class="form-control" type="text" name="tgl_checkin" readonly="readonly" value="<?php echo $data['tgl_checkin']; ?>">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     </div>
                  </div>
                  <div class="col-xs-6 form-group">
                    <label>Tgl. CheckOut</label>
                    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                      <input class="form-control" type="text" name="tgl_checkout" readonly="readonly" value="<?php echo $data['tgl_checkout']; ?>">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                 </div>
                 </div>
                 <!-- akhir datepicker -->

                 <!-- text keterangan -->
                 <div class="form-group">
                   <label for="comment">Keterangan</label>
                   <textarea class="form-control" rows="5" name="keterangan" value="<?php echo $data['keterangan']; ?>"></textarea>
                 </div>
                 <!-- akhir keterangan -->

                 <!-- button -->
                 <div class="form-group">
                   <input type="submit" value="Update" name="update" class="btn btn-primary">
                 	 <a href="rekap.php" class="btn btn-danger">Batal</a>
                 </div>
                 <!-- akhir button -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
      $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>

  </body>
</html>
