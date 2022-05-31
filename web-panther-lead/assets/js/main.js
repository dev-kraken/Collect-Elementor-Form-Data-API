/**
 * Script For .onclick copy Url 
 */
var $temp = jQuery("<input>");
jQuery('.clipboard').on('click', function () {
  jQuery("body").append($temp);
  $temp.val($url).select();
  document.execCommand("copy");
  $temp.remove();
  jQuery("h5").text("URL copied!");
})
