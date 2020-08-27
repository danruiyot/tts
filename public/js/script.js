var mediaModal = $('#media-modal'),
library = $('#librayr'), //tab
productImagesContainer = $('.product-images'); //container

$(".opens").click(function(){
  $('input[type=checkbox]').prop('checked', false);

});

library.on('click','a',function(e){
  e.preventDefault();

  //checkboxprocessing........
  $('input[type=checkbox]').prop('checked', false);

  var checkbox = $(this).find('input[type=checkbox]');
  if(!checkbox.is(':checked')){
    checkbox.prop('checked', true);
  }else{
    checkbox.prop('checked', false);
  }
});


//insert button and send images to the form and hidden fields tooo....
$('.insert').click(function(e){

  //collect checkbox
  var checkboxes = library.find('input[type=checkbox]');
  checkboxes.each(function(i, el){
    if(el.checked){
      $(".product-images").empty();
      var imageId = $(el).parent().data('image-id');
      var imgSrc = $(el).siblings('img').attr('src');

      //template
      var template = 	'<div class="product-img">'+
                '<input type="hidden" name="image" value="'+ imageId +'">'+
                '<img src="'+ imgSrc +'" />'+
                '<a href="#" class="btn btn-xs text-danger remove">'+
              '<span class="fa fa-trash"></span></a>'+
              '</div>';
      //append
      productImagesContainer.append(template);
    }
  });
  mediaModal.close();

  //hide modal
});

//remove product images js
productImagesContainer.on('click', '.remove', function(e){
  e.preventDefault();
  //fadeout animation and remove....
  $(this).parent('.product-img').fadeOut('100', function(){
    $(this).remove();
  });
});


