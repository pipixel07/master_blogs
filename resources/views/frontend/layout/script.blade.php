<script>
  //tool
  const isHover = e => e.parentElement.querySelector(':hover') === e;

  function checkHover() {
    var flag = 0;
    var subMenuList2 = document.getElementsByClassName('service-dropdown-menu');
    for (var l = 0; l < subMenuList2.length; l++) {
      for (var a = 0; a < subMenuList2[l].children.length; a++) {
        if (isHover(subMenuList2[l].children[a])) flag = 1;

        // const mouseoverLeave = new Event('mouseleave');
        // subMenuList2[0].children[0].dispatchEvent(mouseoverLeave);
      }
      // const mouseoverEvent = new Event('mouseenter');

      if (flag != 1) {
        subMenuList2[0].children[0].children[0].classList.add('onhoverwidth');
        subMenuList2[0].children[0].children[0].children[0].style.transform = "rotate(0deg)";
        subMenuList2[0].children[0].children[0].children[0].style.visibility = "visible";
        subMenuList2[0].children[0].children[0].children[0].style.opacity = "1";
        subMenuList2[0].children[0].children[1].style.visibility = "visible";
        subMenuList2[0].children[0].children[1].style.opacity = "1";
        subMenuList2[0].children[0].children[1].style.display = "block";

        subMenuList2[1].children[0].children[0].classList.add('onhoverwidth');
        subMenuList2[1].children[0].children[0].children[0].style.transform = "rotate(0deg)";
        subMenuList2[1].children[0].children[0].children[0].style.visibility = "visible";
        subMenuList2[1].children[0].children[0].children[0].style.opacity = "1";
        subMenuList2[1].children[0].children[1].style.visibility = "visible";
        subMenuList2[1].children[0].children[1].style.opacity = "1";
        subMenuList2[1].children[0].children[1].style.display = "block";

        // subMenuList2[l].children[0].dispatchEvent(mouseoverEvent);
        console.log('mousenter');
      }
    }
  }
  // tool end
  var allMenus = document.getElementsByClassName('nav-links');
  var j = 0;



  function checkWidth() {
    var w = window.innerWidth;
    console.log('width', w);
    if (w >= 1024) return true;
    return false;
  };

  //activate litseners for all menu items
  // for (var i = 0; i < allMenus[0].children.length; i++) {
  //   if (allMenus[0].children[i].children[3]) {
  //     allMenus[0].children[i].children[1].addEventListener('mouseenter', function(event) { //this listner triggers view dropdown again if a link is hovered.
  //       event.stopImmediatePropagation();
  //       event.stopPropagation();
  //       this.parentElement.children[3].style.cssText = `
  //                 z-index: 999999;
  //                 padding: 70px 0px;
  //                 display: block;
  //                 height: auto;
  //                 transition: all .3s ease;
  //                 `;
  //     });

  //     console.log('event exec');
  //     allMenus[0].children[i].addEventListener('mouseenter', function(event) {

  //       clearTimeout(); //Might create issues. can make specific for mouseleave for this action. 
  //       event.stopImmediatePropagation();
  //       event.stopPropagation();
  //       //on li hover
  //       if (this.children[3]) {
  //         this.children[3].style.cssText = `
  //           z-index: 999999;
  //           padding: 70px 0px;
  //           display: block;
  //           height: auto;
  //           transition: all .3s ease;
  //           `;
  //       } //end if
  //       //select default service on hover
  //       console.log('wdith', checkWidth());
  //       var subMenuList = document.getElementsByClassName('service-dropdown-menu');
  //       if (checkWidth() == true) {
  //         //set min-height of sub ul
  //         for (var w = 0; w < subMenuList[0].children.length; w++) {
  //           console.log('HEIHGT', subMenuList[0].clientHeight);
  //           subMenuList[0].children[w].children[1].style.minHeight = "" + subMenuList[0].clientHeight + "px";
  //         }
  //         for (var w = 0; w < subMenuList[1].children.length; w++) {
  //           console.log('HEIHGT', subMenuList[1].clientHeight);
  //           subMenuList[1].children[w].children[1].style.minHeight = "" + subMenuList[1].clientHeight + "px";
  //         }

  //         subMenuList[0].children[0].children[0].classList.add('onhoverwidth');
  //         subMenuList[0].children[0].children[0].children[0].style.transform = "rotate(0deg)";
  //         subMenuList[0].children[0].children[0].children[0].style.visibility = "visible";
  //         subMenuList[0].children[0].children[0].children[0].style.opacity = "1";
  //         subMenuList[0].children[0].children[1].style.visibility = "visible";
  //         subMenuList[0].children[0].children[1].style.opacity = "1";
  //         subMenuList[0].children[0].children[1].style.display = "block";

  //         subMenuList[1].children[0].children[0].classList.add('onhoverwidth');
  //         subMenuList[1].children[0].children[0].children[0].style.transform = "rotate(0deg)";
  //         subMenuList[1].children[0].children[0].children[0].style.visibility = "visible";
  //         subMenuList[1].children[0].children[0].children[0].style.opacity = "1";
  //         subMenuList[1].children[0].children[1].style.visibility = "visible";
  //         subMenuList[1].children[0].children[1].style.opacity = "1";
  //         subMenuList[1].children[0].children[1].style.display = "block";
  //       }
  //       for (var j = 0; j < subMenuList.length; j++) {

  //         if (this.contains(subMenuList[j])) {
  //           for (var k = 0; k < subMenuList[j].children.length; k++) {
  //             subMenuList[j].children[k].addEventListener('mouseenter', function(e) {
  //               e.stopImmediatePropagation();
  //               e.stopPropagation();

  //               if (checkWidth() == false) {
  //                 this.children[1].style.height = 'auto';
  //               }


  //               var subMenuList3 = document.getElementsByClassName('service-dropdown-menu');
  //               // for(var l=0;l < subMenuList3.length;l++){
  //               //   const mouseoverLeave = new Event('mouseleave');
  //               //   subMenuList3[l].children[0].dispatchEvent(mouseoverLeave);
  //               // }
  //               //

  //               if (subMenuList3[0].children[0]) {
  //                 console.log('on hover');
  //                 var classlist = subMenuList3[0].children[0].children[0].classList;
  //                 for (var q = 0; q < classlist.length; q++) {

  //                   if (classlist[q] == 'onhoverwidth') {
  //                     subMenuList3[0].children[0].children[0].classList.remove('onhoverwidth');
  //                     subMenuList3[0].children[0].children[0].children[0].style.transform = "rotate(0deg)";
  //                     subMenuList3[0].children[0].children[0].children[0].style.visibility = "hidden";
  //                     subMenuList3[0].children[0].children[0].children[0].style.opacity = "0";
  //                     subMenuList3[0].children[0].children[1].style.visibility = "hidden";
  //                     subMenuList3[0].children[0].children[1].style.opacity = "0";
  //                     subMenuList3[0].children[0].children[1].style.display = "none";

  //                   }
  //                 }
  //               }
  //               if (subMenuList3[1].children[0]) {
  //                 console.log('on hover');
  //                 var classlist2 = subMenuList3[1].children[0].children[0].classList;
  //                 for (var q = 0; q < classlist2.length; q++) {

  //                   if (classlist2[q] == 'onhoverwidth') {
  //                     subMenuList3[1].children[0].children[0].classList.remove('onhoverwidth');
  //                     subMenuList3[1].children[0].children[0].children[0].style.transform = "rotate(0deg)";
  //                     subMenuList3[1].children[0].children[0].children[0].style.visibility = "hidden";
  //                     subMenuList3[1].children[0].children[0].children[0].style.opacity = "0";
  //                     subMenuList3[1].children[0].children[1].style.visibility = "hidden";
  //                     subMenuList3[1].children[0].children[1].style.opacity = "0";
  //                     subMenuList3[1].children[0].children[1].style.display = "none";

  //                   }
  //                 }
  //               }
  //               // if(subMenuList3[1].children[0]){ 
  //               //   console.log('on hover');
  //               //   subMenuList3[1].children[0].classList.remove('onhoverwidth');
  //               //   subMenuList3[1].children[0].children[0].style.transform="rotate(0deg)";
  //               //   subMenuList3[1].children[0].children[0].style.visibility="hidden";
  //               //   subMenuList3[1].children[0].children[0].style.opacity="0";
  //               //   subMenuList3[1].children[0].children[1].style.visibility="hidden";
  //               //   subMenuList3[1].children[0].children[1].style.opacity="0";
  //               //   subMenuList3[1].children[0].children[1].style.display="none";
  //               // }

  //               //
  //               this.children[0].classList.add('onhoverwidth');
  //               if (this.children[1]) {
  //                 this.children[1].style.visibility = "visible";
  //                 this.children[1].style.opacity = "1";
  //                 this.children[1].style.display = "block";
  //               }
  //               if (this.children[0]) {
  //                 this.children[0].children[0].style.transform = "rotate(0deg)";
  //                 this.children[0].children[0].style.visibility = "visible";
  //                 this.children[0].children[0].style.opacity = "1";
  //               }
  //             });
  //             subMenuList[j].children[k].addEventListener('mouseleave', function(e) {
  //               e.stopImmediatePropagation();
  //               e.stopPropagation();
  //               console.log('leave 1 :', this.children[0]);
  //               console.log('leave 2 :', this.children[1]);
  //               // console.log('j :',j++);
  //               console.log('you need this for hiding sub ul', this.children[1]);
  //               if (this.children[1]) {
  //                 this.children[1].style.visibility = "hidden";
  //                 this.children[1].style.opacity = "0";
  //                 this.children[1].style.display = "none";

  //               }
  //               console.log('you need this for hiding icon', this.children[0]);
  //               if (this.children[0]) {
  //                 this.children[0].classList.remove('onhoverwidth');
  //                 this.children[0].children[0].style.transform = "rotate(0deg)";
  //                 this.children[0].children[0].style.visibility = "hidden";
  //                 this.children[0].children[0].style.opacity = "0";
  //               }
  //               if (checkWidth() == true) {
  //                 checkHover(); //execute fist default active
  //               }
  //               // debugger;
  //               console.log('hovering', isHover(this));


  //             });
  //           }
  //         }
  //         // const mouseoverEvent = new Event('mouseenter');
  //         // console.log('removed',subMenuList[j].children[0]);
  //         // subMenuList[j].children[0].dispatchEvent(mouseoverEvent);
  //       }
  //     });
  //     allMenus[0].children[i].addEventListener('mouseleave', function() {
  //       if (this.children[3]) {
  //         console.log('leave', isHover(this.children[3]));
  //         setTimeout(() => {
  //           //on li hover
  //           if (isHover(this.children[3]) == false) this.children[3].style.cssText = `
  //                 z-index: 999;
  //                 padding: 0px 0px;
  //                 display: block;
  //                 height: 0;
  //                 transition: all .3s ease;
  //                 `;

  //         }, 300);

  //       }
  //     });
  //   }
  // }

  // new code ended
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  const links = document.querySelectorAll(".nav-links li");

  // hamburger.addEventListener('click', () => {

  //   navLinks.classList.toggle("open");
  //   links.forEach(link => {
  //     // link.classList.toggle("fade");
  //   });


  //   hamburger.classList.toggle("toggle");
  // });
