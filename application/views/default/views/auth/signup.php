<div class="row top-margin40">
    <div class="col-sm-5 col-md-6">
        <div>
            <div class="box-body">
                <div class="col-lg-12">
                  <ul class="list-unstyled">
                    <li>
                      <h3>Welcome to Car Pooling.</h3>
                      <p>Find a car with an empty seat travelling towards your destination.</p>
                    </li>
                    <li>
                      <h3>Find a ride and Share a ride.</h3>
                      <p>Find a perfect ride based on your travel needs and share a ride with drivers travelling towards same destination.</p>
                    </li>
                    <li>
                      <h3>Save money, fuel and environment.</h3>
                      <p>Don't bring another car on the road. 
                         Get in to a car which is on the road. 
                         Avoid road congestion, save money and fuel, and become environment friendly.</p>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5 col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?= lang('enter_info'); ?></h3>
            </div>
            <div class="box-body">
                <div class="col-lg-12">
                    <?= form_open('auth/signup'); ?>
                    <div class="form-group">
                        <?= lang('first_name', 'first_name'); ?>
                        <?= form_input('first_name', set_value('first_name'), 'class="form-control tip" id="first_name"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('last_name', 'last_name'); ?>
                        <?= form_input('last_name', set_value('last_name'), 'class="form-control tip" id="last_name"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('phone', 'phone'); ?>
                        <?= form_input('phone', set_value('phone'), 'class="form-control tip" id="phone"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('gender', 'gender'); ?>
                        <?php $gnders = array('male' => lang('male'), 'female' => lang('female')); ?>
                        <?= form_dropdown('gender', $gnders, set_value('gender'), 'class="form-control tip select2" style="width:100%;" id="gender"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('email', 'email'); ?>
                        <?= form_input('email', set_value('email'), 'class="form-control tip" id="email"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('username', 'username'); ?>
                        <?= form_input('username', set_value('username'), 'class="form-control tip" id="username"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('password', 'password'); ?>
                        <?= form_password('password', '', 'class="form-control tip" id="password"  required="required"'); ?>
                    </div>
                    <div class="form-group">
                        <?= lang('confirm_password', 'confirm_password'); ?>
                        <?= form_password('confirm_password', '', 'class="form-control tip" id="confirm_password"  required="required"'); ?>
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