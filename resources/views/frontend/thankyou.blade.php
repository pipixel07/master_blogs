@extends('frontend.layout.app')
@section('content')

    <style>

#thank-you{
      background-color:#1a1a1a;
      text-align:center;
}
    
#thank-you h4 {
    color: #FFFFFF;
    font-family: "Roboto", Sans-serif;
    font-size: 30px;
    font-weight: 300;
    letter-spacing: 17.5px;
    padding:1rem 0rem ;
}
#thank-you h1 {
    color: #ffffff;
    font-family: "Poppins", Sans-serif;
    font-size: 80px;
    font-weight: 300;
    text-transform: uppercase;
    line-height: 1.2em;
    letter-spacing: 11.5px;
    padding:1rem 0rem;
}
#thank-you h3{
    text-align: center;
    color: rgba(255,255,255,0.87);
    font-family: "Poppins", Sans-serif;
    font-size: 29px;
    font-weight: 300;
    line-height: 1.5em;
    letter-spacing: 2.55px;
    padding:1rem 0rem;
}
#thank-you p{
    text-align: center;
    color: #FFFFFF;
    font-family: "Poppins", Sans-serif;
    font-size: 30px;
    font-weight: 400;
    letter-spacing: 2.55px;
    padding:1rem 0rem;

}
#thank-you>div {
     height: 100vh;
    vertical-align: middle;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
#thank-you button{
    font-family: "Poppins", Sans-serif;
    font-size: 20px;
    text-decoration: none;
    fill: #ffffff;
    color: #ffffff;
    background-color: rgba(42,117,255,0);
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #ffffff;
    border-radius: 0px 0px 0px 0px;
    margin:1rem 0rem;
    transition:0.3s ease-in-out;
    padding:0.7rem 2rem;
    font-weight:600;
    line-height: 1.3;
    letter-spacing: 3px;
}
#thank-you button:hover{    color:  rgb(18 18 19);
    background-color: #ffff;}


@media screen and (min-width:768px) and (max-width:1200px){
  #thank-you button{
    font-size: 16px;}
    #thank-you p{
    font-size: 24px;}
    #thank-you h3{
    font-size: 22px;}
    #thank-you h1 {
    font-size: 60px;}
    #thank-you h4 {
    font-size: 26px;}

}    

@media screen and (max-width:768px){
  #thank-you button{
    font-size: 14px;}
    #thank-you p{
    font-size: 18px;}
    #thank-you h3{
    font-size: 16px;}
    #thank-you h1 {
    font-size: 24px;letter-spacing:3px;}
    #thank-you h4 {
    font-size: 18px;letter-spacing:4px;}

}   
    </style>
    

         
          
      <section id="thank-you">
        <div>
            <h4>Thank You !</h4>
            <h1>CONGRATULATIONS !</h1>
            <h3>You are one step closer to<br>
              embarking on this Branding journey with us.</h3>
            <p>Our Experts will get in touch with you soon!</p>  

            <div><a href="https://www.masterinfotech.com/"><button>Back To Home <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></button></a></div>
        </div>

      </section>


    	@endsection