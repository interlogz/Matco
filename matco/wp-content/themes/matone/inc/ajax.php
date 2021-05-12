<?php
function my_voter_script(){
  $ajax_call=isset($_REQUEST["ajax_for"])? $_REQUEST["ajax_for"]:null;
  if(isset($ajax_call)){
    switch($ajax_call){
      case "contact":
        contact_form();
        die();
        break;

      default:
        echo json_encode(array("type"=>"failure","data"=>"Invalid Client Request"));
        die();
        break;
    }
  }
  else
  {
    echo json_encode(array("type"=>"failure","data"=>"Anonymous Client Request"));
    die();
  }
}

?>