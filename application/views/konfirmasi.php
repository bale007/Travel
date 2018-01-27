<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <div class="col s12 m12">
        <div class="card-panel white">
          <div class="row center">
            <h5>Form Konfirmasi</h5>
          </div>
          <?php echo form_open('konfirmasi/cek') ?>
            <div class="row">
              <div class="input-field col s6">
                <input id="no_tagihan" name="no_tagihan" type="text" class="validate">
                <label for="first_name">No Tagihan</label>
              </div>
              <div class="input-field col s6">
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" id="bukti" name="bukti" type="text">
                  </div>
                </div>
              </div>
            </div>
          <div class="row center">
             <button class="btn waves-effect waves-light indigo" type="submit" name="action">Kirim Bukti Pembayaran
             </button>
           </form>
          </div>
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
