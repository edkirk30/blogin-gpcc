<div id="footer-widget">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <?php if ( is_active_sidebar('footer-widget-1') ) : dynamic_sidebar('footer-widget-1'); endif; ?>
      </div><!-- end of col -->
      <div class="col-md-3">
        <?php if ( is_active_sidebar('footer-widget-2') ) : dynamic_sidebar('footer-widget-2'); endif; ?>
      </div><!-- end of col -->
      <div class="col-md-3">
        <?php if ( is_active_sidebar('footer-widget-3') ) : dynamic_sidebar('footer-widget-3'); endif; ?>
      </div><!-- end of col -->
      <div class="col-md-3">
        <?php if ( is_active_sidebar('footer-widget-4') ) : dynamic_sidebar('footer-widget-4'); endif; ?>
      </div><!-- end of col -->
      
    </div><!-- end of row -->
  </div><!-- end of container -->
 </div><!-- end of footer widget -->