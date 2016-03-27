<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <?php $path_to_theme = path_to_theme(); ?>
  <link rel="apple-touch-icon" sizes="57x57" href="/<?php print $path_to_theme; ?>/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/<?php print $path_to_theme; ?>/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/<?php print $path_to_theme; ?>/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/<?php print $path_to_theme; ?>/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/<?php print $path_to_theme; ?>/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/<?php print $path_to_theme; ?>/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/<?php print $path_to_theme; ?>/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/<?php print $path_to_theme; ?>/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/<?php print $path_to_theme; ?>/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/<?php print $path_to_theme; ?>/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/<?php print $path_to_theme; ?>/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/<?php print $path_to_theme; ?>/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/<?php print $path_to_theme; ?>/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/<?php print $path_to_theme; ?>/manifest.json">
  <link rel="mask-icon" href="/<?php print $path_to_theme; ?>/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="apple-mobile-web-app-title" content="Zaplay Studio">
  <meta name="application-name" content="Zaplay Studio">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/<?php print $path_to_theme; ?>/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>

  <link href='https://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <?php print $scripts; ?>
  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print _zurb_foundation_add_reveals(); ?>
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
</body>
</html>
