/*
 * for stop a link to page refresh
 */
 function javscriptvoid(){
	 return false;
 }
jQuery(window).load(function(){
	jQuery('.front #block-frontpagemenu-2 .contextual .trigger').click(function() { return false; });
	jQuery('.front #block-frontpagemenu-2 .contextual .trigger').bind('click',function(){
	  var check = jQuery(this).attr('aria-pressed');
	  if(check == 'false'){
		  jQuery(this).attr('aria-pressed','true');
		  jQuery(this).parent('.contextual').addClass('open');
		  jQuery(this).parent('.contextual').find('.contextual-links').removeAttr('hidden');
		  jQuery(this).parent('.contextual').parent('.contextual-region').addClass('focus');
		  jQuery(this).text('Close Front Page Menu configuration options'); 
	  }else{
		  jQuery(this).attr('aria-pressed','false');
		  jQuery(this).parent('.contextual').removeClass('open');
		  jQuery(this).parent('.contextual').find('.contextual-links').attr('hidden');
		  jQuery(this).parent('.contextual').parent('.contextual-region').removeClass('focus');
		  jQuery(this).text('open Front Page Menu configuration options'); 
	  }
	});
	jQuery('.front #block-frontpagemenu-2 .contextual').click(function() { return false; });
	jQuery('.front #block-frontpagemenu-2 .contextual').bind('click',function(){
	  var check = jQuery(this).find('.trigger').attr('aria-pressed');
	  if(check == 'false'){
		  jQuery(this).find('.trigger').attr('aria-pressed','true');
		  jQuery(this).addClass('open');
		  jQuery(this).find('.contextual-links').removeAttr('hidden');
		  jQuery(this).parent('.contextual-region').addClass('focus');
		  jQuery(this).find('.trigger').text('Close Front Page Menu configuration options'); 
	  }else{
		  jQuery(this).find('.trigger').attr('aria-pressed','false');
		  jQuery(this).removeClass('open');
		  jQuery(this).parent('.contextual-region').removeClass('focus');
		  jQuery(this).find('.trigger').text('open Front Page Menu configuration options');  
	  }
	});
	jQuery('.front_page_menu #block-frontpagemenu-2 ul.contextual-links').mouseenter(function(){
	  jQuery(this).show();
	});
	jQuery('.front_page_menu #block-frontpagemenu-2 ul.contextual-links').mouseleave(function(){
	  jQuery(this).show();
	});
	/**
	 * for mobile screen
	 */
	jQuery('.mobile_menu #block-frontpagemenu-2 .contextual .trigger').click(function() { return false; });
	jQuery('.mobile_menu #block-frontpagemenu-2 .contextual .trigger').bind('click',function(){
	  var check = jQuery(this).attr('aria-pressed');
	  if(check == 'false'){
		  jQuery(this).attr('aria-pressed','true');
		  jQuery(this).parent('.contextual').addClass('open');
		  jQuery(this).parent('.contextual').find('.contextual-links').removeAttr('hidden');
		  jQuery(this).parent('.contextual').parent('.contextual-region').addClass('focus');
		  jQuery(this).text('Close Front Page Menu configuration options'); 
	  }else{
		  jQuery(this).attr('aria-pressed','false');
		  jQuery(this).parent('.contextual').removeClass('open');
		  jQuery(this).parent('.contextual').find('.contextual-links').attr('hidden');
		  jQuery(this).parent('.contextual').parent('.contextual-region').removeClass('focus');
		  jQuery(this).text('open Front Page Menu configuration options'); 
	  }
	});
	jQuery('.mobile_menu #block-frontpagemenu-2 .contextual').click(function() { return false; });
	jQuery('.mobile_menu #block-frontpagemenu-2 .contextual').bind('click',function(){
	  var check = jQuery(this).find('.trigger').attr('aria-pressed');
	  if(check == 'false'){
		  jQuery(this).find('.trigger').attr('aria-pressed','true');
		  jQuery(this).addClass('open');
		  jQuery(this).find('.contextual-links').removeAttr('hidden');
		  jQuery(this).parent('.contextual-region').addClass('focus');
		  jQuery(this).find('.trigger').text('Close Front Page Menu configuration options'); 
	  }else{
		  jQuery(this).find('.trigger').attr('aria-pressed','false');
		  jQuery(this).removeClass('open');
		  jQuery(this).parent('.contextual-region').removeClass('focus');
		  jQuery(this).find('.trigger').text('open Front Page Menu configuration options');  
	  }
	});
	jQuery('.mobile_menu #block-frontpagemenu-2 ul.contextual-links').mouseenter(function(){
	  jQuery(this).show();
	});
	jQuery('.mobile_menu #block-frontpagemenu-2 ul.contextual-links').mouseleave(function(){
	  jQuery(this).show();
	});
	
	jQuery('#block-barti-footer .contextual').click(function(){
		jQuery('#footer_container').css('height','150px');
	});
	jQuery('#block-barti-footer .contextual').on( "mouseleave", function(){
	  jQuery('#footer_container').attr('style','');
	});
	
	jQuery('#block-barti-frontpagefootermenu-2 .contextual').click(function(){
		jQuery('#footer_container').css('height','150px');
	});
	jQuery('#block-barti-frontpagefootermenu-2 .contextual').on( "mouseleave", function(){
	  jQuery('#footer_container').attr('style','');
	});
	
	/*jQuery('#block-innerfootermenu-2 .contextual').click(function(){
	   jQuery('#site-footer__wrapper').css('height','250px');
	});
	jQuery('#block-innerfootermenu-2 .contextual').on( "mouseleave", function(){
	  jQuery('#site-footer__wrapper').attr('style','');
	});*/
	
	/*jQuery('#block-barti-copyright .contextual').click(function(){
	   jQuery('#site-footer__wrapper').css('height','250px');
	});
	jQuery('#block-barti-copyright .contextual').on( "mouseleave", function(){
	  jQuery('#site-footer__wrapper').attr('style','');
	});*/
});
/* This file contains the Js library for the custom modules*/
(function() {

    jQuery(window).load(function(){
    jQuery('.google_custom_results .gsc-search-button').removeAttr('src');
	     var langcode=jQuery('html').attr('lang');
				
     if(navigator.appVersion.match(/MSIE [\d.]+/))
	 {
        
		 setTimeout(
         function() 
         {
			if(langcode=="fa")
			{
				
				var searchresults='هیچ نتیجه ای';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			   
			}
			
            else if(langcode=="ar")
			{
				
				var searchresults='لا نتائج';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			   
			}
			
		    else if(langcode=="ku")
			{
				
				var searchresults='نەو ريزەلتس';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			   
			}

			
		   if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
		{
			jQuery('.gsc-webResult .gs-snippet').text(searchresults);
		}
           
		 },1500);
     }
	 else if(navigator.userAgent.match(/Trident.*rv\:11\./))
     {
      
	     setTimeout(
         function() 
         {
			if(langcode=="fa")
			{
			   var searchresults='هیچ نتیجه ای';
			   jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");

			}
			
			else if(langcode=="ar")
			{
				
				var searchresults='لا نتائج';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			   
			}
			
		    else if(langcode=="ku")
			{
				
				var searchresults='نەو ريزەلتس';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			   
			}

			
		   if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
		{
			jQuery('.gsc-webResult .gs-snippet').text(searchresults);
		}

            
		    },1000);
     }
//        console.clear();
 
});
    // Google custom search box code
    var cx = '015573355838489954495:y2zdqy3t_mw';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
        
    // On change of language dropdown , it will redirect 
    // that page with add language prefix in current path
    jQuery('.langselect').change(function()
    {           
        location.href=jQuery(this).val();
    })
    // Slide menu section to bottom for mobile screens
    jQuery('.openleftbar').click(function()
    {
        jQuery( ".responsivemenu" ).slideToggle( "slow" );
        var locationval= window.location.href;
        var urlvalue=locationval.split('#')[0];
        window.location.href= urlvalue + '#show-block-gapminder-main-menu';   
        jQuery('.openleftbar').hide();
        jQuery('.closeleftbar').show();
    })
    // Slide menu section to top for mobile screens    
    jQuery('.closeleftbar').click(function()
    {
        jQuery( ".responsivemenu" ).slideToggle( "slow" );
        var locationval= window.location.href;
        var urlvalue=locationval.split('#')[0];
        window.location.href= urlvalue + '#hide-block-gapminder-main-menu';   
        jQuery('.closeleftbar').hide();
        jQuery('.openleftbar').show();        
    })    
    
    // Prevent click from redirection 
    /**
     * Disable the redirection for the menus
     * 
     */
//    jQuery('#header #block-mainnavigation ul.menu > li > a').click(function(e)
//    {
//        e.preventDefault();
//    })     
        
    // Prevent click from redirection for mobile screens    
    /**
     * Disable the redirection for mobile screens
     */
//    jQuery('.mobile_menu.inner_menu ul.menu > li > a ').click(function(e)
//    {
//        e.preventDefault();
//    })  
var referrer = window.location.href;
	var strsplit=referrer.split('/');
	//alert(strsplit[5]);
	var url=location.protocol + "//" + location.host + "/gapmindernew/node/" + strsplit[5] + "/translations" ;
	
//var checkvalue = referrer.contains("translations");
if(referrer==url)
{
jQuery(window).bind("pageshow", function(event) {
    if (event.originalEvent.persisted) {
        window.location.reload(url);
    }
});
}
})();
jQuery(document).ready(function() {
	jQuery('#block-frontpagemenu-2 .contextual .trigger').click(function() { return false; });
	jQuery('#block-frontpagemenu-2 .contextual .trigger').bind('click',function(){
		alert("here");
	  jQuery(this).attr('aria-pressed','true');
	  jQuery(this).parent('.contextual').addClass('open');
		jQuery(this).parent('.contextual').find('.contextual-links').removeAttr('hidden');
	  jQuery(this).parent('.contextual').parent('.contextual-region').addClass('focus');
	});
	jQuery('#block-frontpagemenu-2 .contextual .trigger').bind('focus',function(){
	  jQuery(this).parent('.contextual').parent('.contextual-region').addClass('focus');
	});

	/*
	 * 28 jan 16
	 * @Return change filter form option value when created is selected
	 */
	 var filtercheck= jQuery('#edit-sort-by').val();
	 if(filtercheck == 'created'){
		 jQuery('#edit-sort-order option:contains("DESC")').text('Newest');
         jQuery('#edit-sort-order option:contains("ASC")').text('Oldest');
	  }
	  else{
		 jQuery('#edit-sort-order option:contains("Newest")').text('Desc');
		 jQuery('#edit-sort-order option:contains("Oldest")').text('Asc');
	  }
	jQuery('#edit-sort-by').bind('change',function(){
	  var filter = jQuery(this).val();
		  if(filter == 'created'){
		  var tex = jQuery('#edit-sort-order option').eq(0).text();
		  if(tex == 'Desc'){
			jQuery('#edit-sort-order option').eq(0).text('Newest');
			jQuery('#edit-sort-order option').eq(1).text('Oldest');
		  }
		  else{
			jQuery('#edit-sort-order option').eq(0).text('Oldest');
			jQuery('#edit-sort-order option').eq(1).text('Newest');
		  }
		}
	  else{
		var tex = jQuery('#edit-sort-order option').eq(0).text();
		  if(tex == 'Newest'){
			jQuery('#edit-sort-order option').eq(0).text('Desc');
			jQuery('#edit-sort-order option').eq(1).text('Asc');
		  }
		  else{
			jQuery('#edit-sort-order option').eq(0).text('Asc');
			jQuery('#edit-sort-order option').eq(1).text('Desc');
		  }
	  }
	});
	/* end here */
	var referrer = window.location.href;
	var strsplit=referrer.split('/');
	var referrerprev = document.referrer;
	var checkvalue = referrerprev.indexOf("translations/add") != -1;
	if(checkvalue==true)
	{
   if (window.history && window.history.pushState) {

        jQuery(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              
              window.history.forward();

            }
          }
        });

      window.history.pushState('forward', '', referrer);
      }
	}



  Tipped.create('.boxes .box');

    jQuery('#footer_container').click(function(){
      jQuery('.responsivemenu').hide();
  });
  jQuery('#main-wrapper').click(function(){
      jQuery('.responsivemenu').hide();
      jQuery('body').removeClass('fixedposition');
  });
  
  /*
   *  for add placeholder in menu gogal hearch
   */
  jQuery('.user-pass').submit(function()
  {
      jQuery('input[type=submit]', this).attr('disabled', 'disabled');
  });
  
   jQuery('.fc-right-part .a2b_button_twitter').click(function(){
       jQuery(this).removeAttr("href");
        var twitter_path = jQuery(this).attr('rel');
         var new_twpath = twitter_path.replace('com/gapmindernew','com'); 
         window.open(new_twpath, "popupWindow", "width=600,height=400,scrollbars=yes");    
         jQuery(this).attr("href",new_twpath);
         return false;
    });
    jQuery('.fc-right-part .a2b_button_facebook').click(function(){
       jQuery(this).removeAttr("href");
        var facebook_path = jQuery(this).attr('rel');
        var new_fbpath = facebook_path.replace('com/gapmindernew','com');       
        window.open(new_fbpath, "popupWindow", "width=600,height=400,scrollbars=yes");
        jQuery(this).attr("href",new_fbpath);
        return false;
    });
    jQuery('.fc-right-part .a2b_button_email').click(function(){
       jQuery(this).removeAttr("href");
        var email_url = jQuery(this).attr('rel');
        var new_emurl = email_url.replace('com/gapmindernew','com');       
        jQuery(this).attr("href",new_emurl);
    });
    
    jQuery('.openleftbar').click(function()
    {
        jQuery('body').toggleClass('fixedposition');
    });
    jQuery('.closeleftbar').click(function()
    {
         jQuery('body').toggleClass('fixedposition');
    });

	/*
	* to add placeholder for IE browser 9,10 and 11
	*/
     var langcode=jQuery('html').attr('lang');

	
     if(navigator.appVersion.match(/MSIE [\d.]+/))
	 {
        
		 setTimeout(
         function() 
         {
			if(langcode=="fa")
			{
				var placeholderText = 'جستجو';
				var searchresults='هیچ نتیجه ای';
				var clearresults='نتایج روشن';
			   jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			   jQuery('#edit-sort-by option[value="field_order_value"]').text('ترتیب');
			   jQuery('#edit-sort-by option[value="title"]').text('عنوان');
			    jQuery('#edit-sort-by option[value="created"]').text('ایجاد شد');
				 jQuery('#edit-sort-order option[value="ASC"]').text('صعودی');
				  jQuery('#edit-sort-order option[value="DESC"]').text('و توصیف محصول،');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "درخواست"); 
				  jQuery('.views-exposed-form .form-item-sort-order label').text('ترتیب');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('مرتب سازی بر اساس');
			}
			else if(langcode=="de")
			{
				var placeholderText = 'Suche';
                var clearresults='klare Ergebnisse';
				var searchresults='Keine Ergebnisse';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Auftrag');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('Erstellt');
				 jQuery('#edit-sort-order option[value="ASC"]').text('asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('Desc');
				  jQuery('.views-exposed-form .button.form-submit').attr("value", "Bewerben"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Auftrag');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sortiere nach');
			}
			else if(langcode=="pt-br")
			{
				var placeholderText = 'busca';
				var clearresults='resultados claros';
				var searchresults='Sem resultados';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Ordem');
			   jQuery('#edit-sort-by option[value="title"]').text('Título');
			    jQuery('#edit-sort-by option[value="created"]').text('Criado');
				 jQuery('#edit-sort-order option[value="ASC"]').text('Asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				  jQuery('.views-exposed-form .button.form-submit').attr("value", "Aplicar"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Ordem');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Ordenar por');
			}
			else if(langcode=="sv")
			{
				var placeholderText = 'Sök';
				var clearresults='tydliga resultat';
			    var searchresults='Inga resultat';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Beställa');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('Skapad');
				 jQuery('#edit-sort-order option[value="ASC"]').text('asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Aplicar"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Beställa');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sortera efter');
			}
			else if(langcode=="ar")
			{
				var placeholderText = 'بحث';
				var clearresults='نتائج واضحة';
			    var searchresults='لا نتائج';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
				jQuery('#edit-sort-by option[value="field_order_value"]').text('النظام');
			   jQuery('#edit-sort-by option[value="title"]').text('العنوان');
			    jQuery('#edit-sort-by option[value="created"]').text('مكون');
				 jQuery('#edit-sort-order option[value="ASC"]').text('تصاعدي');
				   jQuery('#edit-sort-order option[value="DESC"]').text('تفاصيل');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "تطبيق"); 
					 jQuery('.views-exposed-form .form-item-sort-order label').text('النظام');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('ترتيب حسب');
			}
			else if(langcode=="ku")
			{
				var placeholderText = 'سێچ';
				var clearresults='كليەر ريزەلتس';
			    var searchresults='نەو ريزەلتس';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
				jQuery('#edit-sort-by option[value="field_order_value"]').text('ئۆردەر');
			   jQuery('#edit-sort-by option[value="title"]').text('تايتەل');
			    jQuery('#edit-sort-by option[value="created"]').text('كريێيتەد');
				 jQuery('#edit-sort-order option[value="ASC"]').text('ئاسك');
				   jQuery('#edit-sort-order option[value="DESC"]').text('دەسك');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "ئەپلاى"); 
					jQuery('.views-exposed-form .form-item-sort-order label').text('النظام');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('ترتيب حسب');
			}
			else if(langcode=="nl")
			{
				var placeholderText = 'zoeken';
				var clearresults='duidelijke resultaten';
			    var searchresults='Geen resultaten';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Bestellen');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('gemaakt');
				 jQuery('#edit-sort-order option[value="ASC"]').text('ASC');
				   jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Solliciteren"); 
					   jQuery('.views-exposed-form .form-item-sort-order label').text('Bestellen');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sorteer op');
			}
			else if(langcode=="fi")
			{
				var placeholderText = 'haku';
				var clearresults='Tyhjennä tulokset';
			    var searchresults='Ei tuloksia';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Tilata');
			   jQuery('#edit-sort-by option[value="title"]').text('otsikko');
			    jQuery('#edit-sort-by option[value="created"]').text('Luotu');
				 jQuery('#edit-sort-order option[value="ASC"]').text('Asc');
				 jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				 jQuery('.views-exposed-form .button.form-submit').attr("value", "käyttää"); 
				  jQuery('.views-exposed-form .form-item-sort-order label').text('Tilata');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Järjestä');
			}
			else
			{
               var placeholderText = 'Search';

			}
			jQuery('.gsc-input').attr('title', placeholderText);
		   jQuery('.google-search-box .gsc-search-button').attr("title", placeholderText); 
		   jQuery('.gsc-search-box .gsc-search-button').attr("title", placeholderText);
		   jQuery('.gsc-clear-button').attr("title", clearresults); 
		   if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
		{
			jQuery('.gsc-webResult .gs-snippet').text(searchresults);
		}
            jQuery('.gsc-input').val(placeholderText);
            jQuery('.gsc-input').blur(function(){
            jQuery(this).val() == '' ? jQuery(this).val(placeholderText) : false;
            });
            jQuery('.gsc-input').focus(function(){
            jQuery(this).val() == placeholderText ? jQuery(this).val('') : false;
            });
		 },1500);
     }
     else if(navigator.userAgent.match(/Trident.*rv\:11\./))
     {
      
	     setTimeout(
         function() 
         {
			if(langcode=="fa")
			{
				var placeholderText = 'جستجو';
				var searchresults='هیچ نتیجه ای';
				var clearresults='نتایج روشن';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
				jQuery('#edit-sort-by option[value="field_order_value"]').text('ترتیب');
			   jQuery('#edit-sort-by option[value="title"]').text('عنوان');
			    jQuery('#edit-sort-by option[value="created"]').text('ایجاد شد');
				 jQuery('#edit-sort-order option[value="ASC"]').text('صعودی');
				  jQuery('#edit-sort-order option[value="DESC"]').text('و توصیف محصول،');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "درخواست"); 
				  jQuery('.views-exposed-form .form-item-sort-order label').text('ترتیب');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('مرتب سازی بر اساس');
			}
			else if(langcode=="de")
			{
				var placeholderText = 'Suche';
				var clearresults='klare Ergebnisse';
				var searchresults='Keine Ergebnisse';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Auftrag');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('Erstellt');
				 jQuery('#edit-sort-order option[value="ASC"]').text('asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('Desc');
				  jQuery('.views-exposed-form .button.form-submit').attr("value", "Bewerben"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Auftrag');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sortiere nach');
			}
			else if(langcode=="pt-br")
			{
				var placeholderText = 'busca';
				var clearresults='resultados claros';
								var searchresults='Sem resultados';
								jQuery('#edit-sort-by option[value="field_order_value"]').text('Ordem');
			   jQuery('#edit-sort-by option[value="title"]').text('Título');
			    jQuery('#edit-sort-by option[value="created"]').text('Criado');
				 jQuery('#edit-sort-order option[value="ASC"]').text('Asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				  				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Aplicar"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Ordem');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Ordenar por');
			}
			else if(langcode=="sv")
			{
				var placeholderText = 'Sök';
				var clearresults='tydliga resultat';
				 var searchresults='Inga resultat';
				 jQuery('#edit-sort-by option[value="field_order_value"]').text('Beställa');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('Skapad');
				 jQuery('#edit-sort-order option[value="ASC"]').text('asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Aplicar"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Beställa');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sortera efter');
			}
			else if(langcode=="ar")
			{
				var placeholderText = 'بحث';
				var clearresults='نتائج واضحة';
			    var searchresults='لا نتائج';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
				jQuery('#edit-sort-by option[value="field_order_value"]').text('النظام');
			   jQuery('#edit-sort-by option[value="title"]').text('العنوان');
			    jQuery('#edit-sort-by option[value="created"]').text('مكون');
				 jQuery('#edit-sort-order option[value="ASC"]').text('تصاعدي');
				   jQuery('#edit-sort-order option[value="DESC"]').text('تفاصيل');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "تطبيق"); 
					 jQuery('.views-exposed-form .form-item-sort-order label').text('النظام');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('ترتيب حسب');
			}
			else if(langcode=="ku")
			{
				var placeholderText = 'سێچ';
				var clearresults='كليەر ريزەلتس';
			    var searchresults='نەو ريزەلتس';
				jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
				jQuery('#edit-sort-by option[value="field_order_value"]').text('ئۆردەر');
			   jQuery('#edit-sort-by option[value="title"]').text('تايتەل');
			    jQuery('#edit-sort-by option[value="created"]').text('كريێيتەد');
				 jQuery('#edit-sort-order option[value="ASC"]').text('ئاسك');
				   jQuery('#edit-sort-order option[value="DESC"]').text('دەسك');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "ئەپلاى"); 
					jQuery('.views-exposed-form .form-item-sort-order label').text('النظام');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('ترتيب حسب');
			}
			else if(langcode=="nl")
			{
				var placeholderText = 'zoeken';
				var clearresults='duidelijke resultaten';
			    var searchresults='Geen resultaten';
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Bestellen');
							   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('gemaakt');
				 jQuery('#edit-sort-order option[value="ASC"]').text('ASC');
				   jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Solliciteren"); 
					   jQuery('.views-exposed-form .form-item-sort-order label').text('Bestellen');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sorteer op');
			}
			else if(langcode=="fi")
			{
				var placeholderText = 'haku';
				var clearresults='Tyhjennä tulokset';
			    var searchresults='Ei tuloksia';
								jQuery('#edit-sort-by option[value="field_order_value"]').text('Tilata');
				jQuery('#edit-sort-by option[value="title"]').text('otsikko');
			    jQuery('#edit-sort-by option[value="created"]').text('Luotu');
				 jQuery('#edit-sort-order option[value="ASC"]').text('Asc');
				 jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				 jQuery('.views-exposed-form .button.form-submit').attr("value", "käyttää"); 
				  jQuery('.views-exposed-form .form-item-sort-order label').text('Tilata');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Järjestä');
			}
			else
			{
               var placeholderText = 'Search';
			     var searchresults='No Results';
			}
			jQuery('.gsc-input').attr('title', placeholderText);
			jQuery('.google-search-box .gsc-search-button').attr("title", placeholderText); 
					   jQuery('.gsc-clear-button').attr("title", clearresults);
		   jQuery('.gsc-search-box .gsc-search-button').attr("title", placeholderText);
		   if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
		{
			jQuery('.gsc-webResult .gs-snippet').text(searchresults);
		}

            jQuery('.gsc-input').val(placeholderText);
            jQuery('.gsc-input').blur(function(){
            jQuery(this).val() == '' ? jQuery(this).val(placeholderText) : false;
            });
            jQuery('.gsc-input').focus(function(){
            jQuery(this).val() == placeholderText ? jQuery(this).val('') : false;
            });
		    },1000);
     }
	 

	 jQuery('.user-register-form #edit-submit').click(function()
	 {
		  var langcode=jQuery('html').attr('lang');
		 if(langcode=="fa")
		 {
			
			 if(document.getElementById('edit-mail').validity.valueMissing==true)
			{
			document.getElementById('edit-mail').setCustomValidity('لطفا با پر کردن این فیلد');
			
			
			
			}
			else
			{
              document.getElementById('edit-mail').setCustomValidity('');
			if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('لطفا یک آدرس ایمیل وارد کنید');

				 
			 }
			 
				
			}
		 
		     
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('لطفا با پر کردن این فیلد');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
		 else if(langcode=="ar")
		 {
			
			 if(document.getElementById('edit-mail').validity.valueMissing==true)
			{
			document.getElementById('edit-mail').setCustomValidity('يرجى ملء هذا المجال');
			
			
			
			}
			else
			{
              document.getElementById('edit-mail').setCustomValidity('');
			if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('الرجاء إدخال عنوان البريد الإلكتروني الخاص بك');

				 
			 }
			 
				
			}
		 
		     
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('يرجى ملء هذا المجال');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
		 
		 else if(langcode=="ku")
		 {
			
			 if(document.getElementById('edit-mail').validity.valueMissing==true)
			{
			document.getElementById('edit-mail').setCustomValidity('پلييز فيل ئين ذيس فييلد');
			
			
			
			}
			else
			{
              document.getElementById('edit-mail').setCustomValidity('');
			if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('پلييز ئێنتە يۆ ئەمێيل ئەدرێس');

				 
			 }
			 
				
			}
		 
		     
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('پلييز فيل ئين ذيس فييلد');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
		 else if(langcode=="de")
	 {
	 
	 
	    if(document.getElementById('edit-mail').validity.valueMissing==true)
		{
		
        document.getElementById('edit-mail').setCustomValidity('Bitte füllen Sie dieses Feld aus');
		}
		else
		{
			
			document.getElementById('edit-mail').setCustomValidity('');
			 if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('Bitte geben Sie eine E-mail-Adresse ein');

				 
			 }

		}
		
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Bitte füllen Sie dieses Feld aus');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');

		}
		

		
		
	 }
	 
	  else if(langcode=="pt-br")
	 {
	 
	 
	     if(document.getElementById('edit-mail').validity.valueMissing==true)
		{
		
        document.getElementById('edit-mail').setCustomValidity('Por favor, preencha este campo');
		}
		else
		{
			
			document.getElementById('edit-mail').setCustomValidity('');
			 if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('por favor introduza um endereço de email');

				 
			 }
		}
		
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Por favor, preencha este campo');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');

		}
		
		
		
		
	 }
	 
	  else if(langcode=="sv")
	 {
	 
	 
	     if(document.getElementById('edit-mail').validity.valueMissing==true)
		{
		
        document.getElementById('edit-mail').setCustomValidity('Fyll i detta fält');
		}
		else
		{
			
			document.getElementById('edit-mail').setCustomValidity('');
						 if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('Ange en e-postadress');

				 
			 }
		}
		
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Fyll i detta fält');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		

		
		
	 }
	 
	 else if(langcode=="nl")
		 {
			
			 if(document.getElementById('edit-mail').validity.valueMissing==true)
			{
			document.getElementById('edit-mail').setCustomValidity('Gelieve op dit gebied te vullen');
			
			
			
			}
			else
			{
              document.getElementById('edit-mail').setCustomValidity('');
			if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('Voer een e-mailadres');

				 
			 }
			 
				
			}
		 
		     
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('Gelieve op dit gebied te vullen');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
		 else if(langcode=="fi")
		 {
			
			 if(document.getElementById('edit-mail').validity.valueMissing==true)
			{
			document.getElementById('edit-mail').setCustomValidity('Täytä tällä alalla');
			
			
			
			}
			else
			{
              document.getElementById('edit-mail').setCustomValidity('');
			if(document.getElementById('edit-mail').validationMessage=="Please enter an email address.")
			 {
				document.getElementById('edit-mail').setCustomValidity('Anna sähköpostiosoite');

				 
			 }
			 
				
			}
		 
		     
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('Täytä tällä alalla');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
	 });
	
			 jQuery('.user-login-form #edit-submit').click(function()
	 {
		  var langcode=jQuery('html').attr('lang');
		 if(langcode=="fa")
		 {
			 
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('لطفا با پر کردن این فیلد');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			if(document.getElementById('edit-pass').validity.valueMissing==true)
			{
			
			document.getElementById('edit-pass').setCustomValidity('لطفا با پر کردن این فیلد');
			}
			else
			{
				
				document.getElementById('edit-pass').setCustomValidity('');
			}
			
			
		 }
		 
		 
		 else if(langcode=="ar")
		 {
			 
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('يرجى ملء هذا المجال');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			if(document.getElementById('edit-pass').validity.valueMissing==true)
			{
			
			document.getElementById('edit-pass').setCustomValidity('يرجى ملء هذا المجال');
			}
			else
			{
				
				document.getElementById('edit-pass').setCustomValidity('');
			}
			
			
		 }
		 
		 
		 else if(langcode=="ku")
		 {
			 
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('پلييز فيل ئين ذيس فييلد');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			if(document.getElementById('edit-pass').validity.valueMissing==true)
			{
			
			document.getElementById('edit-pass').setCustomValidity('پلييز فيل ئين ذيس فييلد');
			}
			else
			{
				
				document.getElementById('edit-pass').setCustomValidity('');
			}
			
			
		 }
		 
		 else if(langcode=="de")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Bitte füllen Sie dieses Feld aus');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		
		if(document.getElementById('edit-pass').validity.valueMissing==true)
		{
		
        document.getElementById('edit-pass').setCustomValidity('Bitte füllen Sie dieses Feld aus');
		}
		else
		{
			
			document.getElementById('edit-pass').setCustomValidity('');
		}
		
		
	 }
	 
	  else if(langcode=="pt-br")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Por favor, preencha este campo');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		
		if(document.getElementById('edit-pass').validity.valueMissing==true)
		{
		
        document.getElementById('edit-pass').setCustomValidity('Por favor, preencha este campo');
		}
		else
		{
			
			document.getElementById('edit-pass').setCustomValidity('');
		}
		
		
	 }
	 
	  else if(langcode=="sv")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Fyll i detta fält');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		
		if(document.getElementById('edit-pass').validity.valueMissing==true)
		{
		
        document.getElementById('edit-pass').setCustomValidity('Fyll i detta fält');
		}
		else
		{
			
			document.getElementById('edit-pass').setCustomValidity('');
		}
		
		
	 }
	 
	 else if(langcode=="nl")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Gelieve op dit gebied te vullen');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		
		if(document.getElementById('edit-pass').validity.valueMissing==true)
		{
		
        document.getElementById('edit-pass').setCustomValidity('Gelieve op dit gebied te vullen');
		}
		else
		{
			
			document.getElementById('edit-pass').setCustomValidity('');
		}
		
		
	 }
	 
	 else if(langcode=="fi")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Täytä tällä alalla');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		
		if(document.getElementById('edit-pass').validity.valueMissing==true)
		{
		
        document.getElementById('edit-pass').setCustomValidity('Täytä tällä alalla');
		}
		else
		{
			
			document.getElementById('edit-pass').setCustomValidity('');
		}
		
		
	 }
	 
	 });
		
		
		jQuery('.user-pass #edit-submit').click(function()
	 {
		  var langcode=jQuery('html').attr('lang');
		 if(langcode=="fa")
		 {
			 
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('لطفا با پر کردن این فیلد');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
         else if(langcode=="ar")
		 {
			 
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('يرجى ملء هذا المجال');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
		 
		 else if(langcode=="ku")
		 {
			 
			if(document.getElementById('edit-name').validity.valueMissing==true)
			{
			document.getElementById('edit-name').setCustomValidity('پلييز فيل ئين ذيس فييلد');
			
			}
			else
			{
				document.getElementById('edit-name').setCustomValidity('');
				
			}
			
			
			
			
		 }
		 
		 else if(langcode=="de")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Bitte füllen Sie dieses Feld aus');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		

		
		
	 }
	 
	  else if(langcode=="pt-br")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Por favor, preencha este campo');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		
		
		
		
	 }
	 
	  else if(langcode=="sv")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Fyll i detta fält');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		

		
		
	 }
	 
	 else if(langcode=="nl")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Gelieve op dit gebied te vullen');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		

		
		
	 }
	 
	 
	 else if(langcode=="fi")
	 {
	 
	    if(document.getElementById('edit-name').validity.valueMissing==true)
		{
		document.getElementById('edit-name').setCustomValidity('Täytä tällä alalla');
        
		}
		else
		{
			document.getElementById('edit-name').setCustomValidity('');
			
		}
		

		
		
	 }
	 });
	
	/**to prevent for copy password from password field and paste in confirm password field**/
	jQuery('#edit-pass-pass1').bind("cut copy paste",function(e) {
          e.preventDefault();
      });

	  
	  
});


 


