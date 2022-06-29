$(document).ready(function(){
      $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 200000,
        values: [ 0, 200000],
        slide: function( event, ui ) {
                $( "#amount" ).val( "QAR " + ui.values[ 0 ] + " - QAR " + ui.values[ 1 ] );
        }
    });
    $( "#slider-range1" ).slider({
            range: true,
            min: 0,
            max: 300000,
            values: [ 0, 300000 ],
            slide: function( event, ui ) {
                    $( "#amount1" ).val( " " + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
            }
    });
   $( "#amount" ).val( "QAR " + $( "#slider-range" ).slider( "values", 0 ) + " - QAR " + $( "#slider-range" ).slider( "values", 1 ) );    
   $( "#amount1" ).val( " " + $( "#slider-range1" ).slider( "values", 0 ) + " - " + $( "#slider-range1" ).slider( "values", 1 ) );
   
   var page = parseInt("9");
   var price_from;
   var price_to;
   var km_from;
   var km_to;
   var keyword;
   var usedcars_make;
   var usedcars_model;
   var minyear;
   var maxyear;
   var bluetooth;
   var usedcars_type;
   var loading  = false; //prevents multiple loads
   var url=$("#url").val();
   var homeurl=$("#homeurl").val();
   var booknowurl=$("#booknowurl").val();
   $("#usedcar-search").click(function(e){ e.preventDefault();   
        price_from=$( "#slider-range" ).slider( "values", 0 );
        price_to=$( "#slider-range" ).slider( "values", 1 );
        km_from=$( "#slider-range1" ).slider( "values", 0 );
        km_to=$( "#slider-range1" ).slider( "values", 1 );
        keyword=$("#keyword").val();
        usedcars_make=$("#usedcars-make").val();
        usedcars_model=$("#usedcars-model").val();
        minyear=$("#minyear").val();
        maxyear=$("#maxyear").val();        
        bluetooth=$("#bluetooth").val(); 
        usedcars_type=$("#usedcars-type").val(); 
        
        //console.log($( "#slider-range" ).slider( "values", 0 ));
        
        $(".prod-list-wrapper").html("<div class='ajax_loader' style='margin-top: 16px;text-align: center;'><img src='"+homeurl+"images/loader.gif' style='width: 64px;' width='100%'></div>");
        
        $.ajax({
              url: url,
              type: "GET",
              dataType : "json",
              data: {keyword:keyword,usedcars_make:usedcars_make,usedcars_model:usedcars_model,minyear:minyear,maxyear:maxyear,price_from:price_from,price_to:price_to,km_from:km_from,km_to:km_to,bluetooth:bluetooth,usedcars_type:usedcars_type},
              success: function (response) {              
              //console.log(response);
              if(response){
                var append="";
                $.each(response.results, function( key, value ) {                
                    //append+="<div class='prod-list-box wow zoomIn' data-wow-delay='0.5s' data-wow-duration='0.5s'><div class='image-box'><img src='"+value.image+"' alt='Product'></div><div class='prod-info-sec'><div class='name-title'>"+value.heading+"</div><div class='sub-title'><span>QAR :</span> "+value.price+" </div><div class='prod-icon-text-row clearfix'><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/door-icon.png' alt='icon'></span><span class='text'>"+value.doors+" DOORS</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon3.png' alt='icon'></span><span class='text'> "+value.bluetooth+" </span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon1.png' alt='icon'></span><span class='text'>"+value.passengers+" people</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/meter-icon.png' alt='icon'></span><span class='text'>"+value.km+" Km</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/year-icon.png' alt='icon'></span><span class='text'>"+value.date+"</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon2.png' alt='icon'></span><span class='text'> "+value.automatic+" </span></span></div></div><div class='prod-book-now-btn'><a class='book-now-btn' title='VIEW MORE' href='"+value.detailurl+"'>VIEW MORE</a></div></div>";            
                    append+="<div class='prod-list-box wow zoomIn' data-wow-delay='0.5s' data-wow-duration='0.5s'><div class='image-box'><img src='"+value.image+"' alt='Product'></div><div class='prod-info-sec'><div class='name-title'>"+value.heading+"</div><div class='sub-title'><span>QAR :</span> "+value.price+" </div><div class='prod-icon-text-row clearfix'><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/year-icon.png' alt='icon'></span><span class='text'>"+value.date+"</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/meter-icon.png' alt='icon'></span><span class='text'>"+value.km+" Km</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon2.png' alt='icon'></span><span class='text'> "+value.automatic+" </span></span></div></div><div class='prod-book-now-btn'><a class='book-now-btn' title='VIEW MORE' href='"+value.detailurl+"'>VIEW MORE</a></div></div>";
                });
                $(".prod-list-wrapper").html(append);
                loading = false;
              } else{                  
                  $(".prod-list-wrapper").html("<h3 class='empty_message' style='text-align: center;line-height: 80px;color: #203864;'>Looks like we couldn't find what you were looking for. </h3>");
              }           
                
             }
            });           
   
   });
   
    $(window).scroll(function() { //detect page scroll        
        if($(window).scrollTop() + $(window).height() >= $(".prod-list-wrapper").height()) { //if user scrolled to bottom of the page
            
            //console.log("entered"); return false;
            
            if(loading == false){
                loading = true; 
                $(".ajax_loader_pagenation").removeClass("hidden");  
                $.ajax({
                    type: "GET",
                    url: url,
                    data : {keyword:keyword,usedcars_make:usedcars_make,usedcars_model:usedcars_model,minyear:minyear,maxyear:maxyear,price_from:price_from,price_to:price_to,km_from:km_from,km_to:km_to,page:page,bluetooth:bluetooth,usedcars_type:usedcars_type},
                    dataType : "json",
                    success : function(data) {
                         if(data){
                            var append="";
                            $.each(data.results, function( key, value ) {
                                //append+="<div class='prod-list-box wow zoomIn' data-wow-delay='0.5s' data-wow-duration='0.5s'><div class='image-box'><img src='"+value.image+"' alt='Product'></div><div class='prod-info-sec'><div class='name-title'>"+value.heading+"</div><div class='sub-title'><span>QAR :</span> "+value.price+" </div><div class='prod-icon-text-row clearfix'><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/door-icon.png' alt='icon'></span><span class='text'>"+value.doors+" DOORS</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon3.png' alt='icon'></span><span class='text'> "+value.bluetooth+" </span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon1.png' alt='icon'></span><span class='text'>"+value.passengers+" people</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/meter-icon.png' alt='icon'></span><span class='text'>"+value.km+" Km</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/year-icon.png' alt='icon'></span><span class='text'>"+value.date+"</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon2.png' alt='icon'></span><span class='text'> "+value.automatic+" </span></span></div></div><div class='prod-book-now-btn'><a class='book-now-btn' title='Book Now' href='"+value.detailurl+"'>VIEW MORE</a></div></div>";
                                append+="<div class='prod-list-box wow zoomIn' data-wow-delay='0.5s' data-wow-duration='0.5s'><div class='image-box'><img src='"+value.image+"' alt='Product'></div><div class='prod-info-sec'><div class='name-title'>"+value.heading+"</div><div class='sub-title'><span>QAR :</span> "+value.price+" </div><div class='prod-icon-text-row clearfix'><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/year-icon.png' alt='icon'></span><span class='text'>"+value.date+"</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/meter-icon.png' alt='icon'></span><span class='text'>"+value.km+" Km</span></span><span class='prod-icon-text-col'><span class='icon'><img src='"+homeurl+"images/prod-row-icon2.png' alt='icon'></span><span class='text'> "+value.automatic+" </span></span></div></div><div class='prod-book-now-btn'><a class='book-now-btn' title='Book Now' href='"+value.detailurl+"'>VIEW MORE</a></div></div>";
                            });                                                         
            
                            $(".prod-list-wrapper").append(append);                            
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