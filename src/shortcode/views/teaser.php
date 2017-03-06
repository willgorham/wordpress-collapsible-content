
<div class="collapsible-content--container teaser">
  <div class="collapsible-content--visible">
    <span class="collapsible-content--icon <?php echo $attributes['closed_icon']; ?>" data-closed-icon="<?php echo $attributes['closed_icon']; ?>" data-opened-icon="<?php echo $attributes['opened_icon']; ?>"></span> <?php esc_html_e( $attributes['visible_message'] ); ?>
  </div>
  <div class="collapsible-content--hidden" style="display: none;"><?php echo $content; ?></div>
</div>
