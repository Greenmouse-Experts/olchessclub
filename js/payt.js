const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {

  e.preventDefault();

  let handler = PaystackPop.setup({

    key: 'pk_test_faffba574ca02bf41446ab437dfc871f4406ee32',
    
    email: document.getElementById("email").value,

    amount: document.getElementById("amount").value * 100,
   
    username: document.getElementById("name").value,

    ref: ''+Math.floor((Math.random() * 1000000000) + 1), 
    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;

      alert(message);

      let amount = document.getElementById("amount").value;
      let code= document.getElementById("code").value;
      let email= document.getElementById("email").value;
      let phone= document.getElementById("phone").value;
      let duration = document.getElementById("duration").value;
      let name = document.getElementById("name").value;
      let du = document.getElementById("type");
      let opt = du.options[du.selectedIndex].value;

     window.location = "processpay.php?pref="+response.reference+"&amount="+amount+"&type="+opt+"&code="+code+"&email="+email+"&duration="+duration+"&name="+name+"&phone="+phone;

    }

  });

  handler.openIframe();

}