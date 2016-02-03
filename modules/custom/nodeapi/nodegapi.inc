<?php 

 module_load_include('php','nodeapi','googleclient/src/Google/Client');
 module_load_include('php','nodeapi','googleclient/src/Google/Service/Oauth2');
 
 
/** 
* Lets first get an authorization URL to our client, it will forward the client to Google's Concent window
* @param String $emailAddress
* @param String $state
* @return String URL to Google Concent screen
*/
function getAuthorizationUrl($emailAddress, $state) {
    global $base_url;
    $CLIENT_ID = "508786473270-m664alovgmads7r6ct3r230lelstukq8.apps.googleusercontent.com";
    $CLIENT_SECRET = "J9OzHJNytJTATZh__QioSaZs";
    $REDIRECT_URI = $base_url."/gdriveapi";
    $SCOPES = array(
    'https://www.googleapis.com/auth/drive',
    'https://www.googleapis.com/auth/plus.me', 
    'https://www.googleapis.com/auth/userinfo.email',
    'https://www.googleapis.com/auth/userinfo.profile',
    "https://www.googleapis.com/auth/drive.appfolder",
    'https://www.googleapis.com/auth/drive.file',
    'https://www.googleapis.com/auth/drive.appdata',
    'https://www.googleapis.com/auth/drive.photos.readonly',
    'https://www.googleapis.com/auth/drive.scripts',
    'https://www.googleapis.com/auth/admin.directory.user',
   );
	$client = new Google_Client();

	$client->setClientId($CLIENT_ID);
	$client->setRedirectUri($REDIRECT_URI);
	$client->setAccessType('offline');
	$client->setApprovalPrompt('auto');
	$client->setState($state);
	$client->setScopes($SCOPES);
	$tmpUrl = parse_url($client->createAuthUrl());
	$query = explode('&', $tmpUrl['query']);
	$query[] = 'user_id=' . urlencode($emailAddress);
	
	return
	$tmpUrl['scheme'] . '://' . $tmpUrl['host'] .
	$tmpUrl['path'] . '?' . implode('&', $query);
}

/**
 * Exchange an authorization code for OAuth 2.0 credentials.
 *
 * @param String $authorizationCode Authorization code to exchange for OAuth 2.0
 *                                  credentials.
 * @return String Json representation of the OAuth 2.0 credentials.
 * @throws An error occurred. And prints the error message
 */
function exchangeCode($authorizationCode) {
    global $base_url;
	try {
		$CLIENT_ID = "508786473270-m664alovgmads7r6ct3r230lelstukq8.apps.googleusercontent.com";
    $CLIENT_SECRET = "J9OzHJNytJTATZh__QioSaZs";
    $REDIRECT_URI = $base_url."/gdriveapi";
    $SCOPES = array(
    'https://www.googleapis.com/auth/drive',
    'https://www.googleapis.com/auth/plus.me', 
    'https://www.googleapis.com/auth/userinfo.email',
    'https://www.googleapis.com/auth/userinfo.profile',
    "https://www.googleapis.com/auth/drive.appfolder",
    'https://www.googleapis.com/auth/drive.file',
    'https://www.googleapis.com/auth/drive.appdata',
    'https://www.googleapis.com/auth/drive.photos.readonly',
    'https://www.googleapis.com/auth/drive.scripts',
    'https://www.googleapis.com/auth/admin.directory.user',
   );
		$client = new Google_Client();

		$client->setClientId($CLIENT_ID);
		$client->setClientSecret($CLIENT_SECRET);
		$client->setRedirectUri($REDIRECT_URI);
                return $client->authenticate($authorizationCode);
               
	} catch (Exception $e) {
            
		print 'An error occurred: ' . $e->getMessage();
            
	}
	
}




/***
 * authenticate user
 */
