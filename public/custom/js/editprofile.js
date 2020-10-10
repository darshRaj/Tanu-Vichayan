// Show the first tab by default
$('.tabs-stage div').hide();
$('.tabs-stage div:first').show();
$('.tabs-nav li:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav a').on('click', function(event){

  // alert($(this).attr('href'));
  event.preventDefault();

  $('.tabs-stage div').hide();
  $('.tabs-nav li').removeClass('tab-active');
  
   $('.tabs-stage div:first').show();
  $(this).parent().addClass('tab-active');
  // $(this).child().css('display','block');
  
  $($(this).attr('href')).show();
});