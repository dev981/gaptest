(function()
{
   
     jQuery('.linkdrive').click(function()
     {
         var url=jQuery('.authenticate').val();
         var newid=jQuery('.newnodeurl').val();
          var baseid=jQuery('.baseurlpath').val();
         var urlparent= baseid+"/node/"+newid+"/translations";
         var w=window.open(url,'popupWindow', 'width=1100,height=auto','toolbar=0,location=0,menubar=0,scrollbars=1');
      
	     
                var timer = setInterval(function() {   
					if(w.closed) {  
						clearInterval(timer);   
					   window.location.href = urlparent;
					}  
				}, 1000);  
        
        
         
     });
     
     /**
     * 
     * disable the password field for all languages except english
     */
     var langcode=jQuery('html').attr('lang');

	 if(langcode!="en")
    {
	 jQuery('.form-type-password-confirm').css('display','none');
         jQuery('.user-register-form .form-type-password').css('display','none');
         jQuery('.user-form .form-type-password').css('display','none');
    }
    
  var formuser=jQuery('.user-form').attr('action');
  if(formuser.indexOf('add')!==-1)
  {
      var splittr= formuser.split('/');
    var splitpop =splittr.pop();
    if(splitpop!="en")
    {
        jQuery('.form-type-password-confirm').css('display','none');
         jQuery('.user-register-form .form-type-password').css('display','none');
         jQuery('.user-form .form-type-password').css('display','none');
    }
  }
     
    
     
   
     
})(jQuery);




