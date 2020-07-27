<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php
if ($this->error->getCode() == '404') {
   echo file_get_contents(JURI::root().'/error-404');
}
?>