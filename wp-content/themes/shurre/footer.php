<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>

        <footer>
            <div class="row">
                <div class="col s12 red lighten-1 white-text">                
                    <h5>
                        <?php bloginfo( 'name' ); ?>			
                    </h5>
                    <p>
                        <?php bloginfo( 'description' ); ?>
                    </p>
                </div>
                <div class="col s12 row red darken-3 white-text">
                    <div class="row">
                        <div class="col s6">
                            <p>	
                                <?php							
                                printf( esc_html__( '© Comparte todas tus recetas con todos tus amigos en la web', 'ShUrRe' ), 'SootoDigital', '2018');
                                Date('Y');//no logro hacer que funcione
                                ?>						
                            </p>
                        </div>
                        <div class="col s6 right">
                            <a href="<?php echo esc_url( __( 'https://www.nextu.com//', 'NextU' ) ); ?>">
                                <?php							
                                printf( esc_html__( '%s', 'NextU' ), 'https://www.nextu.com/' );
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    </div><!-- #page -->

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
