@extends('frontend.layout.app')
@section('meta_keywords', 'website development company,web development services,best website development company,website development company near me')

@section('meta_description', 'Looking for website development services company? Contact Master Infotech +91 74000 18000  a one-stop-shop for all website development services.')
@section('meta_tag','Best Website Development Services Company | Master Infotech')
@section('meta_extra_seo','')
@section('content')

    <main>
      <section class="section-career" >
        <div class="title"><h2>Application Form: <span>{{$job->title}}</span></h2></div>
        <div class="job-content">
          <div class="apply-desc">
            <h3>Job Description</h3>
            <p>{!! $job->description !!}</p>
            <!-- <p>We are looking to hire a talented iOS developer to design, build, and maintain the next generation of iOS applications. 
              Your primary focus will be developing high-end iOS applications for the latest Apple mobile devices. Your duties may include collaborating with the 
              design team for new application features, identifying and fixing application bottlenecks, maintaining the core code, and updating applications published on the App Store.<br>
              To ensure success as an iOS developer, you should have a strong working knowledge of iOS Frameworks, be proficient in Objective-C, and be able to work as part of a team. 
              Ultimately, an outstanding iOS developer should be able to create functional, attractive applications that perfectly meet the needs of the user.</p>

            <p>Responsibilities:</p>

            <ul>
            <li>Design and build applications for the iOS platform</li>
            <li>Collaborating with the design team to define app features.</li>
            <li>Ensuring quality and performance of the application to specifications.</li>
            <li>Identifying potential problems and resolving application bottlenecks.</li>
            <li>Fixing application bugs before the final release.</li>
            <li>Publishing application on App Store.</li>
            <li>Maintaining the code and atomization of the application.</li>
            <li>Designing and implementing application updates.</li>
            </ul>
            
            <p>Requirements:</p>

            <ul>
            <li>Bachelor’s degree in computer science or software engineering.</li>
            <li>Proven experience as an app developer.</li>
            <li>Proficient in Objective-C, Swift, and Cocoa Touch.</li>
            <li>Extensive experience with iOS Frameworks such as Core Data and Core Animation.</li>
            <li>Knowledge of iOS back-end services.</li>
            <li>Knowledge of Apple’s design principles and application interface guidelines.</li>
            <li>Proficient in code versioning tools including Mercurial, Git, and SVN.</li>
            <li>Knowledge of C-based libraries.</li>
            <li>Familiarity with push notifications, APIs, and cloud messaging.</li>
            <li>Experience with continuous integration.</li>
            </ul> -->

            <p>Details :-</p>
            
            <ul>
            <li><strong>Experience:</strong>&nbsp;{{$job->experience}}</li>
            <li><strong>Job Location:</strong>&nbsp;{{$job->area}}</li>
            </ul>
          </div>
          <div id="apply-form">
            <h3>Apply Now</h3>    
            <div id="errjob"></div>
            <form id="contact_form" action="" method="post" enctype="multipart/form-data">
            @csrf   
            <div class="form-group">
                <h6>Name</h6>
                <input type="text" class="form-control" id="career_name" name="career_name" value="">
                <span id="nerror"></span>
              </div>
              <div class="form-group">
                <h6>E-mail</h6>
                <input type="email" class="form-control" id="career_email" name="career_email" value="">
                <span id="eerror"></span>
            </div>
              <div class="form-group">
                <h6>Phone Number</h6>
                <input type="number" class="form-control " id="career_phone" name="career_phone" value="">
                <span id="perror"></span>
            </div>
              <div class="form-group">
                <h6>Portfolio Link</h6>
                <input type="text" class="form-control " id="career_link" name="link" value="">
                <span id="lerror"></span>
              </div>
              <div class="form-group upload-btn-wrapper">
                <h6>Upload CV</h6>
                <input type="file" name="file_attach" id="images_up" class="form-control custom-file-input" placeholder="Choose file">
                <input type="hidden" class="form-control " id="myfile" name="job_id" value="{{$ids}}">
                <span id="ferror"></span>
                      
            </div>
    
              <div id="captcha" class="form-group "><div style="width: 304px; height: 78px;">
                <div>
                <div class="lazy-iframe" style="width: 100%; height: 100%" data-src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeEOIseAAAAAKMh_Yxxjy9mewGbidHgm5NyCDKq&amp;co=aHR0cHM6Ly9tYXN0ZXJpbmZvdGVjaC5jb206NDQz&amp;hl=en&amp;v=RGRQD9tdxHtnt-Bxkx9pM75S&amp;size=normal&amp;cb=3lot3f9rapdg"></div>
  
                  <!-- <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeEOIseAAAAAKMh_Yxxjy9mewGbidHgm5NyCDKq&amp;co=aHR0cHM6Ly9tYXN0ZXJpbmZvdGVjaC5jb206NDQz&amp;hl=en&amp;v=RGRQD9tdxHtnt-Bxkx9pM75S&amp;size=normal&amp;cb=3lot3f9rapdg" width="304" height="78" role="presentation" name="a-5e2lpfh1mqwv" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe> -->
                  </div>
                  <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;">
                </iframe>
              </div>
                    <div id="errormsg"></div>
                    <div class="text-center">
                <button class="join2-button" type="submit" id="submitBtn" name="submit" value="submit"> Submit form</button>
              </div>
            </form>
          </div>
          
        </div>
      </section>
      
    </main>

    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>

