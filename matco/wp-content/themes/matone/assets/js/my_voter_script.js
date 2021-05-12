
jQuery(document).ready(function(){
  mail_prop('.contactform');
});

// validates Email format
function isEmail(emailAddress) {
  var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
  return pattern.test(emailAddress);
}

jQuery.fn.validate = function() {
  return this.filter(function() {
    if (jQuery(jQuery(this)).attr("type") == 'email') {
      if (!isEmail(this.value)) {
        jQuery(jQuery(this)).removeClass("success");
        jQuery(jQuery(this)).addClass("error");
        return false;
      } else {
        jQuery(jQuery(this)).removeClass("error");
        jQuery(jQuery(this)).addClass("success");
        return true;
      }
    }else if (jQuery(jQuery(this)).attr("type") == 'phone') {
      if (!telephoneCheck(this.value)) {
        jQuery(jQuery(this)).removeClass("success");
        jQuery(jQuery(this)).addClass("error");
        return false;
      } else {
        jQuery(jQuery(this)).removeClass("error");
        jQuery(jQuery(this)).addClass("success");
        return true;
      }
    }else {
      if (this.value.length == 0) {
        jQuery(jQuery(this)).removeClass("success");
        jQuery(jQuery(this)).addClass("error");
        return false;
      }else{
        jQuery(jQuery(this)).removeClass("error");
        jQuery(jQuery(this)).addClass("success");
        return true;
      }
    }
  }).length == this.length;
};

function ajax_submit($form, $elements, $dataType) {
  var cls = '';
  jQuery.post(myAjax.ajaxurl, $form.serialize(), function(msg) {
    if (msg.type == "success") {
      cls = 'green';
      var $elements_reset = $form.find('input:not(input[type="submit"],input[type="button"],input[type="hidden"]),textarea');
      $elements_reset.val("");
    } else {
      cls = 'red';
    }
    $form.find('.btnSend').removeAttr('disabled');
    $form.find('.loader img').remove();
    $form.find('.loader').html('<span class="' + cls + '" id="response">' + msg.data + '</span>');
  }, $dataType);
  // $("#contactForm")[0].reset();
}

function mail_prop($clsfrm) {

  var $form = jQuery($clsfrm),
  $dataType = "json";
  $form.on('click', 'input[type=submit]', function(e) {

    var $elements = $form.find('input:not(input[type="submit"],input[type="hidden"]),textarea'),
    $bool = $elements.validate();
    if ($bool) {
     ajax_submit($form, $elements, $dataType);
   } else {

   }
   e.preventDefault();
 });
}