</script>
<!-- code for navbar ended -->
<script>
  filterSelection("allshow")

  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column-pt");
    if (c == "allshow") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show-pt");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show-pt");
    }
  }


  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }


  // Add active class to the current button (highlight it)
  // var btnContainer = document.getElementById("myBtnContainer");
  // var btns = btnContainer.getElementsByClassName("btn-pt");
  // for (var i = 0; i < btns.length; i++) {
  //   btns[i].addEventListener("click", function() {
  //     var current = document.getElementsByClassName("active-pt");
  //     current[0].className = current[0].className.replace(" active-pt", "");
  //     this.className += " active-pt";
  //   });
  // }
</script>
<!-----------------end of portfolio part----------------->



<script>
  $(document).ready(function() {
    count = 1;

    $("#clickme").click(function() {
      var num = count++;

      if (num == 2) {
        window.location.href = "https://www.google.com";
      }
    });

  });
  document.addEventListener('DOMContentLoaded', function() {
    var $bannerSlider = jQuery('.banner-slider');
    var $bannerFirstSlide = $('div.banner-slide:first-child');

    $bannerSlider.on('init', function(e, slick) {
      var $firstAnimatingElements = $bannerFirstSlide.find('[data-animation]');
      slideanimate($firstAnimatingElements);
    });
    $bannerSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      slideanimate($animatingElements);
    });
    $bannerSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      dots: false,
      swipe: true,
      adaptiveHeight: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 4000,
          swipe: true,
        }
      }]
    });

    function slideanimate(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function() {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function() {
          $this.removeClass($animationType);
        });
      });
    }
  });
  document.addEventListener('DOMContentLoaded', function() {
    // $(document).on('ready', function() {
    $('.orm-slider').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1200,
      centerPadding: '20px',
      pauseOnDotsHover: true,
      arrows: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });


  });


  // data color
  jQuery("[data-color]").each(function() {
    jQuery(this).css('color', jQuery(this).attr('data-color'));
  });
  // data background color
  jQuery("[data-bgcolor]").each(function() {
    jQuery(this).css('background-color', jQuery(this).attr('data-bgcolor'));
  });
