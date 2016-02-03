<?php

/**
 * @file
 * Contains \Drupal\custom_api\Controller\custom_apiController.
 */

namespace Drupal\custom_api\Controller;

use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Controller routines for custom api routes.
 */
class custom_apiController {

    /**
     * Constructs a page with descriptive content.
     *
     */
    public function description() {
        global $base_url;
              $Equation='';
              $Taxonomy = trim($_POST['state']);
              if($Taxonomy!='')
              {
                  $Equation .='AND';
                  if(strpos($Taxonomy,',') !== false) 
                  {
                      $ExplodeTags=explode(',',$Taxonomy);
                      $TotalCounted=count($ExplodeTags);
                      $k=0;
                      foreach($ExplodeTags as $Tags)
                      {
                          $k++;
                          $Equation .=" taxo.name='".$Tags."' ";                        
                          if($TotalCounted > $k)
                          {
                             $Equation .="OR";  
                          }
                      }
                  }
                  else
                  {
                    $Equation .=" taxo.name='".$Taxonomy."' ";  
                  }
              }
              $CurrentNid = trim($_POST['nid']);
              $SelectedLanguage = trim($_POST['SelectedLanguage']);

              $StateResult = db_query("SELECT relate.entity_id FROM node__field_region as relate JOIN taxonomy_term_field_data as taxo ON relate.field_region_target_id=taxo.tid where taxo.langcode='$SelectedLanguage' AND relate.entity_id!=$CurrentNid $Equation");


              $NodeItems = array();
              foreach ($StateResult as $items) 
                 {
                  $NodeItems[$items->entity_id]++;
                 }    
              arsort($NodeItems);
              $NodeHtml='';
              $array=array();
              if(!empty($NodeItems))
              {
                  unset($NodeItems[$CurrentNid]);
                  foreach($NodeItems as $key => $EachItem)
                  {
                      $LoadNode = node_load($key);
                      $Title = $LoadNode->title->value;
                      $SubTitle = $LoadNode->field_subtitle->value;
                      $Image=isset($LoadNode->field_thumbnail->entity->uri->value)?file_create_url($LoadNode->field_thumbnail->entity->uri->value):'';  
                      if($Image=='')
                      {
                          $Image=$base_url.'/themes/custom/gapminder/images/Flag_-_Unknown.png';
                      }
                      $link = $base_url.'/node/'.$key;                                    
                      $array[]=array('title'=>$Title,'href'=>$link,'image_url'=>$Image,'subtitle'=>$SubTitle);
                  }
              }
              else
              {
                   $array[]=array('result'=>'failure');
              }
              $Json_encode=json_encode($array);
              echo $Json_encode;
              exit();
    }
  
    /**
     * Implements "google custom search" results on page
    **/
    public function search() {
        global $base_url;
		$CurrentLanguage=\Drupal::languageManager()->getCurrentLanguage()->getId();
        if($CurrentLanguage=="fa")
        {
            
             $resultfor=mb_convert_encoding('نتیجه برای  ', 'HTML-ENTITIES', "UTF-8");
            
        }
		else if($CurrentLanguage=="ar")
        {
            
             $resultfor=mb_convert_encoding('نتائج ', 'HTML-ENTITIES', "UTF-8");
           
        }
		else if($CurrentLanguage=="ku")
        {
            
             $resultfor=mb_convert_encoding('ريزەلتس فۆر ', 'HTML-ENTITIES', "UTF-8");
           
        }
		else if($CurrentLanguage=="de")
        {
            
             $resultfor=mb_convert_encoding('Ergebnisse für ', 'HTML-ENTITIES', "UTF-8");
           
        }
		else if($CurrentLanguage=="pt-br")
        {
            
             $resultfor=mb_convert_encoding('Resultados para ', 'HTML-ENTITIES', "UTF-8");
           
        }
		else if($CurrentLanguage=="sv")
        {
            
             $resultfor=mb_convert_encoding('resultat för ', 'HTML-ENTITIES', "UTF-8");
           
        }
        else if($CurrentLanguage=="nl")
        {
            
             $resultfor=mb_convert_encoding('resultaten voor ', 'HTML-ENTITIES', "UTF-8");
           
        }
		 else if($CurrentLanguage=="fi")
        {
            
             $resultfor=mb_convert_encoding('tulokset ', 'HTML-ENTITIES', "UTF-8");
           
        }
        else {
            $resultfor='Results for ';
        }
         if($CurrentLanguage!="en")
        {
            $language= "/".$CurrentLanguage;
        }
        $TopLine='';
       if(isset($_REQUEST['q']))
       {
           $TopLine="<div class='google_custom_results'><gcse:searchbox-only resultsUrl='".$base_url.$language."/gsearch' queryParameterName='q' gname='gsearch'></gcse:searchbox-only></div><div class='search-results-title'>".$resultfor .$_REQUEST['q']."</div>";
       }
       $SearchResult=$TopLine."<script>
                  (function() {
                    var cx = '015573355838489954495:y2zdqy3t_mw';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                    options[google.search.Search.RESTRICT_EXTENDED_ARGS] = {
  'filter': '0'
};
var customSearchControl = new google.search.CustomSearchControl(id, options);
                  })
                </script>
             <div class='google-search-results'><gcse:searchresults-only lr='lang_'".$CurrentLanguage."></gcse:searchresults-only></div>"; 
      return array(
        '#markup' => $SearchResult,
      );
    }  
  
