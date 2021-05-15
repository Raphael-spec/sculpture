const stripe = Stripe("pk_test_51IdC0SEYTj0p2Az71UGhMihkoa7omy7zEhe6dSWpufYw5DdLSfFdIEidBSBsFLYUNTi0PO2fV0txacreIMFXJwah00bRcaIwXd");
const checkoutCarv= $("#checkout-button");

    
    
    checkoutCarv.onclick = function(e){
        e.preventDefault();
        const mail = document.getElementById('mail');

        console.log(mail.value);

       $.ajax({
           url:'index.php?action=pay',
           method:'post',
           data:{
               id:$('#id').val(),
               name:$('#name').val(),
               price:$('#price').val(),
               content:$('#content').val(),
               quality:$('#quality').val(),
               picture:$('#picture').val(),
               quantity:$('#quantity').val(),
               dimension:$('#dimension').val(),
               date:$('#date').val(),
               id_cat:$('#id_cat').val(),
            //    name_cat:$('#name_cat').val(),
               email:$('#email').val(),
            
           },
           datatype:'json',
           success:function(session){
               console.log(session);
               return stripe.redirectToCheckout({sessionId:session.id})
           },
           error:function(){
               console.error('fail to send!');
           }
       });
    }

    





//console.log(2000000)