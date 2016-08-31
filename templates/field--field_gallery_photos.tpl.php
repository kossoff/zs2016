<?php drupal_add_js('https://unpkg.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', 'external'); ?>

<ul class="field-gallery-photos grid-masonry inline-list clearing-thumbs" data-clearing data-masonry='{ "itemSelector": ".grid-masonry-item", "columnWidth": 370, "gutter": 0 }'>
  <?php foreach ($items as $delta => $item): ?>
    <li class="grid-masonry-item"><?php print render($item); ?></li>
  <?php endforeach; ?>
</ul>
