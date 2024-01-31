<div>
    <div class="footer-form" id="contact-form">
        <div>
            <div>
                <img loding="lazy" src="https://cdn.masterinfotech.com/assets/images/Contact-info.png" alt="Contact-info">
            </div>
            <div class="form-ft">
                <h2> Got a new project that you'd like to discuss? <span>Let us know</span></h2>
                <form>
                    <div class="form-input">
                        <div class="from-feild">
                            <div class="from-feild-inner">
                                <!-- <label>Name:</label> -->
                                <input type="text" placeholder="Name" name="name" id="new_name"><br>
                                <span id="new_error_name"></span>
                            </div>
                            <div class="from-feild-inner">
                                <!-- <label>e-mail:</label> -->
                                <input type="email" placeholder="E-mail" name="email" id="new_email"><br>
                                <span id="new_error_email"></span>
                            </div>
                            <div class="from-feild-inner">
                                <!-- <label>Phone No:</label> -->
                                <input type="number" id="new_phone" name="phone" placeholder="1234567890"><br>
                                <span id="new_error-msg" class="country-code-hide"></span>
                                <span id="new_error_phone"></span>
                            </div>
                            <div class="from-feild-inner">
                                <!-- <label>Select Service:</label> -->
                                <div class="wrap-drop" id="new_service">
                                <input type="text" id="selected-service" style="display:none">
                                    <span>Select services</span>
                                    <ul class="drop">
                                        <!-- <li class="selected"><a>Select services</a></li> -->
                                        @foreach($services as $service)
                                        <li value="{{$service}}"><a class="service">{{$service}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <span id="new_error_service"></span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <div class="form-submit">
                        <button class="main-btn radius-class read-btn" type="button" id="btn-sub">Submit</button>
                        <span id="new_error_submit"></span>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>