
/*
* Replace all SVG images with inline SVG
*/
function imgToSVG()
{
  $("img.svg").each(function(){
     var $img = $(this);
     var imgID = $img.attr('id');
     var imgClass = $img.attr('class');
     var imgURL = $img.attr('src');

     $.get(imgURL, function(data) {
         // Get the SVG tag, ignore the rest
         var $svg = $(data).find('svg');

         // Add replaced image's ID to the new SVG
         if(typeof imgID !== 'undefined') {
             $svg = $svg.attr('id', imgID);
         }
         // Add replaced image's classes to the new SVG
         if(typeof imgClass !== 'undefined') {
             $svg = $svg.attr('class', imgClass+' replaced-svg');
         }

         // Remove any invalid XML tags as per http://validator.w3.org
         $svg = $svg.removeAttr('xmlns:a');

         // Replace image with new SVG
         $img.replaceWith($svg);

     }, 'xml');

  });
}


/*
* Normal form submit. Submit the form indicated by formId otherwise submit the closet form to the element
* @param {$element} element
* @param {String} formId (optional)
*/
function submitForm($element, formId)
{
  
  $form = formId ? $("#" + formId) : $element.closest("form");
  if($form.length > 0)
  {
    $form.submit();
  }
}



$(document).ready(function() {
  imgToSVG();
});
