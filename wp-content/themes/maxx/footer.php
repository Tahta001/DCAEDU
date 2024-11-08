<div class="maxxfooter maxx_clear">			
    <div class="footer">
        <div class="logofooter">
            <div class="menufooter maxx_clear">
                <?php 
                    if (has_nav_menu('footerone')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footerone', 
                            'container' => 'div',
                            'container_class' => 'footer_one',
                            'menu_class' => 'footer_menu', 
                            'menu_id' => 'one',
                            'fallback_cb' => false
                        ));
                    } 
                ?>
            </div>
            <div class="copyright">
                <?php echo '@DCAEDU create by Tahta'; ?>
            </div>
        </div>
        <!-- Script JavaScript tetap sama -->
    </div><!-- footer --> 
</div>
<?php 
    get_template_part('content/share');
    wp_footer(); 
?>
</body>
</html>