$(document).ready(function (e) {
 $("#contact_form").on('submit',(function(e) {
  e.preventDefault();
  errorMessage = "";
        $(".error").html("");
        var isValid = true;
        var regName = /^[a-zA-Z ]+$/;
        var regemail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var regphn = /^[0-9]*$/;
        

        //Validate First name
        if ($("#career_name").val() == "") {
            $("#nerror").html("Please Enter Your Name").css("color", "red");
            isValid = false;
        }
        else {
            $("#nerror").hide();
            isValid = true;
        }
        
         if ($("#career_email").val() == "") {
            $("#eerror").html("Please Enter Your Email ").css("color", "red");
            isValid = false;
        }
        
          else if (!regemail.test($("#career_email").val())) {
                $("#eerror").html("Please Enter Your Valid Email").css("color", "red");
                isValid = false;
            }else{
                $("#eerror").hide(); 
                isValid = true;
            }
        
                
         if ($("#career_phone").val() == "" || $("#career_phone").val() == null ) {
            $("#perror").html("Please Enter Your Phone Number").css("color", "red");
            isValid = false;
        }else{
            $("#perror").hide(); 
            isValid = true;
        }
        if ($('#images_up').get(0).files.length === 0) {
            $("#ferror").html("Please Upload Resume").css("color", "red");
            isValid = false;
            }else{
            $("#ferror").hide(); 
            isValid = true;
            }
                        
        if(isValid == true){
            
            var formData = new FormData(this);
                $.ajax({
                    url: "/jobpost",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data)
                        {
                            if(data=='success')
                                {

                            $("#contact_form")[0].reset(); 
                            $("#errjob").html("Thank You, We will revert you soon!").show();       
                              $("#errjob").css('color','green');
                              $("#errjob").delay(2000).fadeOut(500);
                            }
                         },
                        error: function(e) 
                            {
                                $("#errjob").html(e).fadeIn();
                            }          
                });
        }
 
 

 }));

 function validation() {
    
    //Initially default values;
        errorMessage = "";
        $(".error").html("");
        var isValid = true;
        var regName = /^[a-zA-Z ]+$/;
        var regemail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var regphn = /^[0-9]*$/;
        

        //Validate First name
        if ($("#career_name").val() == "") {
            $("#nerror").html("Please Enter Your Name").css("color", "red");
            isValid = false;
        }
        else {
            if (!regName.test($("#career_name").val())) {
                $("#nerror").html("Please Enter Your Valid Name").css("color", "red");
                isValid = false;
            }
        }
        
         if ($("#career_email").val() == "") {
            $("#eerror").html("Please Enter Your Email ").css("color", "red");
            isValid = false;
        }
        else {
            if (!regemail.test($("#career_email").val())) {
                $("#eerror").html("Please Enter Your Valid Email").css("color", "red");
                isValid = false;
            }
        }
                
         if ($("#career_phone").val() == "" || $("#career_phone").val() == null ) {
            $("#perror").html("Please Enter Your Phone Number").css("color", "red");
            isValid = false;
        }
                
        

        //  else if(isvalidformfooter == 0){
        //     isValid = false;
        // }
        
        /* if ($("#budgetfoot").val() == "none") {
            $("#error_budgetfoot").html("Please Select A Budget ")
            isValid = false;
        } */
        //     if ($("#new_service").val() == "none") {
        //     $("#lerror").html("Please Select A Service ").css("color", "red");
        //     isValid = false;
        // }
        // console.log(verifythiscaptcharesponse);
        // if(verifythiscaptcharesponse == "" || verifythiscaptcharesponse == null ){
        // 	$("#captcha").siblings(".error").html("Please Select Checkbox")
        // 	isValid = false;
        // } 
     return isValid;
}
});
</script>