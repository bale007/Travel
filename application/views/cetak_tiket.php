  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="header center white-text">Cetak Tiket Travel</h4>
      <div class="row center">
        <div class="col s12 m12">
          <div class="card-panel white">
            <div class="row">
              <div class="input-field col s6">
                  <input id="no_tagihan" name="no_tagihan" type="text" class="validate" required="">
                <label for="first_name">Masukkan No Tagihan</label>
              </div>
              <div class="input-field col s6">
                <div class="file-field input-field">
                    <button class="btn waves-effect waves-light indigo" id="cari_data" type="submit" name="action">Cari Tiket
             </button>
                    
                </div>
              </div>
            </div>
            <div class="row center">
          </div>
        </div>
        <div class="tampil_tiket">
            
        </div>
          </div>
        </div>
    </div>
  </div>


    

  <!--  Scripts-->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
  <script src="<?php echo base_url();?>assets/js/init.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        
        $('#cari_data').click(function(){
            var no_tagihan = $('#no_tagihan').val();
            //alert(no_tagihan)
            //$('#temp_tagihan').val(no_tagihan);
            $.ajax({
                url    : "<?php echo base_url();?>cetak_tiket/tampil_cetak",
                method : "POST",
                data   : {no_tagihan : no_tagihan},
                success : function(data){
                    $('.tampil_tiket').html(data);
                }
            });            
        });
        
        $(document).on('click','.cetak',function(){
            var no_tiket = $(this).data("id");
            //alert(no_tagihan)
            //$('#temp_tagihan').val(no_tagihan);
            $.ajax({
                url    : "<?php echo base_url();?>cetak_tiket/update",
                method : "POST",
                data   : {id : no_tiket},
                success : function(data){
                  //alert(data);
                  $('#baris'+no_tiket).fadeOut();
                }
            });
        });
    });

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
