
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah</button>
        </li>
      </ol>
    </div>

    <div class="container-fluid">
      <div class="panel panel-default">
        <!-- Default panel tabel -->
          <!-- Example DataTables Card-->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Daftar Armada Travel</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No Travel</th>
                          <th>No Plat</th>
                          <th>Asal</th>
                          <th>Tujuan</th>
                          <th>Kelas</th>
                          <th>Jumlah Kursi</th>
                          <th>Harga Tiket</th>
                          <th>Hapus</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                            foreach ($record->result() as $r){
                          ?>    
                              <tr>
                                <td><?php echo $r->no_travel;?></td>
                                <td><?php echo $r->no_plat;?></td>
                                <td><?php echo $r->asal;?></td>
                                <td><?php echo $r->tujuan;?></td>
                                <td><?php echo $r->kelas;?></td>
                                <td><?php echo $r->jumlah_kursi;?></td>
                                <td><?php echo $r->harga_tiket;?></td>
                                <?php echo form_open ('armada/hapus')?>
                                <td><button type="submit" name="hapus" value="<?php echo $r->no_travel;?>">Hapus</button></td>
                              </form>
                                <td><button type="submit" data-toggle="modal" data-target="#ubah"
                                              data-travel = "<?php echo $r->no_travel;?>"
                                              data-plat = "<?php echo $r->no_plat;?>"
                                              data-kursi = "<?php echo $r->jumlah_kursi;?>"
                                              data-idrute = "<?php echo $r->id_rute;?>"
                                              data-kelas = "<?php echo $r->kelas;?>"
                                              data-harga = "<?php echo $r->harga_tiket;?>"
                                  class="modal_data">Ubah</button></td>
                              </tr>
                          <?php 
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
      </div>
        <!--#END# Tabel-->
    </div>

    <!-- Modal -->
      <div class="modal fade" id="tambah" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <?php echo form_open('armada/simpan_armada')?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Armada</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
              <div class="modal-body">
                  <div class="form-group">
                      <label class="control-label" for="text-input">No Travel</label>
                      <input class="form-control" type="text" name="no_travel" id="no_travel" required="">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">No Polisi</label>
                      <input class="form-control" type="text" name="no_plat" id="no_plat" required="">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Jumlah Kursi</label>
                      <input class="form-control" type="text" name="jumlah_kursi" id="jumlah_kursi" required="">
                  </div>
                 
                  <div class="form-group">
                      <label class="control-label" for="text-input">Rute</label>
                     <select name="id_rute" required="">
                      <?php 
                            foreach ($record1->result() as $r1){
                          ?> 
                            <option value="<?php echo $r1->id_rute;?>"><?php echo $r1->asal;?> - <?php echo $r1->tujuan;?></option>   
                          <?php 
                            }
                          ?>
                     </select>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Kelas</label>
                      <input class="form-control" type="text" name="kelas" id="kelas" required="">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Harga Tiket</label>
                      <input class="form-control" type="text" name="harga" id="harga" required="">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="submit_data" id="submit_data" class="btn btn-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--#END# modal-->

      <!-- Modal Edit -->
      <div class="modal fade" id="ubah" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <?php echo form_open('armada/ubah_armada')?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ubah Armada</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
              <div class="modal-body">
                  <div class="form-group">
                      <input type="hidden" id="temp" name="temp" >
                      <label class="control-label" for="text-input">No Travel</label>
                      <input class="form-control" type="text" name="no_travel_edit" id="no_travel_edit">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">No Polisi</label>
                      <input class="form-control" type="text" name="no_plat_edit" id="no_plat_edit">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Jumlah Kursi</label>
                      <input class="form-control" type="text" name="jumlah_kursi_edit" id="jumlah_kursi_edit">
                  </div>
                 
                  <div class="form-group">
                      <label class="control-label" for="text-input">Rute</label>
                     <select id="edit_rute" name="id_rute_edit">
                      
                     </select>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Kelas</label>
                      <input class="form-control" type="text" name="kelas_edit" id="kelas_edit">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Harga Tiket</label>
                      <input class="form-control" type="text" name="harga_edit" id="harga_edit">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="submit_data" id="submit_data" class="btn btn-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--#END# modal-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-datatables.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/dist/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click','.modal_data',function(){
            var travel     = $(this).data("travel");
            var plat   = $(this).data("plat");
            var jumlah = $(this).data("kursi");
            var rute = $(this).data("rute");
            var id_rute = $(this).data("idrute");
            var kelas = $(this).data("kelas");
            var harga = $(this).data("harga");
            $('#no_travel_edit').val(travel);
            $('#temp').val(travel);
            $('#no_plat_edit').val(plat);
            $('#jumlah_kursi_edit').val(jumlah);
            $('#kelas_edit').val(kelas);
            $('#harga_edit').val(harga);
            $('#id_rute_'+id_rute).attr('selected','selected');
            $.ajax({
                url    : "<?php echo base_url();?>armada/buat_simpan",
                method : "POST",
                data   : {id : id_rute},
                success : function(data){
                  //alert(data);
                  $('#edit_rute').html(data);
                }

            });            
        });
    });

    $('.clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done'
    });
    </script>
</body>

</html>
