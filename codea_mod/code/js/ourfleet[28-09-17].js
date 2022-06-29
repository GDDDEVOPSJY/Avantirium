$(document).ready(function(){
      
   
   var page = parseInt("9");
   var price_from;
   var price_to;
   var km_from;
   var km_to;
   var keyword;
   var usedcars_make='65';
   var usedcars_model;
   var minyear;
   var maxyear;
   var loading  = false; //prevents multiple loads
   var url=$("#url").val();
   var homeurl=$("#homeurl").val();
   var booknowurl=$("#booknowurl").val();
   
   
    $(window).scroll(function() { //detect page scroll        
        if($(window).scrollTop() + $(window).height() >= $(".prod-list-wrapper-typ1").height()) { //if user scrolled to bottom of the page
            
            //console.log("entered"); return false;
            
            if(loading == false){
                loading = true; 
                $(".ajax_loader_pagenation").removeClass("hidden");  
                $.ajax({
                    type: "GET",
                    url: url,
                    data : {keyword:keyword,usedcars_make:usedcars_make,usedcars_model:usedcars_model,minyear:minyear,maxyear:maxyear,price_from:price_from,price_to:price_to,km_from:km_from,km_to:km_to,page:page},
                    dataType : "json",
                    success : function(data) {
                         if(data){
                            var append="";
                            $.each(data.results, function( key, value ) {
                                append+="<div class='prod-list-box wow zoomIn' data-wow-delay='0.5s' data-wow-duration='0.5s'><div class='image-box'><img src='"+value.image+"' alt='Product'></div><div class='prod-info-sec'><div class='name-title'>"+value.heading+"</div><div class='sub-title'><span>QAR :</span> "+value.price+" per day</div><div class='sub-title'><span>QAR :</span> "+value.price_weekly+" per week</div><div class='sub-title'><span>QAR :</span> "+value.price_monthly+" per month</div><div class='prod-icon-text-row clearfix'><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/door-icon.png' alt='icon'></span><span class='text'>"+value.doors+" DOORS</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon3.png' alt='icon'></span><span class='text'> "+value.bluetooth+" </span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon1.png' alt='icon'></span><span class='text'>"+value.passengers+" people</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon2.png' alt='icon'></span><span class='text'> "+value.automatic+" </span></span></div></div><div class='prod-book-now-btn'><a class='book-now-btn' title='Book Now' href='"+booknowurl+'?id='+value.id+"'>BOOK NOW</a></div>"+value.is_offer+"</div>";
                            });                            
                            $(".prod-list-wrapper-typ1").append(append);                            
                            loading = false;
                            page=page+parseInt("9");
                            $(".ajax_loader_pagenation").addClass("hidden");  
                        } else{
                           loading = true;
                           page=parseInt("9");
                           $(".ajax_loader_pagenation").addClass("hidden");  
                        }
                    }
                });
                
            }    
        }
    });
});