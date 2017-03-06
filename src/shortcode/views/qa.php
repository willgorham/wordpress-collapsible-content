
<dl class="qa--container">
  <dt class="qa--question" data-show-icon="<?php echo $attributes['show_icon']; ?>" data-hide-icon="<?php echo $attributes['hide_icon']; ?>">
    <span class="<?php echo $attributes['show_icon']; ?>"></span> <?php esc_html_e( $attributes['question'] ); ?></dt>
  <dd class="qa--answer" style="display: none;"><?php echo $content; ?></dd>
</dl>
