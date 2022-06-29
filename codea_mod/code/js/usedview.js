$(document).ready(function(){
    
     var galthumbslide = $('.thumbcarousel').flexslider({
        animation: 'slide',
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 131,
        itemMargin: 15,
        asNavFor: '.largeslider'
    });

    var gallargeslide = $('.largeslider').flexslider({
        animation: 'slide',
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: '.thumbcarousel'
    });
    
    if($(window).width() < 979){
		popupwidth ='90%';
		teampopupwidth1 ='90%';
	}
	else {
		popupwidth = "600px";
		teampopupwidth1 = "830px";
	}
    $('.terms_popup_link').colorbox({
            inline:true,
            href:'#terms_popup',
            width:popupwidth
    });
        
    $('.booknow_popup_link').colorbox({
            inline:true,
            href:'#new-user-popup',
            width:popupwidth
    });    
    $('.success_booking').colorbox({
		inline:true,
		href:'#success_popup',
		width:popupwidth,                
                onClosed: function () {
                    window.location.href = $('.model_name').attr('data-redirecturl');
                }
	});
    var loading  = false; //prevents multiple loads
    var page='4';
    $('#load_more').click(function(e){ e.preventDefault();
        var elm=$(this);              
        var make=elm.attr('data-make');
        //console.log(make);
        var model=elm.attr('data-model');
        var homeurl=elm.attr('data-homeurl');
        var loadmoreurl=elm.attr('data-loadmoreurl');        
        
        if(loading == false){
            loading = true; 
           $('.load-more-btn').html('<span style="width: 10%;display: block;margin: 0 auto;" ><img src="'+homeurl+'images/rectangel_loader.gif" ></span>'); 
    
            $.ajax({
                url: loadmoreurl,
                type: "GET",
                dataType : "json",
                data: {make:make,model:model,homeurl:homeurl,loadmoreurl:loadmoreurl,page:page},
                success: function (response) {              
                    //console.log(response);
                    
                    if(response){
                      var append='';
                      $.each(response.results, function( key, value ) {                
                         // append+='<div class="more-vehicle-bx"><div class="row"><div class="col-sm-3"><div class="image-wrap wow bounceIn" data-wow-delay="0.5s" data-wow-duration="0.5s" > <img src="'+value.image+'" alt="Car Image" /> </div></div><div class="col-sm-6"><div class="prod-info-row"><div class="hd-typ6 mrg15-B R-mrg15-B"> '+value.heading+' </div><div class="common-content mrg10-B R-mrg10-B"> '+value.description+' </div><div class="prod-icon-text-row clearfix"> <span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/door-icon.png" alt="icon"></span> <span class="text">'+value.doors+' DOORS</span> </span> <span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/prod-row-icon3.png" alt="icon"></span> <span class="text"> '+value.bluetooth+' </span> </span> <span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/prod-row-icon1.png" alt="icon"></span> <span class="text"> '+value.passengers+'  people</span> </span> <span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/prod-row-icon2.png" alt="icon"></span> <span class="text"> '+value.automatic+' </span> </span><span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/meter-icon.png" alt="icon"></span> <span class="text"> '+value.km+' Km </span> </span><span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/colour-icon.png" alt="icon"></span> <span class="text"> '+value.color+' </span> </span><span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/year-icon.png" alt="icon"></span> <span class="text"> '+value.date+' </span> </span> </div></div></div><div class="col-sm-3"><div class="right-price-title-wrap"><div class="right-price-title mrg20-B R-mrg20-B align-C R-align-C"> <span class="text-typ1 green">QAR : </span><span class="text-typ1 black"> '+value.price+'  </span> </div><div class="booknow-btn-box align-C R-align-C"> <a class="booknow-btn" title="VIEW MORE" href="'+value.detailurl+'">VIEW MORE</a> </div></div></div></div></div>';            
                          append+='<div class="more-vehicle-bx"><div class="row"><div class="col-sm-3"><div class="image-wrap wow bounceIn" data-wow-delay="0.5s" data-wow-duration="0.5s" > <img src="'+value.image+'" alt="Car Image" /> </div></div><div class="col-sm-6"><div class="prod-info-row"><div class="hd-typ6 mrg15-B R-mrg15-B"> '+value.heading+' </div><div class="common-content mrg10-B R-mrg10-B"> '+value.description+' </div><div class="prod-icon-text-row clearfix"> <span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/year-icon.png" alt="icon"></span> <span class="text"> '+value.date+' </span> </span><span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/meter-icon.png" alt="icon"></span> <span class="text"> '+value.km+' Km </span> </span><span class="prod-icon-text-col"> <span class="icon"><img src="'+homeurl+'images/prod-row-icon2.png" alt="icon"></span> <span class="text"> '+value.automatic+' </span> </span> </div></div></div><div class="col-sm-3"><div class="right-price-title-wrap"><div class="right-price-title mrg20-B R-mrg20-B align-C R-align-C"> <span class="text-typ1 green">QAR : </span><span class="text-typ1 black"> '+value.price+'  </span> </div><div class="booknow-btn-box align-C R-align-C"> <a class="booknow-btn" title="VIEW MORE" href="'+value.detailurl+'">VIEW MORE</a> </div></div></div></div></div>'; 
          
                      });
                      $(".more-vehicle-wrapper").append(append);
                      loading = false;
                      page=page+parseInt("4");
                      $('.load-more-btn').html('load more');                      
                    } else{           
                        loading = true;
                        $("#load_more").remove();
                        $('.load-more-btn').html('load more');
                    }           

               }
            });
        }
    });    
    
    var prevent_multiple=1;      
    
    $("#reg_form").validate({
           rules: {
            primary_phone: {              
              digits: true
            },
            secondary_phone: {              
              digits: true
            },                        
          },
          submitHandler: function (form) {
              $(".register").attr("disabled", true);
            if(prevent_multiple!=1){ return false; }
            
            prevent_multiple++;
            
            $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function (response) {
                  if(response=='1'){                      
                      //$.colorbox.close();
                      //$('.success_booking').trigger('click');
                      //alert('Success');
                  } else{
                      alert(response);
                  }                                
              }
            });
            $('.success_booking').trigger('click');
            return false;
          }
        });      
          
});



if($(window).width() < 1199){
        galpopupwidth ='90%';
    }
    else {
        galpopupwidth = '1000px';
    }
/*Product detail gallery poup*/

$('.group1').colorbox({rel:'group1', inline:true, width:galpopupwidth, href:$(this).attr('href')});

/*Product detail gallery poup end*/