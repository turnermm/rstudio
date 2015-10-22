<?php
if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');
/**
 * @license    GNU GPLv2 version 2 or later (http://www.gnu.org/licenses/gpl.html)
 * 
 * @class       plugin_ckgedit_edit 
 * @author     Myron Turner <turnermm02@shaw.ca>
   usage:  place ~~R_STUDIO~~ at the top of the RStudio page before saving the copy/paste, then save
 */ 
class action_plugin_rstudio extends DokuWiki_Action_Plugin {
  function register(&$controller) {    
        $controller->register_hook( 'IO_WIKIPAGE_WRITE', 'BEFORE', $this, 'insert_geshi'); 
  }      
  
  function insert_geshi(&$event,$params) {     
      if(strpos($event->data[0][1],'~~R_STUDIO~~') === false) return;
     $event->data[0][1] = preg_replace_callback(
       '|(<code>(?!</file>).*?)</file>|sm',  //        '|(<code>.*?)</file>|sm',
        function ($matches) {
            return $matches[1] . '</code>';
        },
        $event->data[0][1]
     );
      $event->data[0][1] = str_replace('<code>',  '<code rsplus>', $event->data[0][1]);
  }
}
