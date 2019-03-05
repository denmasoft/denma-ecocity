<?php
/**
 * @file
 * ecocity theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['header']: Items for Header Regions (Inner Pages Only).
 * - $page['content_top']: Items for Content Top Regions (Inner Pages Only).
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar (Right Side Only).
 * - $page['bottom']: Items for the Bottom region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<style>
  .enquisa{
    background: url("<?php print ($enquisa); ?>") center center no-repeat;
    display: block;
    height: 60px;
    width: 230px;
  }
  .enquisa:hover{
    background-image: url("<?php print("$enquisa_hover"); ?>");
  }
</style>
<div class="">
  <!-- socialbar Starts -->
  <!-- socialbar Ends -->

  <!-- Header Starts -->
  <div class="container" style="margin-bottom: 25px">
    <?php if ($logo): ?>
      <div class="row">
        <div id="" class="col-sm-1"></div>
        <!-- logo START -->
        <?php if ($logo): ?>
          <div class="col-sm-10">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          </div>
        <?php endif; ?>
        <!-- logo Ends -->
      </div>
    <?php endif; ?>
  </div>
  <div class="headertext">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="line" style=""></div>
      <div class="col-sm-10 headertextc">
        <p><?php print ($headertext); ?></p>
      </div>
    </div>
  </div>
  <hr style="border-color:transparent !important;margin-bottom: 60px;">
  <div class="container">
    <div class="col-sm-1"></div>
    <div class="col-sm-11">
      <div class="row row_txt">
        <div class="col-sm-6" style="overflow-wrap: break-word; font-family: geosanslightregular; text-align: justify;font-size: 20px;">
          <p><?php print ($text_one); ?></p>
        </div>
        <div class="col-sm-6" style="overflow-wrap: break-word; font-family: geosanslightregular; text-align: justify;font-size: 20px;">
          <p><?php print ($text_two); ?></p>
        </div>
      </div>
      <hr style="border-color:transparent !important;">
      <div class="row row_icons">
        <div class="col-sm-4">
          <div style="text-align: center;width: 100%;word-wrap: break-word;font-family: geosanslightregular;font-size: 20px;">
            <img src="<?php print ($icon_bioresiduos); ?>" style="display: block; margin: 0 auto;width: 100%;" />
            <p><?php print ($text_bioresiduos); ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div style="text-align: center;width: 100%;word-wrap: break-word;font-family: geosanslightregular;font-size: 20px;">
            <img src="<?php print ($icon_circular); ?>" style="display: block; margin: 0 auto;width: 90%;" />
            <p><?php print ($text_circular); ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div style="text-align: center;width: 100%;word-wrap: break-word;font-family: geosanslightregular;font-size: 20px;">
            <img src="<?php print ($icon_modelos); ?>" style="display: block; margin: 0 auto;width: 95%;" />
            <p><?php print ($text_modelos); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Ends -->

  <!-- Slider Starts -->
  <!-- Slider Ends -->
  <!--Three Column Blocks Starts -->
  <hr style="border-color:transparent !important;margin-bottom: 60px;">

  <div id="main" class="container">
    <div class="col-sm-1"></div>
    <div id="post-content" class="col-sm-8">
      <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div> <!-- /#main -->
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar" class="col-sm-3">
        <?php print render($page['sidebar_first']); ?>
      </div>  <!-- /#sidebar-first -->
    <?php endif; ?>
  </div>
  <div class="clear"></div>
  <hr style="border-color:transparent !important;margin-bottom: 60px;">
  <!--Footer context Start -->
  <div id="footer-context">

    <!--Footer Start -->
    <div id="footer-bottom">
      <div style="color:white;background-color: rgb(20, 184, 157); height: 85px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <div class="line" style=""></div>
          <div class="col-sm-8" style="margin-top: 15px; font-family: source_code_probold; line-height: 50px; font-size: 30px;">
            <p><?php print ($footertext); ?></p>
          </div>
        </div>
      </div>

    </div>
    <!--Footer Ends -->
  </div>
  <!--Footer context Ends -->
  <div class="clear"></div>
</div>
