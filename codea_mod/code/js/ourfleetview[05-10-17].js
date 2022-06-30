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

        animation: 'fade',

        controlNav: false,

        animationLoop: false,

        slideshow: false,

        sync: '.thumbcarousel'

    });

    

    /*COLORBOX POPUP START*/

	if($(window).width() < 979){

		popupwidth ='90%';

		teampopupwidth1 ='90%';

	}

	else {

		popupwidth = "600px";

		teampopupwidth1 = "830px";

	}

        

        $('.success_booking').colorbox({

		inline:true,

		href:'#success_popup',

		width:popupwidth,                

                onClosed: function () {

                    window.location.href = $('.model_name').attr('data-redirecturl');

                }

	});

         $('.enquiry_success').colorbox({

		inline:true,

		href:'#enquiry_success_popup',

		width:popupwidth,                

                onClosed: function () {

                    window.location.href = $('.model_name').attr('data-redirecturl');

                }

	});

/*Enquiry form popup*/

	$('.register-user-popup').colorbox({

		inline:true,

		href:'#login-popup',

		width:popupwidth

	});

/*Enquiry form popup end*/



/*Forgot password popup*/

	$('.forgot-passwrd-lnk').colorbox({

		inline:true,

		href:'#forgot-password',

		width:popupwidth

	});

/*Forgot password popup end*/



/*Forgot password send button popup*/

	/*$('.forgot-passwd-send').colorbox({

		inline:true,

		href:'#login-popup',

		width:popupwidth

	});*/

/*Forgot password send button popup end*/



/*New User popup*/

	$('.new-user-popup').colorbox({

		inline:true,

		href:'#new-user-popup',

		width:popupwidth

	});

