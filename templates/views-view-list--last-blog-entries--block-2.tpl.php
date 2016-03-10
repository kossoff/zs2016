<?php drupal_add_js('https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', 'external'); ?>

<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <ul class="grid-masonry inline-list" data-masonry='{ "itemSelector": ".grid-masonry-item", "columnWidth": 370, "gutter": 0 }'>
    <?php foreach ($rows as $id => $row): ?>
      <li class="grid-masonry-item"><div><?php print $row; ?></div></li>
    <?php endforeach; ?>
  </ul>
<?php print $wrapper_suffix; ?>
