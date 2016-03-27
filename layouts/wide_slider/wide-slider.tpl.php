<div class="wide">
  <?php print $content['slider']; ?>
</div>
<div class="row" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <div class="large-12 columns">
    <?php print $content['middle']; ?>
  </div>
</div>