function authenticateuser($code,$foldid)
{
    global $base_url;
   
   $cr=exchangeCode($code);
    
    $CLIENT_ID = "508786473270-m664alovgmads7r6ct3r230lelstukq8.apps.googleusercontent.com";
    $CLIENT_SECRET = "J9OzHJNytJTATZh__QioSaZs";
    $REDIRECT_URI = $base_url."/gdriveapi";
    $SCOPES = array(
    'https://www.googleapis.com/auth/drive',
    'https://www.googleapis.com/auth/plus.me', 
    'https://www.googleapis.com/auth/userinfo.email',
    'https://www.googleapis.com/auth/userinfo.profile',
    "https://www.googleapis.com/auth/drive.appfolder",
    'https://www.googleapis.com/auth/drive.file',
    'https://www.googleapis.com/auth/drive.appdata',
    'https://www.googleapis.com/auth/drive.photos.readonly',
    'https://www.googleapis.com/auth/drive.scripts',
    'https://www.googleapis.com/auth/admin.directory.user',
   );
    $client = new Google_Client();
    $client->setClientId($CLIENT_ID);
    $client->setClientSecret($CLIENT_SECRET);
    $client->setRedirectUri($REDIRECT_URI);
    $client->setScopes($SCOPES);
    $client->setAccessToken($cr);
    $srve = new Google_Service_Drive($client);
    printFilesInFolder($srve,$foldid,$client);

   
}

/***
 * print children folderid
 */

