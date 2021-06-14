
$(function(){
   
     const stripe = Stripe("pk_test_51IdC0SEYTj0p2Az71UGhMihkoa7omy7zEhe6dSWpufYw5DdLSfFdIEidBSBsFLYUNTi0PO2fV0txacreIMFXJwah00bRcaIwXd");
    
    const checkoutButton = $("#checkout-button");
    checkoutButton.on('click',function(e){
        
        e.preventDefault();
        
        console.log($('#email').val()) 
        // console.log($('#id').val())
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

       $.ajax({
           url:'http://localhost/php/poo/app/sculpture/index.php?action=pay',
           method:'post',
           data:{

            // id:$('#id').val(),
            name:$('#name').val(),
            price:$('#price').val(),
            content:$('#content').val(),
            quality:$('#quality').val(),
            picture:$('#picture').val(),
            quantity:$('#quantity').val(),
            dimension:$('#dimension').val(),
            date:$('#date').val(),
            id_cat:$('#id_cat').val(),
            name_cat:$('#name_cat').val(),
            email:$('#email').val()
        },
           datatype:'json',
           success:function(session){
               console.log(session);
               //console.log(data);
                return stripe.redirectToCheckout({sessionId: session.id });
           },
           error: function(){
               console.error("fail to send!");
           }
       });
    
    })
 
})   

// $(function(){
//     const stripe = Stripe("pk_test_51IM8ZrEwRtoFpDAHs6Iu7d92N4DPiPWs4MjYP3BhnlNyf0Lz3itqGdpugMYLXIMyHZeQvxNyH4FCEAAtoJv9b7V600AGKAwSrE");
//     const checkoutButton = $("#checkout-button");
//     checkoutButton.on('click',function(e){
//         e.preventDefault();
//         $.ajax({
//                 type: 'post',
//                 url: 'http://localhost/php/poo/app/sculpture/index.php?action=pay',
//                 data: {
//                     id:$('#id').val(),
//                     name:$('#name').val(),
//                     price:$('#price').val(),
//                     content:$('#content').val(),
//                     quality:$('#quality').val(),
//                     picture:$('#picture').val(),
//                     quantity:$('#quantity').val(),
//                     dimension:$('#dimension').val(),
//                     date:$('#date').val(),
//                     id_cat:$('#id_cat').val(),
//                     name_cat:$('#name_cat').val(),
//                     email:$('#email').val(),
//                 },
//                 success:function(session) { 

//                          return stripe.redirectToCheckout({sessionId:'cs_KmeIFgWSfN5GW6tP2e5IQ0Vb9EA0q3…kW7DwsM6dAbhQ30' })
//                 },




//                 error: (response) => {
//                   console.log('error payment: ', response);
//                 }
//               })
//     });


// })