</script>

<script type="text/javascript">
  // use DOMContentLoaded instead of onload or ready function in jquery(" $(document).on('ready', function() { ") to run javascript after the defered script tags has been loaded.
  document.addEventListener('DOMContentLoaded', function() {
    $('.industry').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1200,
      centerPadding: '20px',
      pauseOnDotsHover: true,
      arrows: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('.client-slider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1200,
      pauseOnDotsHover: true,
      arrows: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }]
    });
  });
</script>



<script>
  //load code after deffer script
  document.addEventListener('DOMContentLoaded', function() {
    function DropDown(el) {
      this.dd = el;
      this.placeholder = this.dd.children('span');
      this.opts = this.dd.find('ul.drop li');
      this.val = '';
      this.index = -1;
      this.initEvents();
    }

    DropDown.prototype = {
      initEvents: function() {
        var obj = this;
        obj.dd.on('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          $(this).toggleClass('active');
        });
        obj.opts.on('click', function() {
          var opt = $(this);
          obj.val = opt.text();
          obj.index = opt.index();
          obj.placeholder.text(obj.val);
          opt.siblings().removeClass('selected');
          opt.filter(':contains("' + obj.val + '")').addClass('selected');
        }).change();
      },
      getValue: function() {
        return this.val;
      },
      getIndex: function() {
        return this.index;
      }
    };

    $(function() {
      // create new variable for each menu
      var dd1 = new DropDown($('#new_service'));
      // var dd2 = new DropDown($('#other-gases'));
      $(document).click(function() {
        // close menu on document click
        $('.wrap-drop').removeClass('active');
      });
    });
  });