    /**
     * Retrieves list of all menu items on page '/translatemenu' for role 'translator'
     */
    public function translate() 
      {  
        global $base_url;
        $langcode=\Drupal::languageManager()->getCurrentLanguage()->getId();
        $result = db_select('menu_link_content_data', 'menu')
                  ->fields('menu',array('id','title'))
                  ->condition('langcode',$langcode,'=')                       
                  ->execute()
                  ->fetchAll();     
          if(!empty($result))
          {
              $NodeHtml .="<div class='heading-translate'>Menu links</div>";
              $NodeHtml .="<div class='menu-links'>";
              foreach ($result as $MenuItem) 
                 {
                          $Title = $MenuItem->title;
                          $Id = $MenuItem->id;
                          $link = $base_url.'/admin/structure/menu/item/'.$Id.'/edit/translations';
                          $NodeHtml .= "<div class='per-row'>";
                          $NodeHtml .= "<span class='col-title'>$Title</span><span class='col-trans'><a href='".$link."'>Translate</a></span>";
                          $NodeHtml .= "</div>";
                 }    
              $NodeHtml .="</div>";   
          }        
          return array(
            '#markup' => $NodeHtml,
          );
      }
      
    /**
     * Retrieves list of all menu items on page '/translatetaxo' for role 'translator'
     */
    public function translatetaxonomy() 
        {  
          global $base_url;
          $langcode=\Drupal::languageManager()->getCurrentLanguage()->getId();         
            $query = db_select('taxonomy_term_field_data', 'taxo');
            $query->join('taxonomy_term_data', 'term', 'taxo.tid = term.tid');
            $query->fields('taxo',array('tid','name'))
                  ->condition('taxo.langcode',$langcode,'=') 
                  ->condition('term.vid','headers','=');
            $result = $query->execute()->fetchAll();


            if(!empty($result))
            {
                $NodeHtml .="<div class='heading-translate'>Taxonomy Terms</div>";
                $NodeHtml .="<div class='menu-links'>";
                foreach ($result as $MenuItem) 
                   {
                            $Title = $MenuItem->name;
                            $Id = $MenuItem->tid;
                            $link = $base_url.'/taxonomy/term/'.$Id.'/translations';
                            $NodeHtml .= "<div class='per-row'>";
                            $NodeHtml .= "<span class='col-title'>$Title</span><span class='col-trans'><a href='".$link."'>Translate</a></span>";
                            $NodeHtml .= "</div>";
                   }    
                $NodeHtml .="</div>";   
            }        

            return array(
              '#markup' => $NodeHtml,
            );
        }         
    
    /**
     * Retrieves list of all menu items on page '/translateblock' for role 'translator'
     */    
    public function translateblock() 
        {  
          global $base_url;
          $langcode=\Drupal::languageManager()->getCurrentLanguage()->getId();
          $result = db_select('block_content__body', 'block')
                    ->fields('block',array('entity_id','body_value'))
                    ->condition('langcode',$langcode,'=')                       
                    ->execute()
                    ->fetchAll();     
            if(!empty($result))
            {
                $NodeHtml .="<div class='heading-translate'>Blocks</div>";
                $NodeHtml .="<div class='menu-links'>";
                foreach ($result as $MenuItem) 
                   {
                            $Title = $MenuItem->body_value;
                            $Id = $MenuItem->entity_id;
                            $link = $base_url.'/block/'.$Id.'/translations';
                            $NodeHtml .= "<div class='per-row blocks'>";
                            $NodeHtml .= "<span class='col-title'>$Title</span><span class='col-trans'><a href='".$link."'>Translate</a></span>";
                            $NodeHtml .= "</div>";
                   }    
                $NodeHtml .="</div>";   
            }        
            return array(
              '#markup' => $NodeHtml,
            );
        }

  public function adminloginuser()
        {
             
            return array(
            'form'=> \Drupal::formBuilder()->getForm('Drupal\user\Form\UserLoginForm')
           );
           
        }		
    }