function printFilesInFolder($service, $folderId,$apiClient) {
  $pageToken = NULL;
  
  
  do {
    try {
      $parameters = array();
      if ($pageToken) {
        $parameters['pageToken'] = $pageToken;
        
      }
        $userinfoall= getUserInfo($apiClient);
        $useremail= $userinfoall->getEmail();
        $languageid=$_SESSION['language_id'];
        $engfileid= $_SESSION['fileid'];
        $nodeid = $_SESSION['nodeid'];
     
        $printper = printPermissionIdForEmail($service, $useremail);
       
    try
     {
          $service->permissions->get($engfileid, $printper);
        
         $children = $service->children->listChildren($folderId, $parameters);
         
     
       $titlearray=array();
        foreach ($children->getItems() as $child) 
        {
        
          $childrenid=$child->getId();
          $filetitle=$service->files->get($childrenid);
          $title=$filetitle->getTitle();
          $titlearray[$title]=$childrenid;
        
        }
      
        if(array_key_exists($languageid,$titlearray))
        {
            $titlevalue = $titlearray[$languageid];
            $childrenfiles=$service->children->listChildren($titlevalue, $parameters);
            
            $subfileid=array();
          
            foreach ($childrenfiles->getItems() as $subchild) 
             {
                 $childfileid=$subchild->getId();
                 $subfileid[]=$childfileid;
             }
             if(!in_array($engfileid,$subfileid))
             {
                 
                
                        $copyfiles = copyFile($service,$titlevalue,$engfileid);
                        $copylink= $copyfiles->alternateLink;
                       
                        $explodecopylink=explode('/',$copylink);
                        $_SESSION['newfileid']=$explodecopylink[5];
                        insertPermission($service, $_SESSION['newfileid']);
                         
                        $node = \Drupal\node\Entity\Node::load($nodeid);
                      
                         $var=$_SESSION['url'];
                        if(preg_match("/add/", $var))
                        {
                            $engtitle=$node->getTitle();
                           $subtitle=$node->field_subtitle->value;
                          $node_body=$node->body->value;
                         $mainimage = $node->field_main_image->entity->fid->value;
                         $thmbnailimage=$node->field_thumbnail->entity->fid->value;
                         $videourl=$node->field_video_url->value;
                        $nodetype=$node->getType();
                        $doc = new DOMDocument();
                        $doc->encoding = 'utf-8';
                        $loadhtml=$doc->loadHTML(mb_convert_encoding($node_body, 'HTML-ENTITIES', 'UTF-8'));
                        $xpath = new DOMXPath($doc);
                        $src = $xpath->evaluate("string(//iframe/@src)");
                        $srctarget=$xpath->evaluate("/html/body//iframe");
                        $srcexplode=explode("/",$src);
                        $varnew= str_replace($srcexplode[5],$_SESSION['newfileid'],$src);
                        for ($i = 0; $i < $srctarget->length; $i++) 
                        {
                            $href = $srctarget->item($i);
                            $url = $href->getAttribute('src');
                            $href->removeAttribute('src');
                            $href->setAttribute("src", $varnew);
                        }
                        $hreflink=$xpath->evaluate("/html/body//a");
                        for ($i = 0; $i < $hreflink->length; $i++) 
                        {
                            $hrefsrc = $hreflink->item($i);
                            $url = $hrefsrc->getAttribute('href');
                            $urlexplode=explode('/',$url);
                            $endexplode=end($urlexplode);
                            if(($endexplode=="ppt") || ($endexplode=="pdf"))
                            {
                             $varnewsrc= str_replace($urlexplode[5],$_SESSION['newfileid'],$url);
                             $hrefsrc->removeAttribute('href');
                             $hrefsrc->setAttribute("href", $varnewsrc);
                            }
                            
                        }
                        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                        $html.= $doc->saveHTML();
                       
                        
                        if($nodetype=="test_questions")
                        {
                                $node_es = $node->getTranslation($languageid);
                       
                        $node_getid=$node_es->id();
                        $node_es->setTitle($engtitle);
                        $node_es->body->value = $html;
                        $node_es->body->format = 'basic_html';
                         $node_es->field_subtitle->value = $subtitle;
                          $node_es->field_thumbnail->setValue([
                          'target_id' => $thmbnailimage,
                           ]);
                            $node_es->field_main_image->setValue([
                            'target_id' => $mainimage,
                             ]);
                              $node_es->save();
                               $nodeestitle=$node_es->getTitle();
                               $string = str_replace(' ', '-', $nodeestitle); // Replaces all spaces with hyphens
                            $alias = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                            $alias = strtolower($alias);
                         \Drupal::service('path.alias_storage')->save("node/" . $node_getid, $nodetype."/".$alias, $languageid);
                        }
                        else
                        {
                        $node_es = $node->getTranslation($languageid);
                       
                        $node_getid=$node_es->id();
                        $node_es->setTitle($engtitle);
                        $node_es->body->value = $html;
                        $node_es->body->format = 'basic_html';
                         $node_es->field_subtitle->value = $subtitle;
                          $node_es->field_thumbnail->setValue([
                          'target_id' => $thmbnailimage,
                            ]);
                            $node_es->field_video_url->value = $videourl;
                              $node_es->save();
                               $nodeestitle=$node_es->getTitle();
                        $string = str_replace(' ', '-', $nodeestitle); // Replaces all spaces with hyphens
                            $alias = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                            $alias = strtolower($alias);
                        \Drupal::service('path.alias_storage')->save("node/" . $node_getid, $nodetype."/".$alias, $languageid);
                        }
                        }
                        else
                        {
                            $nodees = $node->getTranslation($languageid);
                             $nodetranslated= $nodees->body->value;
                            $doc = new DOMDocument();
                            $doc->encoding = 'utf-8';
                            $loadhtml=$doc->loadHTML(mb_convert_encoding($nodetranslated, 'HTML-ENTITIES', 'UTF-8'));
                     $xpath = new DOMXPath($doc);
                        $src = $xpath->evaluate("string(//iframe/@src)");
                        $srctarget=$xpath->evaluate("/html/body//iframe");
                        $srcexplode=explode("/",$src);
                        $varnew= str_replace($srcexplode[5],$_SESSION['newfileid'],$src);
                        for ($i = 0; $i < $srctarget->length; $i++) 
                        {
                            $href = $srctarget->item($i);
                            $url = $href->getAttribute('src');
                            $href->removeAttribute('src');
                            $href->setAttribute("src", $varnew);
                        }
                        $hreflink=$xpath->evaluate("/html/body//a");
                        for ($i = 0; $i < $hreflink->length; $i++) 
                        {
                            $hrefsrc = $hreflink->item($i);
                            $url = $hrefsrc->getAttribute('href');
                            $urlexplode=explode('/',$url);
                            $endexplode=end($urlexplode);
                            if(($endexplode=="ppt") || ($endexplode=="pdf"))
                            {
                             $varnewsrc= str_replace($urlexplode[5],$_SESSION['newfileid'],$url);
                             $hrefsrc->removeAttribute('href');
                             $hrefsrc->setAttribute("href", $varnewsrc);
                            }
                            
                        }
                        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                        $html.= $doc->saveHTML();
                        $nodees->body->value = $html;
                         $nodees->save();
                       
                        }
                      
                       // unset($_SESSION['newfileid']);
                        header("Location:".$copylink);
                        unset($_SESSION['newfileid']);
                        
             }
             else 
             {
                
                 $node = \Drupal\node\Entity\Node::load($nodeid);
                 $nodelng = $node->getTranslation($languageid);
                 
                 $nodelangval = $nodelng->body->value;
                 $doc = new DOMDocument();
                 $loadhtml=$doc->loadHTML($nodelangval);
                 $xpath = new DOMXPath($doc);
                $srcval = $xpath->evaluate("string(//iframe/@src)");
                
                $srcstr = strstr($srcval, '?', true);
                $substrval= substr($srcstr, 0, -5);
               
                    
                    header("Location:".$substrval);
                
                
             }
              
        }
        else 
        {
             
            $newfolder =  createfolder($service,$folderId, $languageid);
            $newfolderid = $newfolder->id;
            $copyfiles = copyFile($service,$newfolderid,$engfileid);
             $copylink= $copyfiles->alternateLink;
             $explodecopylink=explode('/',$copylink);
             $_SESSION['newfileid']=$explodecopylink[5];
             insertPermission($service, $_SESSION['newfileid']);
             
             $node = \Drupal\node\Entity\Node::load($nodeid);
             
              $var=$_SESSION['url'];
              if(preg_match("/add/", $var))
             {
              $engtitle=$node->getTitle();
               $nodetype=$node->getType();        
             $node_body=$node->body->value;
               $subtitle=$node->field_subtitle->value;
               $mainimage = $node->field_main_image->entity->fid->value;
               $thmbnailimage=$node->field_thumbnail->entity->fid->value;
               $videourl=$node->field_video_url->value;
             $doc = new DOMDocument();
             $doc->encoding = 'utf-8';
             $loadhtml=$doc->loadHTML(mb_convert_encoding($node_body, 'HTML-ENTITIES', 'UTF-8'));
              $xpath = new DOMXPath($doc);
                        $src = $xpath->evaluate("string(//iframe/@src)");
                        $srctarget=$xpath->evaluate("/html/body//iframe");
                        $srcexplode=explode("/",$src);
                        $varnew= str_replace($srcexplode[5],$_SESSION['newfileid'],$src);
                        for ($i = 0; $i < $srctarget->length; $i++) 
                        {
                            $href = $srctarget->item($i);
                            $url = $href->getAttribute('src');
                            $href->removeAttribute('src');
                            $href->setAttribute("src", $varnew);
                        }
                        $hreflink=$xpath->evaluate("/html/body//a");
                        for ($i = 0; $i < $hreflink->length; $i++) 
                        {
                            $hrefsrc = $hreflink->item($i);
                            $url = $hrefsrc->getAttribute('href');
                            $urlexplode=explode('/',$url);
                            $endexplode=end($urlexplode);
                            if(($endexplode=="ppt") || ($endexplode=="pdf"))
                            {
                             $varnewsrc= str_replace($urlexplode[5],$_SESSION['newfileid'],$url);
                             $hrefsrc->removeAttribute('href');
                             $hrefsrc->setAttribute("href", $varnewsrc);
                            }
                            
                        }
                         $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                        $html.= $doc->saveHTML();
                        
                       if($nodetype=="test_questions")
                        {
                                $node_es = $node->getTranslation($languageid);
                       
                        $node_getid=$node_es->id();
                        $node_es->setTitle($engtitle);
                        $node_es->body->value = $html;
                        $node_es->body->format = 'basic_html';
                         $node_es->field_subtitle->value = $subtitle;
                          $node_es->field_thumbnail->setValue([
  'target_id' => $thmbnailimage,
]);
                            $node_es->field_main_image->setValue([
  'target_id' => $mainimage,
]);
                              $node_es->save();
                               $nodeestitle=$node_es->getTitle();
                        $string = str_replace(' ', '-', $nodeestitle); // Replaces all spaces with hyphens
                            $alias = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                            $alias = strtolower($alias);
                        \Drupal::service('path.alias_storage')->save("node/" . $node_getid, $nodetype."/".$alias, $languageid);
                        }
                        else
                        {
                            $node_es = $node->getTranslation($languageid);
                       
                        $node_getid=$node_es->id();
                        $node_es->setTitle($engtitle);
                        $node_es->body->value = $html;
                        $node_es->body->format = 'basic_html';
                         $node_es->field_subtitle->value = $subtitle;
                          $node_es->field_thumbnail->setValue([
  'target_id' => $thmbnailimage,
]);
                           $node_es->field_video_url->value = $videourl;
                              $node_es->save();
                               $nodeestitle=$node_es->getTitle();
                        $string = str_replace(' ', '-', $nodeestitle); // Replaces all spaces with hyphens
                            $alias = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                            $alias = strtolower($alias);
                        \Drupal::service('path.alias_storage')->save("node/" . $node_getid, $nodetype."/".$alias, $languageid);
                        }
                      
                        }
                     else {
                         $nodees = $node->getTranslation($languageid);
                         $nodetranslated= $nodees->body->value;
                        $doc = new DOMDocument();
              $doc->encoding = 'utf-8';
             $loadhtml=$doc->loadHTML(mb_convert_encoding($nodetranslated, 'HTML-ENTITIES', 'UTF-8'));
              $xpath = new DOMXPath($doc);
                        $src = $xpath->evaluate("string(//iframe/@src)");
                        $srctarget=$xpath->evaluate("/html/body//iframe");
                        $srcexplode=explode("/",$src);
                        $varnew= str_replace($srcexplode[5],$_SESSION['newfileid'],$src);
                        for ($i = 0; $i < $srctarget->length; $i++) 
                        {
                            $href = $srctarget->item($i);
                            $url = $href->getAttribute('src');
                            $href->removeAttribute('src');
                            $href->setAttribute("src", $varnew);
                        }
                        $hreflink=$xpath->evaluate("/html/body//a");
                        for ($i = 0; $i < $hreflink->length; $i++) 
                        {
                            $hrefsrc = $hreflink->item($i);
                            $url = $hrefsrc->getAttribute('href');
                            $urlexplode=explode('/',$url);
                            $endexplode=end($urlexplode);
                            if(($endexplode=="ppt") || ($endexplode=="pdf"))
                            {
                             $varnewsrc= str_replace($urlexplode[5],$_SESSION['newfileid'],$url);
                             $hrefsrc->removeAttribute('href');
                             $hrefsrc->setAttribute("href", $varnewsrc);
                            }
                            
                        }
                        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                        $html.=$doc->saveHTML();
                       $nodees->body->value = $html;
                         $nodees->save();
 }
                        header("Location:".$copylink);
                         unset($_SESSION['newfileid']);
               
               
        }
       
                     
                   
                      
                 
        
     }
     catch (Exception $e)
     
     {
         
        if(!empty($_SESSION['url']))
        {
                 $referurl=$_SESSION['url'];
             
                 $_SESSION['urlmessage']="Your Gmail account has insufficient permssion to view and translate the slide";
                 header("Location:".$referurl);
                 unset($_SESSION['url']);
        }
        
        
     }
          
     
      $pageToken = $children->getNextPageToken();
    } catch (Exception $e) {
      print "An error occurred: " . $e->getMessage();
      $pageToken = NULL;
    }
  } while ($pageToken);
}
function copyFile($service,$folderid,$originFileId) {
    $copiedFile = new Google_Service_Drive_DriveFile();
  $newParent = new Google_Service_Drive_ParentReference();
  $newParent->setId($folderid);
  $copiedFile->setParents(array($newParent));
 
  try {
    return $service->files->copy($originFileId, $copiedFile);
  } catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
  }
  return NULL;

}

