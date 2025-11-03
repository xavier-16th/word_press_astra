<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/** CSS child dépend du parent */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        [ 'astra-theme-css' ],
        wp_get_theme()->get( 'Version' )
    );
}, 20 );
 
/** HEADER CUSTOMIZATION */
// Add custom header content
add_action( 'astra_header_markup_after', 'astra_child_header_banner' );

function astra_child_header_banner() {
    if ( is_front_page() ) { ?>
        <div class="custom-header-banner">
            <div class="ast-container">
                <p class="header-promo">� Nouveau album disponible - 20% de réduction sur tous les vinyles jusqu'au 30 novembre! 🎶</p>
            </div>
        </div>
    <?php }
}

//header contact info
add_action( 'astra_header_markup_before', 'astra_child_header_contact' );

function astra_child_header_contact() { ?>
    <div class="header-contact-bar">
        <div class="ast-container">
            <div class="contact-info">
                <span class="phone">🎧 01 23 45 67 89</span>
                <span class="email">🎵 music.fr</span>
                <span class="hours">⏰ Studio ouvert 24h/7j</span>
            </div>
        </div>
    </div>
<?php }

// Don Toliver main page showcase
add_action( 'astra_content_before', 'astra_child_don_toliver_showcase' );

function astra_child_don_toliver_showcase() {
    if ( is_front_page() ) { ?>
        <div class="don-toliver-showcase">
            <div class="ast-container">
                <div class="artist-hero-section">
                    <div class="artist-content">
                        <div class="artist-image-container">
                            <div class="artist-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/don-toliver.jpg" alt="Don Toliver" onerror="this.style.display='none'">
                                <div class="artist-icon">🎤</div>
                            </div>
                        </div>
                        <div class="artist-info">
                            <div class="artist-badge">🔥 FEATURED ARTIST</div>
                            <h2>Don Toliver</h2>
                            <p class="artist-genre">Hip-Hop • R&B • Trap</p>
                            <p class="artist-bio">
                                Découvrez l'univers unique de Don Toliver, l'une des étoiles montantes du rap et R&B contemporain. 
                                Connu pour ses mélodies accrocheuses et son style distinctif, il continue de redéfinir le son moderne.
                            </p>
                            <div class="artist-stats">
                                <div class="stat">
                                    <span class="number">45M+</span>
                                    <span class="label">Monthly Listeners</span>
                                </div>
                                <div class="stat">
                                    <span class="number">3</span>
                                    <span class="label">Albums</span>
                                </div>
                                <div class="stat">
                                    <span class="number">2.1B+</span>
                                    <span class="label">Total Streams</span>
                                </div>
                            </div>
                            <div class="artist-actions">
                                <a href="#" class="btn-listen">🎵 Listen Now</a>
                                <a href="#" class="btn-follow">📱 Follow</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Latest Track Section -->
                    <div class="latest-track">
                        
                        <div class="track-card">
                            <div class="track-cover">
                                <div class="track-icon">💿</div>
                            </div>
                            <div class="track-info">
                                <h4>"no pole" solo song </h4>
                                <p>From the album "lovesickness" </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}


add_action( 'wp', function () {
    // Supprime toutes les callbacks déjà ajoutées au hook astra_footer
    remove_all_actions( 'astra_footer' );

    // Ajoute TON footer amélioré
    add_action( 'astra_footer', 'astra_child_footer_markup' );
} );

function astra_child_footer_markup() { ?>
    <footer class="site-footer ast-container">
        <!-- Newsletter Section -->
        <div class="footer-newsletter">
            <h3>🎼 Restez dans le rythme</h3>
            <p>Abonnez-vous pour recevoir nos nouveaux morceaux, dates de concerts et actualités musicales</p>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" placeholder="Votre adresse email" required>
                <button type="submit">🎵 Rejoindre</button>
            </form>
        </div>

        <!-- Main Footer Content -->
        <div class="footer-grid">
            <div class="footer-col">
                <h4>� À propos du Studio</h4>
                <p>Studio d'enregistrement professionnel et label indépendant. Nous accompagnons les artistes dans leur création musicale depuis plus de 10 ans.</p>
                <div class="footer-address">
                    <p>🏠 123 Rue des Musiciens<br>Studio niveau -1<br>75011 Paris, France</p>
                </div>
                <div class="studio-hours">
                    <p><strong>🕐 Horaires studio:</strong><br>Lun-Dim: 9h-23h<br>Réservation 24h/24</p>
                </div>
            </div>
            <div class="footer-col">
                <h4>🎶 Navigation</h4>
                <ul>
                    <li><a href="<?php echo home_url('/studio'); ?>">🎙️ Studio d'enregistrement</a></li>
                    <li><a href="<?php echo home_url('/artistes'); ?>">👨‍🎤 Nos Artistes</a></li>
                    <li><a href="<?php echo home_url('/albums'); ?>">💿 Discographie</a></li>
                    <li><a href="<?php echo home_url('/concerts'); ?>">🎸 Concerts</a></li>
                    <li><a href="<?php echo home_url('/tarifs'); ?>">💰 Tarifs Studio</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">📞 Contact & Booking</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>🎵 Suivez notre musique</h4>
                <div class="social-links">
                    <a href="https://spotify.com" target="_blank" rel="noopener" title="Spotify">🎧 Spotify</a>
                    <a href="https://soundcloud.com" target="_blank" rel="noopener" title="SoundCloud">� SoundCloud</a>
                    <a href="https://youtube.com" target="_blank" rel="noopener" title="YouTube">� YouTube Music</a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" title="Instagram">� Instagram</a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" title="Facebook">� Facebook</a>
                </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-copyright">
                <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> Studio | 🎵 Tous droits réservés</p>
                <p class="small-text">SACEM • SPEDIDAM • Licence spectacles: 2-123456</p>
            </div>

        </div>
    </footer>
<?php }

