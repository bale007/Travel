<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    </div>

    <div class="container-fluid">
      <div class="panel panel-default">
        <!-- Default panel tabel -->
          <!-- Example DataTables Card-->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Data Pembayaran Tiket</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No Tagihan</th>
                          <th>Nama Pemesan</th>
                          <th>Bukti Pembayaran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                            foreach ($record->result() as $r){
                          ?>    
                              <tr>
                                <td><?php echo $r->no_tagihan;?></td>
                                <td><?php echo $r->nama;?></td>
                                <td><?php echo $r->bukti;?></td>
                              <?php echo form_open ('admin_konfirmasi/terima')?>
                                <td><button type="submit" name="terima" value="<?php echo $r->no_tagihan;?>">Konfirmasi</button></td>
                              </form>
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
            <?php echo form_open('admin/simpan_rute')?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Rute</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
              <div class="modal-body">
                  <div class="form-group">
                      <label class="control-label" for="text-input">Asal</label>
                      <input class="form-control" type="text" name="asal" id="asal">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Tujuan</label>
                      <input class="form-control" type="text" name="tujuan" id="tujuan">
                  </div>
                 
                  <div class="form-group">
                      <label class="control-label" for="text-input">Jam Keberangkatan</label>
                     <div class="input-group clockpicker">
                          <input type="text" class="form-control" name="jam_berangkat" value="18:00" readonly="">
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Jam Tiba</label>
                      <div class="input-group clockpicker">
                          <input type="text" class="form-control" name="jam_tiba" value="18:00" readonly="">
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
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
            <?php echo form_open('admin/ubah_rute')?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ubah Rute</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
              <div class="modal-body">
                  <div class="form-group">
                      <label class="control-label" for="text-input">Asal</label>
                      <input type="hidden" name="id_rute_edit" id="id_rute_edit">
                      <input class="form-control" type="text" name="asal_edit" id="asal_edit">
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Tujuan</label>
                      <input class="form-control" type="text" name="tujuan_edit" id="tujuan_edit">
                  </div>
                 
                  <div class="form-group">
                      <label class="control-label" for="text-input">Jam Keberangkatan</label>
                     <div class="input-group clockpicker">
                          <input type="text" class="form-control" name="jam_berangkat_edit" id="berangkat_edit" value="18:00" readonly="">
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="text-input">Jam Tiba</label>
                      <div class="input-group clockpicker">
                          <input type="text" class="form-control" name="jam_tiba_edit" id="tiba_edit" value="18:00" readonly="">
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
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
            var id_rute  = $(this).data("id");
            var asal   = $(this).data("asal");
            var tujuan = $(this).data("tujuan");
            var berangkat = $(this).data("berangkat");
            var tiba = $(this).data("tiba");
            $('#id_rute_edit').val(id_rute);
            $('#asal_edit').val(asal);
            $('#tujuan_edit').val(tujuan);
            $('#berangkat_edit').val(berangkat);
            $('#tiba_edit').val(tiba);
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
