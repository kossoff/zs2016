<div class="wrap">
  <!--.page -->
  <div role="document" class="page">

    <!--.l-header -->
    <header role="banner">
      <section class="top-black-menu">
        <div class="site-name left">
          <h1>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
              <i class="fa fa-camera-retro"></i>&nbsp;Павел Немзоров
            </a>
          </h1>
        </div>
        <div class="menu-center">
          <?php
            print theme('links__system_main_menu',
              array(
                'links' => $main_menu,
                'attributes' => array(
                  'id' => 'main-menu',
                  'class' => array('links', 'inline', 'show-for-large-up'))));
          ?>
        </div>
        <div class="phone right show-for-large-up">
          <a href="tel:+79214031197">
            +7&nbsp;(921)&nbsp;403-11-97
          </a>
        </div>
      </section>

    </header>
    <!--/.l-header -->

    <!--.l-main -->
    <main role="main" class="row l-main">
      <?php if (!empty($page['featured'])): ?>
        <!--.l-featured -->
        <section class="l-featured row">
          <div class="columns">
            <?php print render($page['featured']); ?>
          </div>
        </section>
        <!--/.l-featured -->
      <?php endif; ?>

      <?php if ($messages && !$zurb_foundation_messages_modal): ?>
        <!--.l-messages -->
        <section class="l-messages row">
          <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
          </div>
        </section>
        <!--/.l-messages -->
      <?php endif; ?>

      <?php if (!empty($page['help'])): ?>
        <!--.l-help -->
        <section class="l-help row">
          <div class="columns">
            <?php print render($page['help']); ?>
          </div>
        </section>
        <!--/.l-help -->
      <?php endif; ?>

      <!-- .l-main region -->
      <div class="<?php print $main_grid; ?> main columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <?php if ($title): ?>
          <?php print render($title_prefix); ?>
          <h1 id="page-title" class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.l-main region -->

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
      <!--.footer-columns -->
      <section class="row l-footer-columns">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
          <div class="footer-first medium-3 columns">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
          <div class="footer-second medium-3 columns">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_thirdcolumn'])): ?>
          <div class="footer-third medium-3 columns">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_fourthcolumn'])): ?>
          <div class="footer-fourth medium-3 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php endif; ?>
      </section>
      <!--/.footer-columns-->
    <?php endif; ?>


    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
  </div>
  <!--/.page -->
</div>
<!--/.wrap -->

<!--.l-footer -->
<footer role="contentinfo">
  <div class="row  text-center">
    <div class="large-3 small-6 columns">
      <a href="tel:+79214031197">
        <i class="fa fa-phone fa-3x"></i>
        <br />+7&nbsp;(921)&nbsp;403-11-97
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="mailto:p333@mail.ru">
        <i class="fa fa-at fa-3x"></i>
        <br />p333@mail.ru
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="https://vk.com/pavelphoto">
        <i class="fa fa-vk fa-3x"></i>
        <br />vk.com/pavelphoto
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="https://www.facebook.com/photopavel">
        <i class="fa fa-facebook fa-3x"></i>
        <br />fb.com/photopavel
      </a>
    </div>
  </div>
  <hr />
  <div class="row">
    <div class="large-9 small-12 columns">
      <div class="copyright">
        <i class="fa fa-camera-retro"></i>&nbsp;Павел Немзоров
        <br />&copy; 2011&nbsp;&mdash; <?php print date('Y'); ?>. Все права защищены.
        <br />Использование материлов сайта без согласия автора запрещено.
      </div>
    </div>
    <div class="large-3 small-12 columns">
      <div class="madeby right text-right">
        Разработка сайта<br /><a href="https://kossoff.ru/"><i class="fa fa-rocket"></i> Kossoff.ru</a>
      </div>
    </div>
  </div>
</footer>
<!--/.l-footer -->
