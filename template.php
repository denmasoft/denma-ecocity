<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 */

/**
 * Implements hook_html_head_alter().
 */
function ecocity_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8',
  );
}

/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function ecocity_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // Comment below line to hide current page to breadcrumb.
    $breadcrumb[] = drupal_get_title();
    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}

/**
 * Add javascript files for front-page jquery slideshow.
 */
if (drupal_is_front_page()) {
  drupal_add_js(drupal_get_path('theme', 'ecocity') . '/js/jquery.min.js');
  drupal_add_js(drupal_get_path('theme', 'ecocity') . '/js/bootstrap.min.js');
}

/**
 * Add Google Fonts.
 */
function ecocity_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans', array('type' => 'external'));
  drupal_add_css('http://fonts.googleapis.com/css?family=Montserrat', array('type' => 'external'));
  drupal_add_css(drupal_get_path('theme', 'ecocity') . '/css/responsive.css');
}

function ecocity_filter($string) {
  $filters = array('a', 'abbr', 'acronym', 'address', 'article', 'aside', 'b', 'bdi', 'bdo', 'big', 'blockquote', 'br', 'button', 'input', 'caption', 'cite', 'code', 'col', 'colgroup', 'command', 'dd', 'del', 'details', 'dfn', 'div', 'dl', 'dt', 'em', 'figcaption', 'figure', 'form', 'footer', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'header', 'hgroup', 'hr', 'i', 'iframe', 'img', 'ins', 'kbd', 'label', 'li', 'mark', 'menu', 'meter', 'nav', 'ol', 'output', 'p', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script', 'section', 'small', 'span', 'strong', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'textarea', 'tfoot', 'th', 'thead', 'time', 'tr', 'tt', 'u', 'ul', 'var', 'wbr');
  return filter_xss($string, $filters);
}

/**
 * Override or insert variables into the page template.
 */
function ecocity_preprocess_page(&$vars, $hook) {
  $vars['footer_copyright'] = theme_get_setting('footer_copyright');
  $vars['footer_developed'] = theme_get_setting('footer_developed');
  $vars['footer_developedby_url'] = ecocity_filter(theme_get_setting('footer_developedby_url', 'ecocity'));
  $vars['footer_developedby'] = ecocity_filter(theme_get_setting('footer_developedby', 'ecocity'));
  $vars['searchblock'] = module_invoke('search', 'block_view', 'form');
  if (module_exists('i18n_menu')) {
    $vars['main_menu_tree'] = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
  }
  else {
    $vars['main_menu_tree'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  }
  if (isset($vars['node'])) {

    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }
  // Frontpage variables.


  $vars['headertext'] = ecocity_filter(theme_get_setting('headertext', 'ecocity'));
  $vars['centertext'] = ecocity_filter(theme_get_setting('centertext', 'ecocity'));
  $vars['footertext'] = ecocity_filter(theme_get_setting('footertext', 'ecocity'));

  $vars['text_one'] = ecocity_filter(theme_get_setting('text_one', 'ecocity'));
  $vars['text_two'] = ecocity_filter(theme_get_setting('text_two', 'ecocity'));
  $vars['text_bioresiduos'] = ecocity_filter(theme_get_setting('text_bioresiduos', 'ecocity'));
  $vars['text_circular'] = ecocity_filter(theme_get_setting('text_circular', 'ecocity'));
  $vars['text_modelos'] = ecocity_filter(theme_get_setting('text_modelos', 'ecocity'));
  $vars['enquisa_text'] = ecocity_filter(theme_get_setting('enquisa_text', 'ecocity'));
  $vars['col1'] = ecocity_filter(theme_get_setting('colone', 'ecocity'));
  $vars['icon_circular'] = base_path() . drupal_get_path('theme', 'ecocity') . '/images/ecocity/icon_circular.png';
  $vars['icon_modelos'] = base_path() . drupal_get_path('theme', 'ecocity') . '/images/ecocity/icon_modelos.png';
  $vars['icon_bioresiduos'] = base_path() . drupal_get_path('theme', 'ecocity') . '/images/ecocity/icon_bioresiduos.png';
  $vars['enquisa'] = base_path() . drupal_get_path('theme', 'ecocity') . '/images/ecocity/enq.png';
  $vars['enquisa_hover'] = base_path() . drupal_get_path('theme', 'ecocity') . '/images/ecocity/enq_hover.png';

}
