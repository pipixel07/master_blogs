console.log('custom script running');
var imagegallery_wordpress = document.querySelectorAll('.image-gallery-img')
var imagegallery_section = document.getElementsByClassName('image-gallery-section')
var image_gallery = document.querySelectorAll('.image-gallery') 
var cross_icon  = document.getElementsByClassName('cross-icon')
var rightarrow = document.querySelectorAll('.right-arrow')
var leftarrow = document.querySelectorAll('.left-arrow')
const imageGalleryInner = document.getElementById("image-gallery-inner");
var currentIndex = 0;
imagegallery_wordpress.forEach((val , index) => {
    imagegallery_wordpress[index].addEventListener('click' , function(){
        console.log('running');
        // display none all first
        image_gallery[0].style.display ="none";
        image_gallery[1].style.display ="none";
        image_gallery[2].style.display ="none";
        image_gallery[3].style.display ="none";
        image_gallery[4].style.display ="none";
        image_gallery[5].style.display ="none";
        //now block the visible one
        imagegallery_section[0].style.display = 'block';
        image_gallery[index].style.display ="block";
        imageGalleryInner.scrollIntoView({
            behavior: "smooth", // Use "auto" for instant scrolling
                block: "start", // Scroll to the top of the element
        });
    })
    cross_icon[0].addEventListener('click' , function(){
        imagegallery_section[0].style.display = 'none';
        image_gallery[index].style.display ="none"
        
    })
    imagegallery_section[0].addEventListener('click' , function(){
      imagegallery_section[index].style.display = 'none';
        image_gallery[index].style.display ="none"
    })

      // leftarrow[0].addEventListener('click', function () {
      //   currentIndex = (currentIndex + 1) % image_gallery.length;
      //   updateImageGalleryDisplay();
      //   imageGalleryInner.scrollIntoView({
      //       behavior: "smooth", // Use "auto" for instant scrolling
      //           block: "start", // Scroll to the top of the element
      //   });
      // });
      // rightarrow[0].addEventListener('click', function () {
      //   currentIndex = (currentIndex - 1 + image_gallery.length) % image_gallery.length;
      //   updateImageGalleryDisplay();
      //   imageGalleryInner.scrollIntoView({
      //       behavior: "smooth", // Use "auto" for instant scrolling
      //           block: "start", // Scroll to the top of the element
      //   });
      // });
})


// function updateImageGalleryDisplay() {
//     image_gallery.forEach((gallery, index) => {
//       if (index === currentIndex) {
//         gallery.style.display = "block";
//       } else {
//         gallery.style.display = "none";
//       }
//     });
//   }
var submitbtn = document.getElementById('new-form-submit-btn');		
submitbtn.addEventListener('click', function(e){		
  e.preventDefault();		
  generatetoken();		
}		
);		

function generatetoken() {		
 		

  $.ajax({		
   url: "https://masterinfotech.com/api/generate-token",		
   type: "post",		
   success: function(response) {		
    console.log(response);		
    if (response.token) {		
     submitform(response.token);		
     console.log('submitform done');		
    } 		
   },		
   error: function(jqXHR, textStatus, errorThrown) {		
    console.log(textStatus, errorThrown); }		
  });		

}		

// let ipAddressValue;

//     function getIpAddress(callback) 
//       {
//           $.ajax({		
//             url: "https://masterinfotech.com/api/get-ip",		
//             type: "get",		
//             success: function(response) {		
//               callback(response);
//             },		
//             error: function(jqXHR, textStatus, errorThrown) {		
//              console.log('Failed to fetch IP address', errorThrown);
//              callback(null);	
//             }
//            });

//       }

//       // Example usage (same as before)
//       getIpAddress(function(ipAddress) {
//         if (ipAddress) {
//           console.log('IP Address:', ipAddress);
//           ipAddressValue = returnip(ipAddress);


//         } else {
//           console.log('Failed to get IP address.');
//         }
//       });

//       function returnip(ip)
//       {
//         return ip ;
//       }

function submitform(token) {		

  var name = $("#form-field-name").val();		
  var email = $("#form-field-email").val();		
  var phone = $("#form-field-b26ecb6").val();		
  var pagename = window.location.href;
  var values = {		
   "name": name,		
   "email": email,		
   "phone": phone,
   "pagename": pagename,
  //  "location": ipAddressValue,
   "campaign_name": "India Branding"	
  };		
  		
  $.ajax({		
   url: "https://masterinfotech.com/api/verify-token",		
   type: "post",		
   headers:{'token':token},		
   data: values,		
   success: function(response) {		
    console.log(response + "MIT ");		
    window.location.href = "https://masterinfotech.co.uk/branding/thankyou/index.htm";		
   },		
   error: function(jqXHR, textStatus, errorThrown) {		
    console.log(errorThrown + "MIT ");}		
  });		


 }