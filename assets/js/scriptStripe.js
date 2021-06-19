//console.log(session)
myname = '';
myfirstname = '';
myaddress = '';
mycp = '';
mytown = '';
mycountry = '';
myemail = '';
client = '';

$(function(){

    const stripe = Stripe("pk_test_51IdC0SEYTj0p2Az71UGhMihkoa7omy7zEhe6dSWpufYw5DdLSfFdIEidBSBsFLYUNTi0PO2fV0txacreIMFXJwah00bRcaIwXd");
    
    const checkoutButton = $("#checkout-button");
    checkoutButton.on('click',function(e){

        if(session){
        myname=nameClient;
        myfirstname = firstname;
        myaddress = address;
        mycp = cp;
        mytown = town;
        mycountry = country;
        myemail = email;
        client=id_c

        console.log(myname,myfirstname,myaddress,mycp,mytown,mycountry,myemail,client)

        }
        // else{
        // myname= $('#name').val();
        // myfirstname = $('#firstname').val();
        // myaddress =  $('#address').val();
        // mycp =  $('#cp').val();
        // mytown =  $('#town').val();
        // mycountry = $('#country').val();
        // myemail = $('#email').val();

        // console.log(myname,myfirstname,myaddress,mycp,mytown,mycountry,myemail)

        // }
        
        e.preventDefault();

        $.ajax({
            url:'http://localhost/php/poo/app/sculpture/index.php?action=pay',
            method:'post',
            data:{
            id_c:id_c,
            email:myemail,
            price:$('#price').val(),
            nameClient:myname,
            firstname:myfirstname,
            address:myaddress,
            cp:mycp,
            town:mytown,
            country:mycountry

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

