  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <?php echo form_open('rute')?>
      <h1 class="header center orange-text">Selamat Datang</h1>
      <div class="row center">
        <div class="col s12 m12">
          
            <div class="card-panel white">
              <div class="row">
                <div class="col s6 m8"> 
                  <select name="idrute" class="browser-default" required="">
                      <option value="" disabled selected="selected">Pilih Rute</option>
                  <?php 
                    foreach ($record->result() as $r){
                  ?>    
                      <option  class="rute" value="<?php echo $r->id_rute;?>"><?php echo $r->asal.' - '.$r->tujuan;?></option>
                  <?php 
                    }
                  ?>
                  </select>
                </div>
                <div class="col s6 m4">
                    <input type="text" class="datepicker" name="waktu" placeholder="Pilih tanggal keberangkatan" required=""> 
                </div>
              </div>
            </div>
        </div>
       </div>
       <div class="row center" style="font-size: 20px;">
          <button type="submit" name="submit" class="waves-effect waves-light btn"><h6>Pesan Sekarang</h6></button>
      </div>
      </form>
      <br><br>

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
    format : 'yyyy-mm-dd',
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  
  </script>

  </body>
</html>
