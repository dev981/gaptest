<?php

/**
 * @file
 * Contains \Drupal\languagefield\Plugin\Field\FieldFormatter\LanguageFormatter.
 */

namespace Drupal\languagefield\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\Plugin\Field\FieldFormatter\StringFormatter;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\Language;
use Drupal\languagefield\Plugin\Field\FieldType\LanguageItem;

/**
 * Plugin implementation of the 'language_field' formatter.
 *
 * @FieldFormatter(
 *   id = "languagefield_default",
 *   label = @Translation("Language"),
 *   field_types = {
 *     "language_field",
 *   }
 * )
 */
class LanguageFormatter extends StringFormatter {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    $settings = parent::defaultSettings();
    $settings['format'] = array('name' => 'name',);
    return $settings;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form = parent::settingsForm($form, $form_state);
    $form['format'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Display'),
      '#description' => t('Select the elements you want to show. The elements will be concatenated when showing the field.'),
      '#default_value' => $this->getSetting('format'),
      '#options' => LanguageItem::_settingsOptions('formatter'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();

    $settings = $this->getSettings()['format'];
    $options = LanguageItem::_settingsOptions('formatter');

    if (empty($settings)) {
      $summary[] = t('** Not set **');
    }
    else {
      foreach ($settings as $key => $value) {
        switch ($value) {
          case '0':
            // Option is not selected.
            break;
          default:
            $summary[] = isset($options[$value]) ? $options[$value] : '...';
            break;
        }
      }
    }
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function prepareView(array $entities_items) {
    // Todo: implement prepareView. (if necessary: replaces D7's hook_field_prepare_view())
/*
    D7: $languages = _languagefield_options($field['settings']['language_range'], $langcode);
    D8: $languages = LanguageItem::getPossibleValues(...);
    foreach ($entities as $id => $object) {
      foreach ($items[$id] as $delta => $item) {
        // Check if item value is set, otherwise continue to next item.
        if (!empty($item['value'])) {
          $items[$id][$delta] = $languages[$item['value']];
        }
      }
    }
 */
    return parent::prepareView($entities_items);
  }

  /**
   * {@inheritdoc}
   */
  protected function viewValue(FieldItemInterface $item) {
    $settings = $this->getSettings();

    $langcode = $item->value;

    // Do NOT use the languagemanager, since it only uses installed languages.
    // $language_manager = \Drupal::languageManager();
    // $language = $language_manager->getLanguage($langcode); // Does not work for e.g. Danish (da).
    $language = new Language(array('id' => $langcode));
    // Create the markup for this value.
    $markup = array();
/*
          if (!empty($settings['format']['icon']) && \Drupal::moduleHandler()->moduleExists('languageicons')) {
            // Add a language icon. We might better use languageicons_link_add().
            // @TODO: doesn't work for the Widget, even though hook_options_list says the <img>-tab is allowed.
            $variables = array(
              'language' => $language,  // TODO: what happens if no icon for this language code.
              'title' => $item->getName(), //['name'],
            );
            $markup[] = theme_languageicons_icon($variables);
          }
    */
    if (!empty($settings['format']['iso'])) {
      $markup[] = $langcode;
    }
    if (!empty($settings['format']['name'])) {
      $markup[] = t($language->getName());
    }
    if (!empty($settings['format']['name_native'])) {
      // @todo: Create feature request to add function to D8 core.
      $markup[] = (empty($settings['format']['name'])) ? $item->getNativeName() : '(' . $item->getNativeName() . ')';
    }

    if (empty($markup)) {
      $markup[] = t($language->getName());
    }
    else {
      $markup = implode(' ', $markup);
    }

    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    return [
//      '#language' => $language,
//      '#type' => 'inline_template',
//      '#template' => '{{ value|nl2br }}',
      '#context' => ['value' => $item->value],
//      '#theme' => 'languageicons_link_content',
      '#type' => 'processed_text',
      '#text' => $markup,
      '#format' => $item->format,
      '#langcode' => $langcode,
    ];
  }

}
