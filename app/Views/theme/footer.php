              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark" id="footer">
      <div class="row">
        <div class="col-md-12">
          <i class="fab fa-creative-commons"></i>
          <p id="developer">Developed by Elvin B. Catantan</p>
          <p id="copy-statement">
            Except where otherwise noted, content on this site is licensed under a Creative Commons Attribution 4.0 International license.
            <br>
          </p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="<?= base_url() ?>/public/js/jquery-3.3.1.slim.min.js"></script> -->
    <script src="<?= base_url() ?>public/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>public/js/popper.min.js"></script>
    <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/js/sweetalert2@9.js"></script>
    <script src="<?= base_url() ?>public/select2/dist/js/select2.min.js"></script>
    <script type="text/javascript">
      var baseURL = "<?php echo base_url(); ?>";
    </script>
    <script src="<?= base_url() ?>public/js/myAlerts.js"></script>
    <script src="<?= base_url() ?>public/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/myJavascript.js"></script>
    <script src="<?= base_url() ?>public/js/user_profile.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
         $('#user_credential_submit').on('click', function(event){
             event.preventDefault();
             var strUrl = '';
             var user_id = $('#user_id').val();
             var area_id = $('#area_id').val();
             var department_id = $('#department_id').val();
             var academic_program_id = $('#academic_program_id').val();
             $.ajax({
                 type : "POST",
                 url  : "<?php echo base_url('users/add-credentials')?>",
                 dataType : "JSON",
                 data : {user_id:user_id , area_id:area_id, academic_program_id:academic_program_id, department_id:department_id},
                 success: function(data){
                     strUrl = 'users/show/' + user_id;
                     window.location = "<?php echo base_url() ?>"+strUrl;
                     $('[name="user_id"]').val("");
                     $('[name="area_id"]').val("");
                     $('[name="department_id"]').val("");
                     $('[name="academic_program_id"]').val("");
                     $('#userCredential').modal('hide');
                 },
                 error: function() {
                   alert('There was some error in Adding user credentials!');
                 }
             });
             // console.write("failed");
             return false;
         });

         $('#user_credential_edit').on('click', function(event){
             event.preventDefault();
             var id = $('#user_credential_id').val();
             var user_id = $('#user_id').val();
             var area_id = $('#area_id').val();
             var department_id = $('#department_id').val();
             var  academic_program_id = $('#academic_program_id').val();
             var strUrl = '<?php echo base_url() ?>users/edit-credentials/'+id;
             // alert(user_id +'\n'+ area_id +'\n'+ department_id +'\n'+ academic_program_id +'\n'+ strUrl);
             $.ajax({
                 type : "POST",
                 url  : strUrl,
                 dataType : "JSON",
                 data : {user_id:user_id , area_id:area_id, department_id:department_id, academic_program_id:academic_program_id},
                 success: function(data){
                     strUrl = 'users/show/' + user_id;
                     window.location = "<?php echo base_url() ?>"+strUrl;
                     //console.log(data);
                     $('#userCredential').modal('hide');
                 },
                 error: function() {
                   alert('There was some error in updating the user credentials!');
                 }
             });
             // console.write("failed");
             return false;
         });
       });

      $('.document-tagging').select2({
       theme: 'bootstrap4'
      });
    </script>
  </body>
</html>
