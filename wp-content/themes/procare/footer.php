</div>

<div id="footer">

<div class="top">
</div>

<div class="bottom">
</div>


<div class="text">
<p>Servicing the <a href="https://plus.google.com/117896086850374136871/about">Seattle, WA</a> area | PO Box 50801 Bellevue Wa 98015 |
<a href="http://sayenkodesign.com/" title="Seattle web design Development">Seattle Web Development</a> by <a href="http://sayenkodesign.com/" title="Seattle web Development company">Sayenko Design.</a> <br> Copyright © <?php echo date('Y'); ?> Pro Care, Inc. | <a href="<?php bloginfo('home'); ?>/site-map">Site Map</a> All rights reserved.</p>
</div>



</div>
<?php do_action('wp_footer'); ?>
</div>

<script>
    jQuery('#menu-primary-menu .menu-item-has-children > a').click(function(e){
        console.log("clicked");
        e.preventDefault();
        jQuery(this).parent('li').toggleClass("is_toggled");
        jQuery(this).next('ul').slideToggle();
        return false;
    });

    jQuery('#mobile-logo-bar a .fa.fa-bars').click(function(e){
        e.preventDefault();
        jQuery('#menu-primary-menu').slideToggle();
        return false;
    })
</script>

</body>
</html>