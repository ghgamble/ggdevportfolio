<?php // Skip link placed early in the body ?>
<a href="#content" class="skip-to-content" aria-label="Skip to content">
  <span class="screen-reader-text">Skip to content</span>
  <span class="skip-arrow" aria-hidden="true">
    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M18 15l-6-6-6 6"/>
    </svg>
  </span>
</a>

<footer style="background-color: <?php echo esc_attr(get_theme_mod('ggdevportfolio_footer_bg', '#282b35')); ?>; color: #fff;">
  <div class="o-container footer-inner">
    <div class="footer-social">
      <div class="footer-icons">
        <?php if (is_active_sidebar('footer-social-info')) : ?>
          <?php dynamic_sidebar('footer-social-info'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Contact Form 7 Google Ads Conversion Tracking with Debug -->
<script>
document.addEventListener('wpcf7mailsent', function(event) {
  console.log('✅ CF7 wpcf7mailsent event detected:', event);

  // Check if it's the correct form ID
  if (event.detail.contactFormId == 46) {
    console.log('🎯 Correct form ID detected (46). Preparing to send Google Ads conversion...');

    // Check if gtag is loaded
    if (typeof gtag === 'function') {
      gtag('event', 'conversion', {
        'send_to': 'AW-17383327544/UxoMCK3Xz_UaELiOguFA'
      });
      console.log('📤 Google Ads conversion event sent.');
    } else {
      console.error('❌ gtag() is not defined. Check if the Google tag is loading in <head>.');
    }
  } else {
    console.warn('⚠️ Not the tracked form. Conversion will not be sent.');
  }
}, false);
</script>

<!-- Google Ads Conversion Tracking Snippet from Setup -->
<script>
window.addEventListener('load', function() {
  console.log('📌 Google Ads global conversion snippet triggered.');
  if (typeof gtag === 'function') {
    gtag('event', 'conversion', {
      'send_to': 'AW-17383327544/UxoMCK3Xz_UaELiOguFA'
    });
    console.log('📤 Google Ads pageview conversion event sent.');
  } else {
    console.error('❌ gtag() is not defined for pageview snippet.');
  }
});
</script>

</body>
</html>
