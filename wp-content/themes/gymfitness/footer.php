    <footer class="site-footer contenedor">
        <?php wp_footer();?>
        <?php
            $args=array(
                'theme_location' => 'menu-principal',
                'container'=>'nav',
                'menu_class'=>'menu-principal'
            );
            wp_nav_menu( ($args));  
        ?>
        <p class="copyright">Todos los derechos reservados <?php echo get_bloginfo('name') . " ".date('Y');?> </p>
    </footer>
    </body>
</html>