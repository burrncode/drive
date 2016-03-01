<?php (defined('BASEPATH')) OR exit('No direct script access allowed'); ?>
</div>
<div class="modal" data-easein="flipYIn" id="posModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
<footer class="">
    <div class="container">
        <div class="row">
            <section class="col-md-3 col-sm-6">
                <h4>About Weblauncher</h4>
                <p style="font-size: 14px; line-height: 19px;">Weblauncher offers an wide array of category-oriented Free and Premium Responsive Bootstrap HTML Templates and WordPress Themes that covers all kinds of templates or themes a developer may need!</p>
                <a href="https://Weblauncher/"><img class="footer-logo hidden-sm hidden-xs" alt="ThemeWaon" src="https://weblauncher.co.in/wp-content/themes/Weblauncher/img/logo-white.png"></a>
            </section>
            <section class="col-md-2 col-sm-6">

                <h4>Any Query?</h4>
                <ul class="footer-box-list">
                    <li><a href="https://weblauncher.co.in/terms-conditions/">Terms &amp; Conditions</a></li>
                    <li><a href="https://weblauncher.co.in/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="https://weblauncher.co.in/blog">Articles</a></li>
                    <li><a href="https://weblauncher.co.in/about-theme-wagon/">About</a></li>
                    <li><a href="https://weblauncher.co.in/license/">License</a></li>
                </ul>
            </section>

            <section class="col-md-4 col-sm-6 text-center">
                <h4>We are Social</h4>
                <div class="social">
                    <a class="facebook" href="https://www.facebook.com/Weblauncher" target="_blank"></a>
                    <a class="twitter" href="https://twitter.com/Weblauncher" target="_blank"></a>
                    <a class="gplus" href="https://www.google.com/+WeblauncherThemes" target="_blank"></a>
                    <a class="pinterest" href="https://www.pinterest.com/Weblauncher/" target="_blank"></a>
                </div>



            </section>
            <section class="col-md-3">
                <p>
                    <img class="img-responsive" src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_secured_by_pp_2line.png" border="0" alt="Payments by PayPal">
                </p>
                <p>
                    <img style="max-width: 163px; margin-top: 30px;" src="https://weblauncher.co.in/wp-content/themes/Weblauncher/img/outline.png">
                </p>
            </section>
        </div><!-- row -->
        <div class="copyright">
            <div class="row">
                <div class="col-md-6">
                    <p><a href="mailto:info@weblauncher.co.in">info@weblauncher.co.in</a></p>
                </div>
                <div class="col-md-6">
                    <p class="text-right">&copy;<?= date('Y') ?> <a href="http://weblauncher.co.in/">WebLauncher</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<div id="ajaxCall"><i class="fa fa-spinner fa-pulse"></i></div>
<script type="text/javascript">
    var base_url = '<?=base_url();?>';
    var dateformat = '<?=$Settings->dateformat;?>', timeformat = '<?= $Settings->timeformat ?>';
    <?php unset($Settings->protocol, $Settings->smtp_host, $Settings->smtp_user, $Settings->smtp_pass, $Settings->smtp_port, $Settings->smtp_crypto, $Settings->mailpath, $Settings->timezone, $Settings->setting_id, $Settings->default_email, $Settings->version, $Settings->stripe, $Settings->stripe_secret_key, $Settings->stripe_publishable_key); ?>
    var Settings = <?= json_encode($Settings); ?>;
    $(window).load(function () {
        $('.mm_<?=$m?>').addClass('active');
        $('#<?=$m?>_<?=$v?>').addClass('active');
    });
</script>

<script src="<?= $assets ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/redactor/redactor.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/formvalidation/js/formValidation.popular.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>plugins/formvalidation/js/framework/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>dist/js/common-libs.js" type="text/javascript"></script>
<script src="<?= $assets ?>dist/js/app.min.js" type="text/javascript"></script>
<script src="<?= $assets ?>dist/js/custom.js" type="text/javascript"></script>
<script src="<?= $assets ?>dist/js/pages/all.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.slider1').bxSlider({
     mode: 'vertical',
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 3,
   slideMargin: 10
  });
});

</script>

</body>
</html>

