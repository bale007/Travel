  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="header center white-text">Informasi Travel</h4>
      <div class="row center">
        <div class="col s12 m12">
        <div class="card-panel white">
          <table>
        <thead>
          <tr>
              <th>No Travel</th>
              <th>Asal</th>
              <th>Tujuan</th>
              <th>Jam Keberangkatan</th>
              <th>Kelas</th>
              <th>Harga Tiket</th>
          </tr>
        </thead>
        <tbody>
          <?php 
           foreach ($record->result() as $r){
          ?>
            <tr>
                <td><?php echo $r->no_travel;?></td>
                <td><?php echo $r->asal;?></td>
                <td><?php echo $r->tujuan;?></td>
                <td><?php echo $r->jam_berangkat;?></td>
                <td><?php echo $r->kelas;?></td>
                <td>Rp. <?php echo $r->harga_tiket;?></td>
                <td><?php echo anchor('rute/pesan/'.$r->no_travel.'/'.$r->id_rute.'/'.$r->harga_tiket,'Pesan Sekarang',array('class'=>'waves-effect btn'));?></td>
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


    

  <!--  Scripts-->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
  <script src="<?php echo base_url();?>assets/js/init.js"></script>

  <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  </script>

  </body>
</html>