/*New User popup end*/

    

   /* $('.process-tab-list ul > li').click(function(){

        $('.process-tab-list ul > li').removeClass('active');

        $('.tab-bx').removeClass('current');

        $(this).addClass('active');

        var ThisIndex = $(this).index();

        $(this).parent().parent().next().find(".tab-bx").eq(ThisIndex).addClass('current');

    });*/

    $('.cdw_readmore').colorbox({

        inline:true,

        href:'#CDW-popup',

        width:popupwidth

    });

    $('.driver_readmore').colorbox({

        inline:true,

        href:'#driver-popup',

        width:popupwidth

    });

    

    $('.back1').click(function(e){ e.preventDefault();

         $('.process-tab-row').fadeOut(1000);

         $('.location_date_div').fadeIn(1000);

    });

    $('.back2').click(function(e){ e.preventDefault();

         $('.choose_extra').trigger('click');

    });

    $('.choose_extra').click(function(e){

        $('.choose_extra').addClass('active');

        $('.review_book').removeClass('active');

        

        $('.choose_extra_box').addClass('current');

        $('.review_book_box').removeClass('current');

        

    });

    

    var location;

    var location_text;

    var check_pickup_date;

    var return_date;

    var pickup_time;

    var return_time;

     var cdw=0; 

     var driver=0;

     var baby=0; 

     var gps=0;

     var days=0;

     var amount=0;

     var tot=0;

     

    $('#baby_qty').change(function(e){ 

        var babyqty=parseInt($(this).val()*10);        

        $('#baby').val(babyqty);

        $('.baby_qty_html').html(babyqty);

    });

    

        

    $('.next').click(function(e){ e.preventDefault();

        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        location=$('#location').val();            

        //check_pickup_date=$('#check_pickup_date').val();            
        check_pickup_date=$('#check_pickup_date').val().split('-').reverse();                                            
        check_pickup_date[1] = months.indexOf(check_pickup_date[1]);
        check_pickup_date = new Date(check_pickup_date.join('-'));
        
        //return_date=$('#return_date').val();   
        return_date=$('#return_date').val().split('-').reverse();                                            
        return_date[1] = months.indexOf(return_date[1]);
        return_date = new Date(return_date.join('-'));

        

        pickup_time=$('#pickup_time').val().replace(':','.');            

        return_time=$('#return_time').val().replace(':','.');

        var flag=1;

        

        //console.log(check_pickup_date); console.log(return_date); console.log(pickup_time); console.log(return_time); //return false;

        

        $('.all_field_valid').addClass('hidden');

        if(!location || !check_pickup_date || !return_date || !pickup_time || !return_time ){

            $('.all_field_valid').removeClass('hidden').html('All fields are required.');            

            flag=2;

        } else if(check_pickup_date && return_date && check_pickup_date>return_date){

            $('#return_date').css('border','1px solid red');

            $('#return_time').css('border','1px solid red');

            $('.all_field_valid').html('Return Date and Time must be greater than Pick-up Date and Time.').removeClass('hidden');

            flag=2;

        } else if(check_pickup_date && return_date && check_pickup_date==return_date && pickup_time>=return_time){

            $('#return_date').css('border','1px solid red');

            $('#return_time').css('border','1px solid red');

            $('.all_field_valid').html('Return Date and Time must be greater than Pick-up Date and Time.').removeClass('hidden');

            flag=2;

        } else {

            $('#return_date').css('border','1px solid #c9d2e5');

            $('#return_time').css('border','1px solid #c9d2e5');

            $('.all_field_valid').addClass('hidden');

        }

        

        if(flag==1){

            //console.log('entered');

            $('.process-tab-row').fadeIn(1000);

            $('.location_date_div').fadeOut(1000);

            

            location=$('#location').val();     

            location_text=$("#location option:selected").text();

            check_pickup_date=$('#check_pickup_date').val();            

            return_date=$('#return_date').val();

            pickup_time=$('#pickup_time').val();            

            return_time=$('#return_time').val();        

        }

         

    });    

    

    $('.continue').click(function(e){ e.preventDefault();

        var model_name=$('.model_name').text();

              

        if ($('#cdw').is(":checked")){ cdw=$('#cdw').val();  } else { cdw=0; }

        if ($('#driver').is(":checked")){ driver=$('#driver').val();  } else { driver=0; }

        if ($('#baby').is(":checked")){ baby=$('#baby').val();  } else { baby=0; }

        if ($('#gps').is(":checked")){ gps=$('#gps').val();  } else { gps=0; }

                

        var start = new Date(check_pickup_date.replace(/\-/g,' ')+" "+pickup_time.replace('.',':')+":00 UTC");

        var end   = new Date(return_date.replace(/\-/g,' ')+" "+return_time.replace('.',':')+":00 UTC");

        /*var d = start.getDate();

        var m =  start.getMonth();

        var y = start.getFullYear();*/        

                       

        var diff  = new Date(end - start);

        days  = parseInt(diff/1000/60/60/24);        

        if(days<=1){ days=1; var day_text='Day'; } else{ var day_text='Days'; } 

        //console.log(days);

        if(days>30){

            var model_price=$('.model_price_monthly').attr('data-price');              

            var oneday=parseFloat(model_price/30)*(days-30);

            amount=parseFloat(model_price)+parseFloat(oneday);

        } else if(days==30){

            var model_price=$('.model_price_monthly').attr('data-price');              

            amount=parseFloat(model_price);

        } else if(days>7){

            var model_price=$('.model_price_weekly').attr('data-price');  

             var oneday=parseFloat(model_price/7)*(days-7);

            amount=parseFloat(model_price)+parseFloat(oneday);

        }else if(days==7){

            var model_price=$('.model_price_weekly').attr('data-price');  

            amount=parseFloat(model_price);

        } else{

            var model_price=$('.model_price').attr('data-price');  //daily price

            amount=parseFloat(model_price)*days;

        }

        

        var total=amount;        

        

        var extra='';

        var extra_total=0;
        //console.log(baby);
        
        if(cdw || driver || baby || gps){

            var cdw_amount=0;

            var driver_amount=0;

            var baby_amount=0;

            var gps_amount=0;

            extra='<tr><td colspan="3"  ><h5 style="text-align: center;">Choosen Extras</h5></td></tr>';

            if(cdw){

                cdw_amount=parseFloat(cdw*days).toFixed(2);

                extra +='<tr><td>CDW</td><td><div class="common-content">'+cdw_amount+' QAR For '+days+' '+day_text+'</div></td><td>&nbsp;</td></tr>';                   }

            if(driver){

                driver_amount=parseFloat(driver*days).toFixed(2);

                extra +='<tr><td>Driver</td><td><div class="common-content">'+driver_amount+' QAR For '+days+' '+day_text+'</div></td><td>&nbsp;</td></tr>';

            }

            if(baby){
                
                baby_amount=parseInt(baby*days);
                extra +='<tr><td>Baby Car Seats</td><td><div class="common-content">'+baby_amount+' QAR For '+days+' '+day_text+'</div></td><td>&nbsp;</td></tr>';
            }

            if(gps){

                gps_amount=parseInt(gps*days);

                extra +='<tr><td>GPS</td><td><div class="common-content">'+gps_amount+' QAR For '+days+' '+day_text+'</div></td><td>&nbsp;</td></tr>';

            }                       

            extra_total=parseFloat(cdw_amount)+parseFloat(driver_amount)+parseFloat(baby_amount)+parseFloat(gps_amount);

        }        

        tot=parseFloat(total)+parseFloat(extra_total);        

        //console.log(tot.toLocaleString());

        

        $('.booking_details_wrapper').html('<table><tr><td>Your Car</td><td><div class="common-content">'+model_name+'</div></td><td></td></tr><tr><td>Pickup and Return Location</td><td><div class="common-content">'+location_text+'</div></td><td></td></tr><tr><td>Pick-up Date and Time</td><td><div class="common-content">'+check_pickup_date+" "+pickup_time+'</div></td><td> </td></tr><tr><td>Return Date and Time</td><td><div class="common-content">'+return_date+" "+return_time+'</div></td><td> </td></tr><tr><td>Amount</td><td><div class="common-content">'+parseInt(amount).toLocaleString()+' QAR For '+days+' Days</div></td><td> </td></tr>'+extra+'<tr><td>Total</td><td><div class="common-content"><b>'+parseInt(tot).toLocaleString()+' QAR</b></div></td><td>&nbsp;</td></tr></table>');

        

        $('.choose_extra').removeClass('active');

        $('.review_book').addClass('active');

        

        $('.choose_extra_box').removeClass('current');

        $('.review_book_box').addClass('current');

        

        $('.location_date_div').fadeOut(1000);

    });  
    $('body').on('click','.confirm_booking1', function(e){ 
        e.preventDefault();
        
    });    
    
    $('body').on('click','.confirm_booking', function(e){ e.preventDefault();

        //location_text;        
        var terms=$('#terms').is(':checked');
        if(!terms){
            alert('You need to agree to the Terms and Conditions before booking.');
            return false;
        }
        
        var id=$('.model_name').attr('data-id');

        var url=$('.model_name').attr('data-url');

        var model_name=$('.model_name').text();

        

        if(days>=30){

            var offer=$('.model_price_montly').attr('data-offer');

        } else if(days>=7){

           var offer=$('.model_price_weekly').attr('data-offer');

        }else{

           var offer=$('.model_price').attr('data-offer');

        }

        

        $('.confirm_booking').html('<img src="'+$('.model_name').attr('data-loader-image')+'" style="width: 50%;">').removeClass('confirm_booking').addClass('confirm_booking1');

        $.ajax({

            type: "GET",

            url: url,

            data : {id:id,model_name:model_name,location_text:location_text,location:location,check_pickup_date:check_pickup_date,return_date:return_date,pickup_time:pickup_time,return_time:return_time,cdw:cdw,driver:driver,baby:baby,gps:gps,days:days,amount:amount,tot:tot,offer:offer},

            dataType : "json",

            success : function(data){

               $('.success_booking').trigger('click');  

               $('.confirm_booking1').html('Confirm Booking');

            }

        });

         

    });

    

    $('.next').click(function(e){ e.preventDefault(); });

    

     $("#reg_form").validate({

           rules: {

            primary_phone: {              

              digits: true

            },

            secondary_phone: {              

              digits: true

            }, 

            confirm_password: {

              equalTo: "#password"

            }            

          },



          submitHandler: function (form) {

            $.ajax({

              url: form.action,

              type: form.method,

              data: $(form).serialize(),

              success: function (response) {

                  if(response=='1'){

                      $('.register-user-popup').remove();

                      $('.new-user-popup').remove();

                      //$('.continue').addClass('hidden');

                      $('.continue').removeClass('hidden');

                      $.colorbox.close();

                      //alert('Success');

                  } else{

                      alert(response);

                  }

                /*if (response == 'Message has been sent') {

                  $("#contactForm").trigger("reset");

                }

                $('#message').html(response);*/

                

              }

            });

          }

        });

        $("#login_form").validate({ 
          submitHandler: function (form) {
            $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function (response) {
                  if(response=='1'){
                      $('.register-user-popup').remove();
                      $('.new-user-popup').remove();
                      $('.continue-guest-popup').remove();
                      
                      //$('.continue').addClass('hidden');
                      $('.continue').removeClass('hidden');
                      $.colorbox.close();
                      //alert('Success');
                  } else{                      
                    alert('Incorrect username or password.');
                  }

                /*if (response == 'Message has been sent') {
                  $("#contactForm").trigger("reset");
                }
                $('#message').html(response);*/                
              }
            });
          }
        });
        
        $("#reset_form").validate({  

          submitHandler: function (form) {

            $.ajax({

              url: form.action,

              type: form.method,

              data: $(form).serialize(),

              success: function (response) {
                  $('.reset_message').html(response);
                  //console.log(response);
              }
            });
          }
        });
        
