<div class="row top-margin40">

        <div class="col-sm-5 col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= lang('register_trip'); ?></h3>
            </div>
            <div class="box-body">
                <div class="col-lg-12 offer-container">
                    <?= form_open('trips/search'); ?>
                    <div class="form-group">
                        <?= form_input('departure_point', set_value('departure_point'), 'class="form-control tip  input-with-icon " id="from" placeholder="Your departure point (address, city, station...)"'); ?>         
                    </div>
                    <div class="form-group">
                        <?= form_input('arrival_point', set_value('arrival_point'), 'class="form-control tip" id="to" placeholder="Your arrival point (address, city, station...)" required="required"'); ?>
                    </div>
                    <hr/>

                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-lg-12">
                                <?= form_input('date', set_value('date'), 'class="form-control tip" placeholder="DD-MM-YYYY" id="date" required="required"'); ?>
                            </div>
                        </div>
                    </div>                     

                    <div class="form-group">
                        <?= form_submit('add_user', lang('add_user'), 'class="btn btn-primary"'); ?>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
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
        
        $('#date, #return_date').datetimepicker({
            viewMode: 'days',
            format: 'DD-MM-YYYY'
        });          
        $('#leaving_time, #return_time').datetimepicker({
            format: 'HH:mm',   // disables seconds in the time picker
        });  
    
    });
</script>