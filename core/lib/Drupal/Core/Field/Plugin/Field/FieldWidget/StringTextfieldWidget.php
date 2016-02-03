<?php

/**
 * @file
 * Contains \Drupal\Core\Field\Plugin\Field\FieldWidget\StringTextfieldWidget.
 */

namespace Drupal\Core\Field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Unicode;
/**
 * Plugin implementation of the 'string_textfield' widget.
 *
 * @FieldWidget(
 *   id = "string_textfield",
 *   label = @Translation("Textfield"),
 *   field_types = {
 *     "string"
 *   }
 * )
 */
class StringTextfieldWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return array(
      'size' => 60,
      'placeholder' => '',
    ) + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $element['size'] = array(
      '#type' => 'number',
      '#title' => t('Size of textfield'),
      '#default_value' => $this->getSetting('size'),
      '#required' => TRUE,
      '#min' => 1,
    );
    $element['placeholder'] = array(
      '#type' => 'textfield',
      '#title' => t('Placeholder'),
      '#default_value' => $this->getSetting('placeholder'),
      '#description' => t('Text that will be shown inside the field until a value is entered. This hint is usually a sample value or a brief description of the expected format.'),
    );
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = array();

    $summary[] = t('Textfield size: !size', array('!size' => $this->getSetting('size')));
    $placeholder = $this->getSetting('placeholder');
    if (!empty($placeholder)) {
      $summary[] = t('Placeholder: @placeholder', array('@placeholder' => $placeholder));
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $OriginalValue='';
    if (($node = \Drupal::routeMatch()->getParameter('node')) && $node instanceof \Drupal\node\NodeInterface)
    {
        $FiledsView=$items->view();
        $LangCode=$items->getLangcode();   
        $FieldName=$FiledsView['#field_name'];
        $node=(array)$node;
        $arrayValues=array_values($node);
        if(isset($arrayValues[0]['langcode']['x-default']) && ($arrayValues[0]['langcode']['x-default']!=$LangCode))
        {
              if($FieldName!='title')
              {
                if(isset($arrayValues[0][$FieldName]['x-default'][0]['value']))
                {
                    $OriginalValue =$arrayValues[0][$FieldName]['x-default'][0]['value'];
                }
              }
              else
              {
                  if(isset($arrayValues[0][$FieldName]['x-default']))
                  {
                    $OriginalValue =$arrayValues[0][$FieldName]['x-default'];
                  }
              }  
                $Title=$OriginalValue;
                $OriginalValue= Unicode::truncate($OriginalValue,200, TRUE );              
                $OriginalValue ='<div class="original_text" title="'.$Title.'"><span class="original">ORIGINAL: </span>'.$OriginalValue.'</div>';
        }
    }          
    $element['value'] = $element + array(
      '#type' => 'textfield',
      '#default_value' => isset($items[$delta]->value) ? $items[$delta]->value : NULL,
      '#size' => $this->getSetting('size'),
      '#placeholder' => $this->getSetting('placeholder'),
      '#maxlength' => $this->getFieldSetting('max_length'),
      '#attributes' => array('class' => array('text-full')),
      '#suffix'=>$OriginalValue         
    );

    return $element;
  }

}