function getUserInfo($Clientinfo)
{
     $userInfoService = new Google_Service_Oauth2($Clientinfo);
    try {
		$userInfo = $userInfoService->userinfo->get();

		if ($userInfo != null && $userInfo->getId() != null) {
			return $userInfo;
		} else {
			echo "No user ID";
		}
	} catch (Exception $e) {
		print 'An error occurred: ' . $e->getMessage();
	}
}

function printPermissionIdForEmail($service, $email) {
  try {
    $permissionId = $service->permissions->getIdForEmail($email);

    return $permissionId->getId();
  } catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
  }
}

function insertPermission($service, $fileId) {
  $newPermission = new Google_Service_Drive_Permission();
  
  $newPermission->setType('anyone');
  $newPermission->setRole('reader');
  try {
    return $service->permissions->insert($fileId, $newPermission);
  } catch (Exception $e) {
     if(!empty($_SESSION['url']))
        {
                 $referurl=$_SESSION['url'];
                 $_SESSION['permmessage']="Translated slide has insufficient permission";
                 header("Location:".$referurl);
                 unset($_SESSION['url']);
        }
  }
 
}

function createfolder($service,$parentfolderid, $langcode)
{
    $file = new Google_Service_Drive_DriveFile();
    $file->title = $langcode;
    $file->setMimeType('application/vnd.google-apps.folder');
    $parent = new Google_Service_Drive_ParentReference();
    $parent->setId($parentfolderid);
    $file->setParents(array($parent));
    try {
    return $service->files->insert($file);
   
  } catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
  }
  
}




?>