<?php
if ($_SERVER['HTTP_HOST'] == 'www.coagenergycouncil.gov.au' || $_SERVER['HTTP_HOST'] == 'coagenergycouncil.gov.au') {
    //if it doesnt, then enable https
//    $_SERVER['HTTPS'] = 'On';
  $base_url = "http://" . $_SERVER['HTTP_HOST'] ;
} else {
   $_SERVER['HTTPS'] = 'On';
}

?>
<?php
if ($_SERVER['HTTP_HOST'] == 'www.scer.gov.au' || $_SERVER['HTTP_HOST'] == 'scer.gov.au') {
    //if it doesnt, then enable https
//    $_SERVER['HTTPS'] = 'On';
  $base_url = "http://" . $_SERVER['HTTP_HOST'] ;
} else {
   $_SERVER['HTTPS'] = 'On';
}

?>

