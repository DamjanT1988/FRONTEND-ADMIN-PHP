


<!--sidfoten med kontakt, länkar & sociala medier-->
<footer>
    <div id="footer1">

        <!--wp widget code-->
        <?php if (is_active_sidebar('footer1')) : ?>
            <div>
                <?php dynamic_sidebar('footer1'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div id="footer2">

    </div>

    <div id="footer3">
        <?php if (is_active_sidebar('footer3')) : ?>
            <div>
                <?php dynamic_sidebar('footer3'); ?>
            </div>
        <?php endif; ?>
    </div>

</footer>

        </div>


<!--script for mobile menu-->
<script >
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

</body>


<?php wp_footer(); ?>