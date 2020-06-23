<!-- jQuery -->

<footer class="footer container">

    <section class="col-sm-12" style="margin-top: 50px;">
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <br>
            <ul class="list-inline">
                <li>
                    <a href="https://www.facebook.com/SMKMUHKARANGMOJO" target="_blank"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/SMKM_Karangmojo?s=20" target="_blank"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/smkmuhkarangmojo/" target="_blank"><i class="fa fa-instagram fa-fw fa-2x"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCWNr18WPsONx8YPMBPmw0pg" target="_blank"><i class="fa fa-youtube fa-fw fa-2x"></i></a>
                </li>
            </ul>
            <hr class="medium">
            <p class="text-muted" style="font-size: 12px;">Page rendered in <strong>{elapsed_time}</strong> seconds.<br /><b>Copyright &copy; IT Development <a href="https://smkmuhkarangmojo.sch.id/"><span>SMK Muhammadiyah Karangmojo</span></b></p>
        </div>
    </section>
</footer>

<script src="<?= base_url(); ?>template/home/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>template/home/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--Date Picke -->
<script src="<?= base_url(); ?>template/home/assets/vendor/datepicker/js/bootstrap-datepicker.js"></script>
<!-- Date Picker -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.tanggal').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
    });
</script>
</div>
</div>
</body>

</html>