@extends('layouts.master')
@section('content')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
h1 { padding: 0 0 30px;}
:root{ --main-color: #F7699F; }
.about{
    color: var(--main-color);
    font-family: 'Roboto', sans-serif;
    text-align: center;
    padding: 45px 25px;
    position: relative;
    z-index: 1;
}
.about:before,
.about:after{
    content: "";
    position: absolute;
    z-index: -1;
}
.about:before{
    background: var(--main-color);
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    clip-path: polygon(0 15%, 15% 0%, 85% 0%, 100% 15%, 100% 85%, 85% 100%, 15% 100%, 0% 85%);
}
.about:after{
    background: #fff;
    box-shadow: 0 0 15px rgba(0,0,0,0.3);
    left: 10px;
    right: 10px;
    top: 10px;
    bottom: 10px;
}
.about .service-icon{
    font-size: 45px;
    line-height: 45px;
    margin: 0px auto 15px;
}
.about .service-icon i{line-height:inherit}
.about .title{
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 10px;
}
.about .description{
    color: #000;
    font-size: 15px;
    text-align: justify;
    line-height: 25px;
    margin: 0;
    padding: 10px 20px;
}
.about-img {
    max-width: 100%;
    height: auto;
}

.about.green{ --main-color: #06A3DA; }

@media only screen and (max-width: 1199px){
    .about{ margin: 0 0 40px; }
}
</style>
<div class="container-fluid bg-primary py-3 bg-header" style="margin-bottom: 60px;">
    <div class="py-5 container">
        <div class="pt-5 ">
            <h1 class="text-center text-white animated zoomIn"> About Us</h1>              
        </div>
        <div class="text-center" >
            <a href="{{route('home')}}"> <span style="color: #fff">Home</span> </a> <span><i class="fa fa-arrow-right px-3" style="color: #fff"></i></span>  <span style="color: #fff">About</span> 
        </div>
    </div>
</div>
<div class="container">
  
    <div class="row">
        <div class="col-md-6 col-sm-12 mb-4">
           <img src="/images/campus.jpg" alt="diu image" class="about-img">
        </div>      
   
        <div class="col-md-6 col-sm-12">
            <div class="about green">                
                <h3 class="title">Introduction</h3>
                <p class="description">Dhaka International University (DIU) is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline. This university was founded by Late Alhaj Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law, University of Dhaka, Bangladesh.</p>

                <p class="description">It is recognized that Dhaka International University is such a private university, which was founded by a person who was a renowned humanist and academician.He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the motto of DIU is the universal adage, "Knowledge is Power". DIU generates this power of Knowledge in an individual through teaching-learning, training, research and guidance by using modern, pragmatic and well-designed curriculum and syllabus.</p>

            </div>
        </div>
       
    </div>

    <div class="row pt-5">
          
   
        <div class="col-md-6 col-sm-12">
            <div class="about green">                
                <h3 class="title">DIU And Its Founder</h3>
                <p class="description">Dhaka International University was founded by Late Alhaj Professor Dr. A.B.M. Mafizul Islam Patwari. He was a Professor of the Department of Law, University of Dhaka, Bangladesh. It may be observed that Dhaka International University is perhaps the only private university which was established by a person who was basically an academician.</p>

                <p class="description">He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the slogan of DIU is the universal adage, “Knowledge is Power.” DIU wants to generate this power among individuals through teaching, training and guidance by using age worthy, pragmatic and well-designed curricula and syllabi.</p>

            </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-4">
            <img src="/images/founder.jpg" alt="diu image" class="about-img">
         </div>    
       
    </div>
</div>

@endsection