<?php

/**
 * @file
 * Contains \Drupal\nodeapi\Controller\nodeapiController.
 */

namespace Drupal\nodeapi\Controller;



use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


/**
 * Controller routines for custom api routes.
 */


class nodeapiController  {
    public function gdrive()
    {
        
         error_reporting(E_ALL);
         ini_set('display_errors', 1);
          
         module_load_include('inc','nodeapi','nodegapi');
        
         $code=$_GET['code'];

         
           $folderid='0B6BzhFrjrlMwUVJEdm41ckd0R2M';
           $v=authenticateuser($code,$folderid);
           print $v;
           die;
        
       
    }
    
    
     
    
}