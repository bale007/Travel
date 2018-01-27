  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <div class="col s12 m12">
        <div class="card-panel white">
          <div class="row center">
            <h5>Input Data</h5>
          </div>
          <?php echo form_open('pesan/post');?>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6" style="display: block; background-color: indigo; color: white; padding: 5px 20px;">
                    Tanggal Berangkat : <?php echo $this->session->userdata('waktu');?>
                  </div>
                  <div class="input-field col s6" style="display: block; background-color: indigo; color: white; padding: 5px 20px;">
                    Sisa Kursi : <?php foreach ($kursi as $k) {
                      echo $k->sisa;  
                    }?>
                  </div>
              </div>
            <div class="row">
              <div class="input-field col s12">
                  <input type="text" class="validate" name="nama" required="">
                <label>Nama Lengkap</label>
              </div>
            </div>  
            <div class="row">
              <div class="input-field col s12">
                  <input type="text" class="validate"name="nohp" required="">
                <label>NO HP</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                  <input type="text" class="validate" name="email" required="">
                <label>Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                  <input type="text" class="validate" name="kursi" required="">
                <label>Jumlah Kursi</label>
              </div>
            </div>
            <p>
              *Jika dalam satu jam tidak di konfirmasi, pesanan akan dibatalkan.
            </p>
            <p>
              <input type="checkbox" class="filled-in" id="filled-in-box" required="" />
              <label for="filled-in-box" class="black-text">Saya setuju</label>
            </p>  
            <input type="hidden" name="notravel" value="<?php echo $no_travel;?>">
            <input type="hidden" name="id_rute" value="<?php echo $id_rute;?>">
            <input type="hidden" name="harga" value="<?php echo $harga;?>">
          <div class="row center">
             <button class="btn waves-effect waves-light indigo" type="submit" name="action">Submit</button>
          </div>
        </form>
      </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
       
      </div>

    </div>
    <br><br>
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
