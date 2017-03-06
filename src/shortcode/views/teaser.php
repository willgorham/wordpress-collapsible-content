
<div class="teaser--container">
  <div class="teaser--visible-message" data-show-icon="<?php echo $attributes['show_icon']; ?>" data-hide-icon="<?php echo $attributes['hide_icon']; ?>">
    <span class="<?php echo $attributes['show_icon']; ?>"></span> <?php esc_html_e( $attributes['visible_message'] ); ?></div>
  <div class="teaser--hidden-content" style="display: none;"><?php echo $content; ?></div>
</div>