</script>
<script type="text/javascript">
  //load code after deffer script
  document.addEventListener('DOMContentLoaded', function() {
    let number = 0;
    let footercode = 0;
    var input = document.querySelector("#new_phone"),
      errorMsg = document.querySelector("#new_error-msg");
    //validMsg = document.querySelector("#valid-msg");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    var iti = window.intlTelInput(input, {
      separateDialCode: true,
      initialCountry: "in",
      geoIpLookup: function(callback) {
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);

      });
    },
    utilsScript: "{{asset('assets/js/utils.js')}}"
  });


    var reset = function() {
      input.classList.remove("error-code");
      errorMsg.innerHTML = "";
      errorMsg.classList.add("country-code-hide");
      // validMsg.classList.add("country-code-hide");
    };

    var isvalidformfooter = 0;
    // on blur: validate
    input.addEventListener('blur', function() {
      reset();

      if (input.value.trim()) {
        if (iti.isValidNumber()) {
          number = iti.getSelectedCountryData();
          footercode = number['dialCode'];

          isvalidformfooter = 1;
          // validMsg.classList.remove("country-code-hide");
        } else {
          input.classList.add("error-code");
          var errorCode = iti.getValidationError();
          errorMsg.innerHTML = errorMap[errorCode];
          errorMsg.classList.remove("country-code-hide");
        }
      }
    });


    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);

    var submitbtn = document.getElementById('btn-sub');
    submitbtn.addEventListener('click', validateForm);
    let ipAddressValue;
    function getIpAddress(callback) 
      {
        var url = 'http://www.geoplugin.net/json.gp';

        fetch(url)
          .then(response => response.json())
          .then(data => {
            var ipAddress = data.geoplugin_request;
            callback(ipAddress);
          })
          .catch(error => {
            console.error('Failed to fetch IP address', error);
            callback(null);
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

    function validateForm() {
      console.info('Validation');

      var valid = true;
      if (isFormValid()) {
        var name = $("#new_name").val();
        var email = $("#new_email").val();
        var mob = $("#new_phone").val();
        var code = footercode;
        var phone = "+" + code + "-" + mob;
        var msg = 'null';
        //var service = 'null';
        var service = $("#selected-service").val();
        var token = $("#token").val();

        //var budget = $("#budgetfoot").val();
        var budget = 'null';
        var values = {
          "_token": token,
          "name": name,
          "email": email,
          "phone": phone,
          "message": msg,
          "service": service,
          "budget": budget,
          "pagename": pagename,
          "location": ipAddressValue,
        };
        $.ajax({
          url: "{{url('savemaildata')}}",
          type: "post",
          data: values,
          success: function(response) {
            //console.log(response);
            if (response == 1) {
              $("#new_error_submit").html("Thank you for your enquiry. We will revert you soon.").css("color", "green");
              // sendmail(values);
              //senderp(values);
              console.log('senderp done');
              window.location.href = "{{url('/thank-you')}}";
            } else if (response == 0) {
              $("#new_error_submit").html("Sorry, your request did not get submitted due to network error. Please, contact us directly over +91 74000 18000 or info@masterinfotech.com").css("color", "red");
            }

            valid = false;
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            $("#new_error_submit").html("Sorry, your request did not get submitted due to network error. Please, contact us directly over +91 74000 18000 or info@masterinfotech.com").css("color", "red");
          }
        });

      }
    }

    function isFormValid() {

      //Initially default values;
      errorMessage = "";
      $(".error").html("");
      var isValid = true;
      var regName = /^[a-zA-Z ]+$/;
      var regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var regphn = /^[0-9]*$/;


      //Validate First name
      if ($("#new_name").val() == "") {
        $("#new_name").siblings("#new_error_name").html("Please Enter Your Name").css("color", "red");
        isValid = false;
      } else {
        if (!regName.test($("#new_name").val())) {
          $("#new_name").siblings("#new_error_name").html("Please Enter Your Valid Name").css("color", "red");
          isValid = false;
        }
      }

      if ($("#new_email").val() == "") {
        $("#new_email").siblings("#new_error_email").html("Please Enter Your Email ").css("color", "red");
        isValid = false;
      } else {
        if (!regemail.test($("#new_email").val())) {
          $("#new_email").siblings("#new_error_email").html("Please Enter Your Valid Email").css("color", "red");
          isValid = false;
        }
      }

      if ($("#new_phone").val() == "" || $("#new_phone").val() == null) {
        $("#new_error-msg").siblings("#new_error_phone").html("Please Enter Your Phone Number").css("color", "red");
        isValid = false;
      } else if (isvalidformfooter == 0) {
        isValid = false;
      }

      /* if ($("#budgetfoot").val() == "none") {
          $("#error_budgetfoot").html("Please Select A Budget ")
          isValid = false;
      } */
      if ($("#selected-service").val() == "") {
        $("#new_error_service").html("Please Select A Service ").css("color", "red");
        isValid = false;
      }
      // console.log(verifythiscaptcharesponse);
      // if(verifythiscaptcharesponse == "" || verifythiscaptcharesponse == null ){
      // 	$("#captcha").siblings(".error").html("Please Select Checkbox")
      // 	isValid = false;
      // } 
      return isValid;
    }

    var pagename = window.location.href;
    $('.service').on('click', function() {
      let service_val = $(this).text();
      $('#selected-service').val(service_val);
    })

    function sendmail(value) {
      $.ajax({
        url: "{{url('contact-form-mail')}}",
        type: "get",
        data: value,
        success: function(response) {
          console.log(response + "mailfunction");
        },
        error: function(jqXHR, textStatus, errorThrown) {}
      });
    }

    function senderp(value) {

      $.ajax({
        url: "/send-erp",
        type: "post",
        data: value,
        success: function(response) {
          console.log(response + "erp ");
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(errorThrown + "erp ");}
      });

    }


  });
  // loaded code after deffer script load


 
  // code for newsletter subsribe submission
  $('.subscibe-newsletter').on('click', function() {

    let email = $('#email-address').val();
    var token = $("#token").val();
    var values = {
      "_token": token,
      "email": email
    };
    $.ajax({
      url: "{{url('submit-newsletter')}}",
      type: "post",
      data: values,
      success: function(response) {
        if (response == 1) {
          $("#alert-msg").show();
          setTimeout(function() {
            $("#alert-msg").hide();
          }, 5000);
        }

        valid = false;
      },
      error: function(jqXHR, textStatus, errorThrown) {

        console.log(textStatus, errorThrown);
        console.log(res);
        // alert("Your form fields are validated. Now you can implement insert logic");
      }
    });

  });





  // Select all lazy iframe placeholders
  const lazyIframes = document.querySelectorAll('.lazy-iframe');
  // Intersection observer callback
  const handleIntersection = (entries, observer) => {
    console.log(entries, observer)
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const iframeSrc = entry.target.dataset.src;
        const iframe = document.createElement('iframe');
        iframe.src = iframeSrc;
        iframe.style.width = "100%"
        iframe.style.height = "100%"
        iframe.style.border = "none"

        // Replace the placeholder with the loaded iframe
        entry.target.replaceWith(iframe);
        // Unobserve the placeholder element
        observer.unobserve(entry.target);
      }
    });
  };

  // Create an intersection observer
  const observer = new IntersectionObserver(handleIntersection);
  // Observe each lazy iframe placeholder
  lazyIframes.forEach((lazyIframe) => {
    observer.observe(lazyIframe);
  });


</script>