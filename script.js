
$(document).ready(function () {

//start home page hover photo
    var imgFile = $('.portrait').attr('src');
    var preloadImage = new Image();
    preloadImage.src = 'img/IMG_1183.jpg';
    $('.portrait').hover(function() {
      $(this).attr('src', preloadImage.src);
    }, function() {
      $(this).attr('src', imgFile);
   }
  ); // end hover photo

    //attempt adding click below for changing photo on mobile platform
       $('.portrait').click(function() {
        $(this).attr('src', preloadImage.src);
      },
      function() {
        $(this).attr('src', imgFile);
       }
           );


//      start of contact form dialog box
$('#contactMe').dialog({
    modal: true,
    autoOpen: false,
    title: 'Contact Amy'
});

$('#closeDialog').click(function(){
  $('#contactMe').dialog('close');
})

$('#contactDialog').click(function(){
  $('#contactMe').dialog('open');
});
//End contact form dialog box


//      Start of footer accordions, toggle class of chevron to rotate when clicked
$('.credits').hide();
$('.socialDrop').hide();
$('.conserve').hide();

$('#media-accord').click(function(){
    $('.socialDrop').slideToggle();
    $('.chevron1').toggleClass('arrow');
});
$('#credit-accord').click(function(){
  $('.credits').slideToggle();
  $('.chevron2').toggleClass('arrow');
});
$('#help-accord').click(function(){
  $('.conserve').slideToggle();
  $('.chevron3').toggleClass('arrow');
});
//End of footer accord sections


//Start of adding tabbed pages to pages
$('#tabContainer, #tabContainerUtah, #tabContainerOverseas').tabs();
let hash = location.hash;
  if(hash){
    $('#tabContainer, #tabContainerUtah, #tabContainerOverseas').tabs('load', hash);
  }

}) //end document ready

