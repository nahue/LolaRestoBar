function initEnlaces()
{

    jQuery('body').delegate('a', 'click',
    function(e){

        console.log(e.target);
        e.preventDefault();
        url = jQuery(this).attr('href');
        jQuery("#contenido").load(url);

    });

    jQuery("body").delegate('form', 'submit',
    function(e){
        e.preventDefault();
        if (jQuery(this).find("input[type=file]").length > 0)
        {
            console.log("envia archivo");
        } else{
            // NO ENVIA ARCHIVOS
            jQuery.post(
              jQuery(this).attr('action'), jQuery(this).serialize(),function(data){
                jQuery("#contenido").html(data);
              }
              
              
            );

        }
    })
}



jQuery(document).ready(function(){


    initEnlaces();
})