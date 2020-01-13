<?php

?>
<?php print render($page['header']); ?>

<div id="main"> 
  
  <!--TOP LOGO MENUS AND BANNER START-->
  
  <div id="top">
    <div class="logo-menu-banner">
      <div class="logo-main">
        <div class="logo"><a href="<?php print $front_page ?>"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" alt="<?php print $site_name; ?>" title="<?php print $site_name; ?>" /></a></div>
        <div class="right-panel">
          <?php if ($page['right-panel']): ?>
          <?php print render($page['right-panel']); ?>
          <?php endif; ?>
        </div>
        
        <!--Start menus-->
        
        <div class="menus">
          <?php if ($main_menu): ?>
          <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
          <?php endif; ?>
        </div>
        
        <!-- // End menus--> 
        
      </div>
      <div class="Banner"><img src="<?php print base_path() . path_to_theme(); ?>/images/banner.png" border="0" usemap="#Map"/> </div>
    </div>
  </div>
  
  <!-- // TOP LOGO MENUS AND BANNER END-->
  
  <div id="Body-main">
    <div class="content">
      <div class="content-text">
        <div class="index-contents"> <?php print render($title_prefix); ?>
          <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?> <?php print render($messages); ?>
          <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div>
          <?php endif; ?>
          <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
          <?php endif; ?>
          <?php print render($page['content']); ?> </div>
        <div class="Right">
          <?php if ($page['sidebar_first']): ?>
          <div id="sidebar"> <?php print render($page['sidebar_first']); ?> </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--START FOOTER-->

<div id="footer-main">
  <div class="footer">
    <div class="left-footer">
      <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
      <?php endif; ?>
    </div>
    <div class="right-footer">
      <?php if ($page['footer_right']): ?>
      <?php print render($page['footer_right']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- // END FOOTER-->