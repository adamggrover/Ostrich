</main>
<footer>
    <div class="footer-top bg-primary text-white">
        <div class="content-container">
            <h1 class="font-bold font-5xl"><?php bloginfo( 'name' ); ?></h1>
            <nav class="">
                <?php wp_nav_menu( array('theme_location' => 'footer' ) ); ?>
            </nav>
        </div>

    </div>
    <div class="footer-bottom bg-accent text-white flex justify-between py-4 px">
        <div class="content-container flex justify-between">
            <p class>2020 Ostrich all rights reserved</p>
            <p class>Privacy policy Disclaimer. Terms and Conditions. FAQs</p>
        </div>
    </div>

</footer>
<?php
    wp_footer();
?>
</body>
</html>