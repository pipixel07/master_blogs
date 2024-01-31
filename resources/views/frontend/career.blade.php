@extends('frontend.layout.app')
@section('meta_keywords', 'website development company,web development services,best website development company,website development company near me')

@section('meta_description', 'Looking for website development services company? Contact Master Infotech +91 74000 18000 a one-stop-shop for all website development services.')
@section('meta_tag','Best Website Development Services Company | Master Infotech')
@section('meta_extra_seo','')
@section('content')

<main>
  <section class="section-career">
    <div class="career-banner">
      <div class="career-img">
        <img src="https://cdn.masterinfotech.com/assets/images/careers1.webp" alt="Build your career at Master Infotech">
      </div>
      <div class="career-text">
        <h1>Together we<span> Grow</span></h1>
        <p>There are jobs, and then there are <strong>CAREERS!</strong> Work with us to explore new boundaries of your career growth.</p>
        <a href="#joinourteam" class="orange_br_btn">Join Our Team</a>
      </div>
    </div>
  </section>
  <section class="section-career">
    <div class="career-banner career-banner2">
      <div class="career-text">
        <h2>We have the right place for your <span>talent!</span></h2>
        <p>We’re always eager to meet fresh new talents, check out our open positions to push your career to new heights.</p>
      </div>
      <div class="career-img">
        <img src="https://cdn.masterinfotech.com/assets/images/careers2.webp" alt="Best IT Company">
      </div>
    </div>
  </section>
  <section class="job-career">
    <div class="title">
      <h2>We Are <span>Looking</span> For</h2>
    </div>
    <div class="job-lists">
      @foreach($job as $jobs)
      <div class="looking">
        <h3 class="looking-heading">{{$jobs->title}}</h3>
        <span>
          <p>{{ \Illuminate\Support\Str::limit(strip_tags($jobs->description), 150, $end='...') }}</p>
          <p><b>Experience:</b> {{$jobs->experience}} </p>
          <p><b> Location:</b> {{$jobs->area}}</p>
          <a href="{{url('job-apply',$jobs->id)}}" class="black_br_btn">Apply Now</a>
        </span>
      </div>
      @endforeach

      <!-- <div class="job-lists">
        <div class="looking">
          <h3 class="looking-heading">Project Cordinator (PC)</h3>
          <span>
            <p>We are looking for a Project Cordinator with solid organisational skills,including multitasking and time-management.
            </p>
            <p><b>Experience:</b> 0-1 Years </p>
            <p><b> Qualification:</b> BBA/ BCA/ MBA/ MCA/ BTech</p>
            <a href="{{url('career-form')}}" class="black_br_btn">Apply Now</a>
          </span>
        </div>


        <div class="looking">
          <h3 class="looking-heading">Business Development Executive(BDE)</h3>
          <span>
            <p>We are looking for a resilient, empathic business development executive to contribute to the growth of our company.
            </p>
            <p><b>Experience:</b> 0.6 months to 3 year </p>
            <p><b> Qualification:</b>BBA/ BCA/ BA/ MBA/ MCA/ BTech</p>
            <a href="{{url('career-form')}}" class="black_br_btn">Apply Now</a>
          </span>
        </div>
        <div class="looking">
          <h3 class="looking-heading">Content Writer and Copywriter</h3>
          <span>
            <p>We are seeking a skilled and creative Content Writer and Copywriter to join our team.
            </p>
            <p><b>Experience:</b> 1-5 years </p>
            <p><b> Qualification:</b> BBA/ BCA/ BA/ MBA/ Mass com and Journalism/ Sales and Marketing/ MA</p>
            <a href="{{url('career-form')}}" class="black_br_btn">Apply Now</a>
          </span>
        </div>
        <div class="looking">
          <h3 class="looking-heading">Social Media Executive</h3>
          <span>
            <p>We are searching for a talented social media Executive to represent our company.
            </p>
            <p><b>Experience:</b> 0.6 months to 3 year </p>
            <p><b> Qualification:</b> : BBA/ BCA/ BA/ MBA /Mass com and Journalism/ Sales and Marketing/ MA</p>
            <a href="{{url('career-form')}}" class="black_br_btn">Apply Now</a>
          </span>
        </div>
        <div class="looking">
          <h3 class="looking-heading">Digital Marketing Manager</h3>
          <span>
            <p>We are seeking a responsible digital marketing manager for overseeing and implementing the digital marketing strategies of our company.
            </p>
            <p><b>Experience:</b> 4+ years</p>
            <p><b> Qualification:</b> : Graduate degree or equivalent</p>
            <a href="{{url('career-form')}}" class="black_br_btn">Apply Now</a>
          </span>
        </div>
        <div class="looking">
          <h3 class="looking-heading">Graphic Designer</h3>
          <span>
            <p>Master Infotech is Looking for a Graphic Designer Intern which includes the entire process of defining requirements.
            </p>
            <p><b>Experience:</b>0-2 years</p>
            <p><b> Qualification:</b> : Bachelor’s degree in graphic design or related field.</p>
            <a href="{{url('career-form')}}" class="black_br_btn">Apply Now</a>
          </span>
        </div>



      </div> -->



    </div>
  </section>
  <section class="section-career3">
    <div class="title">
      <h2><span>Employees </span> Benefits</h2>
      <h4>We've got you covered!</h4>
    </div>
    <div class="benefits-flex">
      <div class="benefits">
        <h2 class="benefit-numbers ">01</h2>
        <h2 class=" benefit-name ">Group<br> Insurance</h2>
      </div>
      <div class="benefits">
        <h2 class="benefit-numbers ">02</h2>
        <h2 class="benefit-name ">Generous Paid<br> Time Off</h2>
      </div>
      <div class="benefits">
        <h2 class="benefit-numbers ">03</h2>
        <h2 class="benefit-name ">26 Week <br>Maternity Leave</h2>
      </div>
      <div class="benefits">
        <h2 class="benefit-numbers ">04</h2>
        <h2 class=" benefit-name ">On-site Free<br>Health Check UP</h2>
      </div>
    </div>
  </section>

</main>


@endsection