jQuery(window).load(function(){
	/*
	 *  30 nov 15
	 *  for apply button filter
	 */
	var filtercheck= jQuery('#edit-sort-by').val();

	 if(filtercheck == 'created'){
         jQuery('#edit-sort-order option:contains("Desc")').text('Newest');
         jQuery('#edit-sort-order option:contains("Asc")').text('Oldest');
	  }
	  else{
		 jQuery('#edit-sort-order option:contains("Newest")').text('Desc');
		 jQuery('#edit-sort-order option:contains("Oldest")').text('Asc');
	  }
	/*
	* to add placeholder for persian language in menu google search
	*/
     var langcode=jQuery('html').attr('lang');
    setTimeout(
    function() 
    {
		if(langcode=="fa")
		 {
			 jQuery('.gsc-input').attr("title", "جستجو");
			jQuery('.gsc-input').attr("placeholder", "جستجو");
			jQuery('.google-search-box .gsc-search-button').attr("title", "جستجو"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "جستجو");
			jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('اشتراک گذاری');
			jQuery('.gsc-clear-button').attr("title", "نتایج روشن"); 

			//alert(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'));
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("هیچ نتیجه ای");
			}
			jQuery('#edit-sort-by option[value="field_order_value"]').text('ترتیب');
			   jQuery('#edit-sort-by option[value="title"]').text('عنوان');
			    jQuery('#edit-sort-by option[value="created"]').text('ایجاد شد');
				 jQuery('#edit-sort-order option[value="ASC"]').text('صعودی');
				  jQuery('#edit-sort-order option[value="DESC"]').text('و توصیف محصول،');
				  jQuery('.views-exposed-form .button.form-submit').attr("value", "درخواست"); 
				  jQuery('.views-exposed-form .form-item-sort-order label').text('ترتیب');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('مرتب سازی بر اساس');
			
		 }
		 else if(langcode=="ar")
		 {
			  jQuery('.gsc-input').attr("title", "بحث");
			jQuery('.gsc-input').attr("placeholder", "بحث");
			jQuery('.google-search-box .gsc-search-button').attr("title", "بحث"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "بحث");
			jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('حصة');
			jQuery('.gsc-clear-button').attr("title", "نتائج واضحة"); 

			//alert(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'));
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("لا نتائج");
			}
			   jQuery('#edit-sort-by option[value="field_order_value"]').text('النظام');
			   jQuery('#edit-sort-by option[value="title"]').text('العنوان');
			   jQuery('#edit-sort-by option[value="created"]').text('مكون');
				 jQuery('#edit-sort-order option[value="ASC"]').text('تصاعدي');
				   jQuery('#edit-sort-order option[value="DESC"]').text('تفاصيل');
				    jQuery('.views-exposed-form .button.form-submit').attr("value", "تطبيق"); 
					 jQuery('.views-exposed-form .form-item-sort-order label').text('النظام');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('ترتيب حسب');
		 }
		 
		 else if(langcode=="ku")
		 {
			  jQuery('.gsc-input').attr("title", "سێچ");
			jQuery('.gsc-input').attr("placeholder", "سێچ");
			jQuery('.google-search-box .gsc-search-button').attr("title", "سێچ"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "سێچ");
			jQuery('.google-search-results .gsc-control-wrapper-cse').attr("dir","rtl");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('شێيە');
			jQuery('.gsc-clear-button').attr("title", "كليەر ريزەلتس"); 

			//alert(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'));
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("نەو ريزەلتس");
			}
			jQuery('#edit-sort-by option[value="field_order_value"]').text('ئۆردەر');
			   jQuery('#edit-sort-by option[value="title"]').text('تايتەل');
			    jQuery('#edit-sort-by option[value="created"]').text('كريێيتەد');
				 jQuery('#edit-sort-order option[value="ASC"]').text('ئاسك');
				   jQuery('#edit-sort-order option[value="DESC"]').text('دەسك');
				    jQuery('.views-exposed-form .button.form-submit').attr("value", "ئەپلاى"); 
					jQuery('.views-exposed-form .form-item-sort-order label').text('النظام');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('ترتيب حسب');
					
		 }
		 else if(langcode=="de")
		 {
			jQuery('.gsc-input').attr("title", "Suche");
			jQuery('.gsc-input').attr("placeholder", "Suche");
			jQuery('.google-search-box .gsc-search-button').attr("title", "Suche"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "Suche");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('Aktie');
			jQuery('.google-search-box .gsc-clear-button').attr("title", "klare Ergebnisse"); 

			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("Kein Ergebnis");
			}
			document.getElementById('edit-name').setCustomValidity('Bitte füllen Sie dieses Feld aus.');
			document.getElementById('edit-pass').setCustomValidity('Bitte füllen Sie dieses Feld aus.');
			jQuery('#edit-sort-by option[value="field_order_value"]').text('Auftrag');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('Erstellt');
				 jQuery('#edit-sort-order option[value="ASC"]').text('asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('Desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Bewerben"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Auftrag');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sortiere nach');
		 }
		 
		 else if(langcode=="pt-br")
		 {
			jQuery('.gsc-input').attr("title", "busca");
			jQuery('.gsc-input').attr("placeholder", "busca");
			jQuery('.google-search-box .gsc-search-button').attr("title", "busca"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "busca");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('Compartilhado');
			jQuery('.google-search-box .gsc-clear-button').attr("title", "resultados claros"); 
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("Sem resultado");
			}
			
			document.getElementById('edit-name').setCustomValidity('Por favor, preencha este campo .');
			document.getElementById('edit-pass').setCustomValidity('Por favor, preencha este campo .');
											jQuery('#edit-sort-by option[value="field_order_value"]').text('Ordem');
			   jQuery('#edit-sort-by option[value="title"]').text('Título');
			    jQuery('#edit-sort-by option[value="created"]').text('Criado');
				 jQuery('#edit-sort-order option[value="ASC"]').text('Asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Aplicar"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Ordem');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Ordenar por');
			
		 }
		 else if(langcode=="sv")
		 {
			jQuery('.gsc-input').attr("title", "Sök");
			jQuery('.gsc-input').attr("placeholder", "Sök");
			jQuery('.google-search-box .gsc-search-button').attr("title", "Sök"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "Sök");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('Dela');
					jQuery('.google-search-box .gsc-clear-button').attr("title", "tydliga resultat");
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("nr Resultat");
			}
			
			document.getElementById('edit-name').setCustomValidity('Fyll i det här fältet.');
			document.getElementById('edit-pass').setCustomValidity('Fyll i det här fältet.');
			jQuery('#edit-sort-by option[value="field_order_value"]').text('Beställa');
			   jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('Skapad');
				 jQuery('#edit-sort-order option[value="ASC"]').text('asc');
				  jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				   jQuery('.views-exposed-form .button.form-submit').attr("value", "Aplicar"); 
				   jQuery('.views-exposed-form .form-item-sort-order label').text('Beställa');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sortera efter');
			
		 }
		 
		 else if(langcode=="nl")
		 {
			jQuery('.gsc-input').attr("title", "zoeken");
			jQuery('.gsc-input').attr("placeholder", "zoeken");
			jQuery('.google-search-box .gsc-search-button').attr("title", "zoeken"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "zoeken");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('aandeel');
					jQuery('.google-search-box .gsc-clear-button').attr("title", "duidelijke resultaten");
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("Geen resultaten");
			}
			
			document.getElementById('edit-name').setCustomValidity('Gelieve op dit gebied te vullen.');
			document.getElementById('edit-pass').setCustomValidity('Gelieve op dit gebied te vullen.');
			jQuery('#edit-sort-by option[value="field_order_value"]').text('Bestellen');
			 jQuery('#edit-sort-by option[value="title"]').text('Titel');
			    jQuery('#edit-sort-by option[value="created"]').text('gemaakt');
				 jQuery('#edit-sort-order option[value="ASC"]').text('ASC');
				   jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				      jQuery('.views-exposed-form .button.form-submit').attr("value", "Solliciteren"); 
					   jQuery('.views-exposed-form .form-item-sort-order label').text('Bestellen');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Sorteer op');
			
		 }
		 
		 else if(langcode=="fi")
		 {
			jQuery('.gsc-input').attr("title", "haku");
			jQuery('.gsc-input').attr("placeholder", "haku");
			jQuery('.google-search-box .gsc-search-button').attr("title", "haku"); 
			jQuery('.gsc-search-box .gsc-search-button').attr("title", "haku");
			jQuery('.view-frontpage1 .fc-right-part .a2a_kit h2').text('osake');
					jQuery('.google-search-box .gsc-clear-button').attr("title", "selkeitä tuloksia");
			if(jQuery('.gsc-webResult div').hasClass('gs-no-results-result'))
			{
				jQuery('.gsc-webResult .gs-snippet').text("Ei tuloksia");
			}
			
			document.getElementById('edit-name').setCustomValidity('Täytä tällä alalla.');
			document.getElementById('edit-pass').setCustomValidity('Täytä tällä alalla.');
				jQuery('#edit-sort-by option[value="field_order_value"]').text('Tilata');
			jQuery('#edit-sort-by option[value="title"]').text('otsikko');
			    jQuery('#edit-sort-by option[value="created"]').text('Luotu');
				 jQuery('#edit-sort-order option[value="ASC"]').text('Asc');
				 jQuery('#edit-sort-order option[value="DESC"]').text('desc');
				  jQuery('.views-exposed-form .button.form-submit').attr("value", "käyttää"); 
				  jQuery('.views-exposed-form .form-item-sort-order label').text('Tilata');
				  jQuery('.views-exposed-form .form-item-sort-by label').text('Järjestä');
		 }
		 else
		 {
			 /*
			 * to add placeholder for english language in menu google search
			 */
			 jQuery('.gsc-input').attr("placeholder", "Search");
				

		 }
	},1000);
     
	 
   /*
   *  for disable share block if view empty
   */  
    var check1 = jQuery('.view-factpod div').hasClass("view-empty");
    var check2 = jQuery('.view-answers div').hasClass("view-empty");
    var check3 = jQuery('.view-test-questions div').hasClass("view-empty");
    
    if(check1 === false && check2 === false && check3 === false){
      jQuery('#block-share-2').attr('style','display: block !important');
    }
    /*
     *  for only front page share any social link to now window resize
     */

  jQuery('.a2a_dd').hover(function(){
      var data_url = jQuery(this).parent().attr('data-url');
      var new_url = data_url.replace('com/gapmindernew/gapmindernew','com/gapmindernew');       
       jQuery(this).parent().attr("data-url",new_url);
	   jQuery(this).attr('target','_blank')
     var data_title = jQuery(this).parent().attr('data-title');
     a2a_config.linkname = data_title;
     a2a_config.linkurl = data_url;
     a2a.init('page');
  });
  
});
