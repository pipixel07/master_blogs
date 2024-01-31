// subscription click function 
function setsubscription(plan){
    localStorage.setItem('subscriptionplan', plan);
}



var formname;
var email;
var phone;

var firstbtn = document.getElementById('first-btn');
firstbtn.addEventListener('click', function (e) {
    e.preventDefault();
    generatetoken();
    
     formname = $("#first-form-field-name").val();
     email = $("#first-form-field-email").val();
     phone = $("#first-form-field-phone").val();
});

var footerbtn = document.getElementById('footer-btn');
footerbtn.addEventListener('click', function (e) {
    e.preventDefault();
    generatetoken();
    
     formname = $("#footer-form-field-name").val();
     email = $("#footer-form-field-email").val();
     phone = $("#footer-form-field-phone").val();
});


function generatetoken() {

    $.ajax({
        url: "https://masterinfotech.com/api/generate-token",
        type: "post",
        success: function (response) {
            console.log(response);
            if (response.token) {
                submitform(response.token);
                console.log('submitform done');
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });

}

let ipAddressValue;

      function getIpAddress(callback) 
      {
          $.ajax({		
            url: "https://masterinfotech.com/api/get-ip",		
            type: "get",		
            success: function(response) {		
              callback(response);
            },		
            error: function(jqXHR, textStatus, errorThrown) {		
             console.log('Failed to fetch IP address', errorThrown);
             callback(null);	
            }
           });

      }

      // Example usage (same as before)
      getIpAddress(function(ipAddress) {
        if (ipAddress) {
          console.log('IP Address:', ipAddress);
          ipAddressValue = returnip(ipAddress);


        } else {
          console.log('Failed to get IP address.');
        }
      });

      function returnip(ip)
      {
        return ip ;
      }


function submitform(token) {

    var subscription = null;
    var pagename = window.location.href;
    if (localStorage.getItem('subscriptionplan')) {
        subscription = localStorage.getItem('subscriptionplan');
    }
    var values = {
        "name": formname,
        "email": email,
        "phone": phone,
        "pagename": pagename,
        "location": ipAddressValue,
        "subscription": subscription,
        "campaign_name": "India Shopify Campaign"
    };
    console.log(values);
    $.ajax({
        url: "https://masterinfotech.com/api/verify-token",
        type: "post",
        headers: { 'token': token },
        data: values,
        success: function (response) {
            console.log(response + "MIT ");
            if (localStorage.getItem('subscriptionplan')) {
                localStorage.removeItem('subscriptionplan');
            }
            window.location.href = "https://masterinfotech.co.uk/branding/thankyou/index.htm";
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown + "MIT ");
        }
    });

}