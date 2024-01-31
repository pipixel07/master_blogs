       <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

       <footer>
         <x-contact-form /> <!-- contact form component -->
         <div class="footer-sec-cont">
           <div class="footer-sec">
             <div>
               <ul>
                 <li>Contact</li>
                 <li><a href="tel:+91 74000 18000">+91 74000 18000</a></li>
                 <li><a href="tel:+1 (718) 514-2776">+(718) 514-2776</a></li>
                 <li><a href="tel:+44 7441394486">+44 7441394486</a></li>
                 <li><a href="mailto:info@masterinfotech.com">Info@masterinfotech.com</a></li>
               </ul>
               <ul>
                 <li>INDIA</li>
                 <li>Plot no 169 Sector 82 JLPL, Mohali Punjab, INDIA</li>
               </ul>
               <ul>
                 <li>USA</li>
                 <li>3rd floor, 30 W 47th St #301, Etech7, Newyork, UNITED STATES</li>
               </ul>
             </div>
             <div>
               <ul>
                 <li>Menu</li>
                 @foreach($pageurls as $pages)
            <li> <a href="{{url($pages->slug)}}" >{{$pages->title}}</a></li>
          @endforeach
               </ul>
             </div>
             <div>
               <ul>
           
          <ul>
          @foreach($services as $link)
            <li> <a href="{{url($link->slug)}}" >{{$link->title}}</a></li>
          @endforeach
          </ul>
        
      </ul>
               </ul>
             </div>
             <div class="follow">
               <ul>
                 <li>About</li>
                 <li><a href="{{url('about-us')}}">Who we are</a></li>
                 <li><a href="{{url('about-us#ourvision')}}">Our Vision</a></li>
                 <li><a href="{{url('about-us#ourvalue')}}">Our Value</a></li>
                 <li><a href="{{url('write-for-us')}}">Write for Us</a></li>
               </ul>
               <ul>
                 <li>Follow us</li>
                 <li>
                   <ul>
                     <li><a href="https://www.facebook.com/masterinfotech/"><img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/facebook-ftr.png"></a>
                     </li>
                     <li><a href="https://twitter.com/masterinfotech_"><img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/twitter-ftr.png"></a></li>
                     <li><a href="https://www.instagram.com/masterinfotechofficial/"><img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/instagram-ftr.png"></a></li>
                     <li><a href="https://www.linkedin.com/company/master-infotechofficial/"><img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/linkedin-ftr.png"></a></li>
                     <li><a href="https://www.behance.net/ab941400?tracking_source=search_users_recommended%7Cmaster%20infotech"><img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/behance-ftr.png"></a></li>
                     <li><a href="https://dribbble.com/MasterInfotechOfficial"><img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/dribble-ftr.png"></a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </div>
             <div class="newsletter-div">
               <ul>
                 <li>Newsletter</li>
                 <li>Signup for Freshly Brewed Update</li>
                 <div style="background-color: #f05123; border-radius: 6px; font-size:12px; display:none" id="alert-msg">
                 You have successfully subscribed to our newsletter!
                 </div>
                 <li>
                   <div class="news-input"><input type="email" id="email-address" placeholder="Your email address">
                     <button class="subscibe-newsletter"> Subscribe</button>
                   </div>
                 </li>
               </ul>
               <div>
                 <img  loading="lazy" src="https://cdn.masterinfotech.com/assets/images/clutch2.png">
               </div>
             </div>
           </div>
           <div class="copyright">
             <div> © Copyrights 2016-2023. <a href="#"> Masterinfotech </a> | All Rights Reserved </div>

             <a href="{{url('privacy-policy')}}">Privacy Policy</a>
             <a href="{{url('terms-and-condition')}}">Term and Condition</a>
           </div>
         </div>
       </footer>


       <!--~./ end site footer ~-->