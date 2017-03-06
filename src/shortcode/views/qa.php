
<dl class="collapsible-content--container qa">
  <dt class="collapsible-content--visible">
    <span class="collapsible-content--icon <?php echo $attributes['closed_icon']; ?>" data-closed-icon="<?php echo $attributes['closed_icon']; ?>" data-opened-icon="<?php echo $attributes['opened_icon']; ?>"></span> <?php esc_html_e( $attributes['question'] ); ?>
  </dt>
  <dd class="collapsible-content--hidden" style="display: none;"><?php echo $content; ?></dd>
</dl>
