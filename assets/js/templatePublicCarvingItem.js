$(function(){

    let img=$('.carIt_pict');
    //console.log(img)
        img.each(function(){
                $(this).on('click',function(){
                    let source=$(this).attr('src');
                    console.log(source);
                    $('.carIt_pictB ').attr('src',source);
                    $('.carIt_pictB ').parent().attr('href',source);//Une autre maniere de faire appel au lien pour basculer sur une autre page

                   // $('a:last').attr('href',source);
            });
    });


//console.log(300);

});