$('.terms_readmore').colorbox({
        inline:true,
        href:'#terms-popup',
        width:teampopupwidth1,
        closeButton:false,
        overlayClose:false

    });
    $('.inquire_popup_link').colorbox({
            inline:true,
            href:'#inquire_popup',
            width:popupwidth
    }); 
    
    $('.continue-guest-popup').colorbox({
            inline:true,
            href:'#guest_popup',
            width:popupwidth
    });
});

$('.agree_button').click(function(e){ e.preventDefault();    
    $('#terms').prop('checked', true);
    $.colorbox.close();
});

$('#terms').click(function(){
     var terms=$('#terms').is(':checked');
        if(terms){
           $('.terms_readmore').trigger('click');
        }
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

$("#inquire_popup_form").validate({
           rules: {
            primary_phone: {              
              digits: true
            },
            secondary_phone: {              
              digits: true
            },                        
          },
          submitHandler: function (form) {
            $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function (response) {
                  if(response=='1'){                      
                      $.colorbox.close();
                      $('.enquiry_success').trigger('click');
                      //alert('Success');
                  } else{
                      alert(response);
                  }                                
              }
            });
          }
        }); 
        
$("#continue_guest_form").validate({
           rules: {
            primary_phone: {              
              digits: true
            }                                  
          },
          submitHandler: function (form) {
            $.ajax({
              url: form.action,
              type: form.method,
              data: $(form).serialize(),
              success: function (response) {
                  if(response=='1'){                      
                      $('.register-user-popup').remove();
                      $('.new-user-popup').remove();
                      $('.continue-guest-popup').remove();
                      $('.continue').removeClass('hidden');
                      $.colorbox.close();
                      //alert('Success');
                  } else{
                      alert(response);
                  }                                
              }
            });
          }
        }); 