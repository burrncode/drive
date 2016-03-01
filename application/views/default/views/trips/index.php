<div class="row top-margin40">

        <div class="col-sm-5 col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= lang('register_trip'); ?></h3>
            </div>
            <div class="box-body">
                <div class="col-lg-12 offer-container">
                    <?= form_open('trips/offer'); ?>
                    <div class="form-group">
                        <?= form_input('departure_point', set_value('departure_point'), 'class="form-control tip  input-with-icon " id="from" placeholder="Your departure point (address, city, station...)"'); ?>         
                    </div>
                    <div class="form-group">
                        <?= form_input('arrival_point', set_value('arrival_point'), 'class="form-control tip" id="to" placeholder="Your arrival point (address, city, station...)" required="required"'); ?>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <?= lang('price', 'price'); ?>
                                <?= form_input('price', set_value('price'), 'class="form-control tip" id="last_name" required="required"'); ?>
                            </div>    
                        </div>
                    </div>                    
                    <hr/>

                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-xs-6">
                                <?= lang('leaving_on', 'leaving_on'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <?= form_input('leaving_date', set_value('leaving_date'), 'class="form-control tip" id="leaving_date" required="required"'); ?>
                            </div>
                            <div class="col-xs-6">
                                <?= form_input('leaving_time', set_value('leaving_time'), 'class="form-control tip" id="leaving_time" required="required"'); ?>
                            </div>
                        </div>
                    </div>                     

                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-xs-6">
                                <?= lang('return_optional', 'return_optional'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <?= form_input('return_date', set_value('return_date'), 'class="form-control tip" id="return_date" required="required"'); ?>
                            </div>
                            <div class="col-xs-6">
                                <?= form_input('return_time', set_value('return_time'), 'class="form-control tip" id="return_time" required="required"'); ?>
                            </div>
                        </div>
                    </div>                     
                       
                  
                    <div class="form-group clearfix">
                        <?= form_checkbox('isRecurring'); ?>
                        <label for="isRecurring"><?= lang('recurrent'); ?></label>
                    </div>
                    <hr/>

                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-xs-6">
                                <?= lang('your_car', 'your_car'); ?>
                            </div>
                            <div class="col-xs-6">
                                <?= lang('seats', 'seats'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <?= form_input('car_details', set_value('car_details'), 'class="form-control tip" id="last_name" required="required"'); ?>
                            </div>
                            <div class="col-xs-6">
                                <?= form_input('seats', set_value('seats'), 'class="form-control tip" id="last_name" required="required"'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group offset-0">
                        <label for="comment" class="ng-binding"><?= lang('extra_info'); ?></label>
                        <textarea name="additional_info" height="100px" id="additional_info" class="form-control" 
                        placeholder="Provide additional information about your trip. More details about the meeting points,what types of music you like, why you are travelling or any other information that your passengers should know." 
                        maxlength="900"></textarea>
                        <small tooltip="characters remaining"><?= lang('charachters_remaining'); ?></small>
                    </div>

                    <div class="form-group offset-0">
                        <?= lang('terms'); ?>
                    </div>

                    <div class="form-group">
                        <?= form_submit('add_user', lang('add_user'), 'class="btn btn-primary"'); ?>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-5 col-md-6">
        <div id="map-container" style="height: 750px;">
        </div>
    </div>
</div>

<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="<?= $assets ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/moment.min.js"></script>
<script src="<?= $assets ?>plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        
        $('#leaving_date, #return_date').datetimepicker({
            viewMode: 'days',
            format: 'DD-MM-YYYY'
        });          
        $('#leaving_time, #return_time').datetimepicker({
            format: 'HH:mm',   // disables seconds in the time picker
        });  
    
    });
</script>

<script>
      function initMap() {
        var mapDiv = document.getElementById('map-container');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
    async defer></script>