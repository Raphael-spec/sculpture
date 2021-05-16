$(function(){
    
    const stripe = Stripe("pk_test_51IM8ZrEwRtoFpDAHs6Iu7d92N4DPiPWs4MjYP3BhnlNyf0Lz3itqGdpugMYLXIMyHZeQvxNyH4FCEAAtoJv9b7V600AGKAwSrE");
    
    const checkoutButton = $("#checkout-button");
    checkoutButton.on('click',function(e){
        e.preventDefault();
        console.log($('#email').val()) 
        console.log($('#id').val())
        console.log($('#name').val())
        console.log($('#price').val())
        console.log($('#content').val())
        console.log($('#quality').val())
        console.log($('#picture').val())
        console.log($('#quantity').val())
        console.log($('#dimension').val())
        console.log($('#id_cat').val())
        console.log($('#name_cat').val())
        console.log($('#date').val())
        


    //    $.ajax({
    //        url:'index.php?action=pay',
    //        method:'post',
    //        data:{
    //         id:$('#id').val(),
    //         name:$('#name').val(),
    //         price:$('#price').val(),
    //         content:$('#content').val(),
    //         quality:$('#quality').val(),
    //         picture:$('#picture').val(),
    //         quantity:$('#quantity').val(),
    //         dimension:$('#dimension').val(),
    //         date:$('#date').val(),
    //         id_cat:$('#id_cat').val(),
    //         name_cat:$('#name_cat').val(),
    //         email:$('#email').val(),
            
    //        },
    //        datatype:'json',
    //        success:function(session){
    //            console.log(session);
    //            //console.log(data);
    //            return stripe.redirectToCheckout({sessionId: session.id})
    //        },
    //        error:function(){
    //            console.log('fail to send!');
    //        }
    //    });

    var id = $('#id').val();
          var name = $('#name').val();
          var price = $('#price').val();
          var content = $('#content').val();
          var quality = $('#quality').val();
          var picture = $('#picture').val();
          var quantity = $('#quantity').val();
          var dimension = $('#dimension').val();
          var date =  $('#date').val();
          var id_cat = $('#id_cat').val();
          var name_cat = $('#name_cat').val();
          var email = $('#email').val();

        $.post("index.php?action=pay", 

                        {
                    id:id,
                    name:name,
                    price:price,
                    content:content,
                    quality:quality,
                    picture:picture,
                    quantity:quantity,
                    dimension:dimension,
                    date:date,
                    id_cat:id_cat,
                    name_cat:name_cat,
                    email:email

                        },

                    datatype:'json',
                            success:function(session){
                                console.log(session);
                                   //console.log(data);
                                return stripe.redirectToCheckout({sessionId: session.id});
                            },
                            error:function(){
                                console.log('fail to send!');
                            }

             );
    });

    
})




//console.log(2000000)