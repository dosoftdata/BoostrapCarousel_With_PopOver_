<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>B-Carousel with PopOver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       <div id="idms-widget-carousel" class="carousel slide">
       
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li id="home-image-slide-modal-control-0" data-target="#idms-widget-carousel" data-slide-to="0" class="active"></li>
    <li id="home-image-slide-modal-control-1" data-target="#idms-widget-carouselc" data-slide-to="1" class="active"></li>
    <li id="home-image-slide-modal-control-2"data-target="#idms-widget-carousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
   <ul class="carousel-inner">   
         <li class="item active" class="" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
             <a type="button" class=" col-md-4 btn home-image-slide-modal-0 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-0"
                    href="#home-image-slide-modal-0">
                 <img src="http://placehold.it/1200x315" alt="..." class="img-responsive">
             </a>
             <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                            href="#1"> 
                 <img src="http://placehold.it/350x150" alt="..." class="img-responsive">
             </a>
         </li>
         <li class="item">
             <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                            href="#1"> 
                 <img src="http://placehold.it/1200x315" alt="..." class="img-responsive">
             </a>
             <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                            href="#1"> 
                 <img src="http://placehold.it/350x150" alt="..." class="img-responsive">
             </a>
         </li> 
         <li class="item">
             <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                            href="#1"> 
                 <img src="http://placehold.it/350x150" alt="..." class="img-responsive">
             </a>
             <a type="button" class=" col-md-4 btn home-image-slide-modal-2 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-2" 
                            href="#2"> 
                 <img src="http://placehold.it/1200x315" alt="..." class="img-responsive">
             </a>
         </li>
      </ul>
  <!--Image slide Popped-->
  <div id="home-image-slide-modal-0" class="idms-slide-popover col-md-4 ">
      <img src="http://placehold.it/1200x315" alt="..." class="img-responsive"> 
  </div>
  <div id="home-image-slide-modal-1" class="idms-slide-popover col-md-4 hide">
      <img src="http://placehold.it/200x100" alt="..." class="img-responsive"> 
  </div>
  <div id="home-image-slide-modal-2" class="idms-slide-popover col-md-4 hide">
      <img src="http://placehold.it/200x200" alt="..." class="img-responsive"> 
  </div>
  <!-- Controls -->
  
  <a  id="idms-slide-left" class="left carousel-control border-blue" href="#left" role="button" data-slide="prev">
      <span  class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a  id="idms-slide-right"  class="right carousel-control border-blue" href="#right" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel --> 
        
    </div>
<script type="text/javascript" src="js/jquery1.7.2.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
    $(function () {
       // $('#home-image-slide-modal-0').modalPopover('show');
       $('ol.carousel-indicators > li').bind(
               'click', function(e){
                e.preventDefault(); 
                var index = $(this).index();//.attr('class','active');
                if($(this).attr('class','active'))
                {
                    $('.idms-slide-popover').addClass('hide');
                    $('#home-image-slide-modal-'+index).removeClass('hide'); 
                }       
               });
       $('.carousel > #idms-slide-left').bind(
               'click', function(e){
                e.preventDefault(); 
               idmsCarouselSlideLeftButton();
                 var index = $('ol.carousel-indicators > li').filter('.active').index();//.attr('class','active');
               // alert(index+'/here');
                $('.idms-slide-popover').addClass('hide');
                $('#home-image-slide-modal-'+index).removeClass('hide'); 
               });
         $('.carousel > #idms-slide-right').bind(
               'click', function(e){
                e.preventDefault(); 
               idmsCarouselSliderighttButton();
                 var index = $('ol.carousel-indicators > li').filter('.active').index();//.attr('class','active');
                $('.idms-slide-popover').addClass('hide');
                $('#home-image-slide-modal-'+index).removeClass('hide');
               });
      $('ul.carousel-inner > li').bind('click',function(e){
        e.preventDefault();
        var listnumber = $(this).index();
        $('.idms-slide-popover').addClass('hide');
        $('#home-image-slide-modal-'+listnumber).removeClass('hide')
      });
  idmsCarousel();
   function idmsCarousel(){
       $('.carousel').carousel({
       interval: 3000,
        pause: 'hover',
        wrap: true
   }); 
   }
   function idmsCarouselSlideLeftButton(){
      $('.carousel').carousel('prev'); 
   }
  function idmsCarouselSliderighttButton(){
     $('.carousel').carousel('next');  
   }
$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this)); 
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
    });
    
</script>

</body>
</html>
