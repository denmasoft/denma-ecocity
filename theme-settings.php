<?php
/**
 * @file
 * Theme setting callbacks for the ecocity theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function ecocity_form_system_theme_settings_alter(&$form, &$form_state) {


  $form['ecocity_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('ecocity Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['ecocity_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs', 'ecocity'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );

  $form['ecocity_settings']['Columns']['headertext'] = array(
    '#type' => 'textarea',
    '#title' => t('Header Text'),
    '#default_value' => theme_get_setting('headertext', 'ecocity'),
    '#description'   => t("Enter Header Text."),
  );
  $form['ecocity_settings']['Columns']['centertext'] = array(
    '#type' => 'textarea',
    '#title' => t('Center Text'),
    '#default_value' => theme_get_setting('centertext', 'ecocity'),
    '#description'   => t("Enter Center Text."),
  );
  $form['ecocity_settings']['Columns']['footertext'] = array(
    '#type' => 'textarea',
    '#title' => t('Footer Text'),
    '#default_value' => theme_get_setting('footertext', 'ecocity'),
    '#description'   => t("Enter Footer Text."),
  );


  $form['ecocity_settings']['Columns']['text_one'] = array(
    '#type' => 'textarea',
    '#title' => t('Text One Text'),
    '#default_value' => theme_get_setting('text_one', 'ecocity'),
    '#description'   => t("Enter Text One Text."),
  );

  $form['ecocity_settings']['Columns']['text_two'] = array(
    '#type' => 'textarea',
    '#title' => t('Text Two Text'),
    '#default_value' => theme_get_setting('text_two', 'ecocity'),
    '#description'   => t("Enter Text Two Text."),
  );


  $form['ecocity_settings']['Columns']['enquisa_text'] = array(
    '#type' => 'textarea',
    '#title' => t('Enquisa Text'),
    '#default_value' => theme_get_setting('enquisa_text', 'ecocity'),
    '#description'   => t("Enter Enquisa Text."),
  );


  $form['ecocity_settings']['Columns']['text_bioresiduos'] = array(
    '#type' => 'textarea',
    '#title' => t('Bioresiduos Text'),
    '#default_value' => theme_get_setting('text_bioresiduos', 'ecocity'),
    '#description'   => t("Enter Bioresiduos Text."),
  );

  $form['ecocity_settings']['Columns']['text_circular'] = array(
    '#type' => 'textarea',
    '#title' => t('Circular Text'),
    '#default_value' => theme_get_setting('text_circular', 'ecocity'),
    '#description'   => t("Enter Circular Text."),
  );

  $form['ecocity_settings']['Columns']['text_modelos'] = array(
    '#type' => 'textarea',
    '#title' => t('Modelos Text'),
    '#default_value' => theme_get_setting('text_modelos', 'ecocity'),
    '#description'   => t("Enter Modelos Text."),
  );

  $form['ecocity_settings']['Columns']['colone'] = array(
    '#type' => 'textarea',
    '#title' => t('First Column info'),
    '#default_value' => theme_get_setting('colone', 'ecocity'),
    '#description'   => t("Enter info for First Column."),
  );
  $form['ecocity_settings']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['ecocity_settings']['footer']['footer_copyright'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show copyright text in footer'),
    '#default_value' => theme_get_setting('footer_copyright', 'ecocity'),
    '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
  );
  $form['ecocity_settings']['footer']['footer_developed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show theme developed by in footer'),
    '#default_value' => theme_get_setting('footer_developed', 'ecocity'),
    '#description'   => t("Check this option to show design & developed by text in footer. Uncheck to hide."),
  );
  $form['ecocity_settings']['footer']['footer_developedby'] = array(
    '#type' => 'textfield',
    '#title' => t('Add name developed by in footer'),
    '#default_value' => theme_get_setting('footer_developedby', 'ecocity'),
    '#description'   => t("Add name developed by in footer"),
  );
  $form['ecocity_settings']['footer']['footer_developedby_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Add link to developed by in footer'),
    '#default_value' => theme_get_setting('footer_developedby_url', 'ecocity'),
    '#description'   => t("Add url developed by in footer. example:: http://www.xyz.com"),
  );

}
