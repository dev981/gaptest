jQuery(document).ready(function()
{
        var myVizabi;
        var tooltype=jQuery('#chart_type').val();
        var base_url=jQuery('#base_url').val();
        var nodenid=jQuery('#node_nid').val();        
        var State=jQuery('#obj').data().state;
        var Language=jQuery('#obj').data().lang;
        var Data=jQuery('#obj').data().data;  
        
        var object ='';
        if((Language.trim()!='') && (State.trim()!='') && (Data.trim()!='')  )
        {
         object = Language+","+State+","+Data;
        }
        else if((Language.trim()!='') && (State.trim()!='') )
        {
         object = Language+","+State;
        }  
        else if((Language.trim()!='') && (Data.trim()!='') )
        {
         object = Language+","+Data;
        }    
        else if((State.trim()!='') && (Data.trim()!='') )
        {
         object = State+","+Data;
        }               
        else if(State.trim()!='')
        {
         object = State;  
        }
        else if(Language.trim()!='')
        {
         object = Language;  
        }   
        else if(Data.trim()!='')
        {
         object = Data;  
        }     
                
        
        var bindobj ={ 
                bind: 
                {
                    'ready': function() {
                    console.log('Vizabi is ready!');
                    },
                    'change:state:entities:select': function(evt, vals) 
                    {
                        var SelectedState='';
                        var SelectedLanguage = vals['language']['id'];
                        var nid = nodenid;
                        if(vals['state']['entities']['brush']['0']['geo'])
                        {
                          SelectedState = vals['state']['entities']['brush']['0']['geo']; 
                        }
                        if(SelectedState!='')
                        {
                            var tag_exist=jQuery('#state-tags').val();
                            if(tag_exist!='')
                            {
                               if (tag_exist.indexOf(SelectedState) >= 0)
                               {
                                  if (tag_exist.indexOf(","+SelectedState) >= 0)
                                  {
                                     var tag_rep = tag_exist.replace(","+SelectedState, '');
                                  }
                                  else if(tag_exist.indexOf(SelectedState+",") >= 0)
                                  {
                                      var tag_rep = tag_exist.replace(SelectedState+",", '');
                                  }
                                  else
                                  {
                                      var tag_rep = tag_exist.replace(SelectedState, '');
                                  }
                                  jQuery('#state-tags').val(tag_rep); 
                               }
                               else
                               {
                                    var tags=  tag_exist+","+SelectedState;
                                    jQuery('#state-tags').val(tags); 
                               }
                            }   
                            else
                            {
                               jQuery('#state-tags').val(SelectedState); 
                            }
                        }
                        SelectedState=jQuery('#state-tags').val();

                        jQuery('.overlay').show();
                        jQuery('.overlay_img').show();
                        
                              jQuery.ajax
                              ({
                                   type: 'POST',
                                   url: base_url+"/custom_api",
                                   data: 
                                       {
                                        state: SelectedState,
                                        nid:nid,
                                        SelectedLanguage:SelectedLanguage
                                       },
                                   success:function(res){
                                        var html='';
                                        jQuery(res).each(function(e,content)
                                        {                                 
                                            if(content.result && content.result=='failure')
                                            {
                                                html='No Results';
                                            }
                                            else
                                            {
                                                var title=content.title;
                                                var href=content.href;
                                                var url=content.image_url;   
                                                var subtitle=content.subtitle;    
                                                html +='<div class="viewdata views-row">\n\
                                                <div class="views-field views-field-nothing">\n\
                                                <span class="field-content">\n\
                                                <div class="fc_rows related"><div class="fc_image related"><a href="'+href+'"><img width="130" height="78" src="'+url+'"></a></div>\n\
                                                <div class="fc_title_sub related"><div class="fc_title related"><a href="'+href+'">'+title+'</a></div><div class="fc_sub related">\n\
                                                 <a href="'+href+'">'+subtitle+'</a> </div></div></div></span></div></div>';
                                            }                                   
                                       });                       
                                        jQuery('.view-related .view-content').html(html);
                                        jQuery('.overlay').hide();
                                        jQuery('.overlay_img').hide();                                
                                        },
                                    dataType: "json",                           
                                });      
                    },
                }   
            };        
        
    if(object!='')
    {
     var options=eval("({"+object+"})");  
     var objectval=jQuery.extend(options, bindobj);
     myVizabi = Vizabi(tooltype, document.getElementById("vizabi-chart") , objectval);         
    }
    else
    {
     myVizabi = Vizabi(tooltype, document.getElementById("vizabi-chart") , bindobj);  
    }             
})