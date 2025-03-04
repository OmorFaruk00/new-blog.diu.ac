@extends('layouts.master')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap');
h1 { padding: 0 0 30px;}
:root{ 
    --white: #fff;
    --color1: #37AD4B;
    --color2: #03840B;
}
.contact{
    color: var(--color2);
    background: linear-gradient(130deg,var(--color1),var(--color2));
    font-family: "Signika Negative", sans-serif;
    text-align: center;
    width: 100%;
    height: 210px;
    border-radius: 30px 30px;
    padding: 46px 10px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}
.contact:before,
.contact:after{
    content: "";
    background: var(--white);
    width: calc(100% - 35px);
    height: calc(100% - 35px);
    border-radius: 15px 15px;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 50%;
    left: 50%;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    z-index: -1;
}
.contact:after{
    background:#fff;
    width: calc(100% - 100px);
    height: 100%;
    border-radius: 0; 
    box-shadow: none;
    z-index: -2;
}
.contact .contact-icon{
    font-size: 30px;
    line-height: 30px;
    margin: 0 0 15px;
}
.contact .contact-icon i {line-height:inherit;}
.contact h3{
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 10px;
}
.contact .contact-value{
    font-size: 18px;
    font-weight: 600;
    line-height: 33px;
    /* display: block; */
}

.contact.blue{ 
    --color1: #06A3DA;
    --color2: #06A3DA;
}
@media screen and (max-width:990px){
    .contact{ margin-bottom: 40px; }
}
</style>
<div class="container-fluid bg-primary py-3 bg-header" style="margin-bottom: 60px;">
    <div class="py-5 container">
        <div class="pt-5 ">
            <h1 class="text-center text-white animated zoomIn"> Contact Us</h1>              
        </div>
        <div class="text-center" >
            <a href="{{route('home')}}"> <span style="color: #fff">Home</span> </a> <span><i class="fa fa-arrow-right px-3" style="color: #fff"></i></span>  <span style="color: #fff">Contact</span> 
        </div>
    </div>
</div>
<div class="container pb-5">
    <div class="row text-center pb-3">
        <h1>Permanent Campus
        </h1>
    </div>

    <div class="row">
      
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact blue">
                <div class="contact-icon">
                    <span><i class="bi bi-geo-alt text-primary me-2"></i></span>
                </div>
                <h3>Address</h3>
                <span class="contact-value">Satarkul, Badda, Dhaka-1212, Bangladesh.</span>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact blue">
                <div class="contact-icon">
                    <span><i class="bi bi-envelope-open text-primary me-2"></i></span>
                </div>
                <h3>Email</h3>
                <span class="contact-value">admission@diu.net.bd</span>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="contact blue">
                <div class="contact-icon">
                    <span><i class="bi bi-telephone text-primary me-2"></i></span>
                </div>
                <h3>Phone</h3>
                <span class="contact-value">+8809677777348</span>
            </div>
        </div>
    </div>
</div>

<div>


    <iframe src="https://www.google.com/maps/d/embed?mid=1hskkLv7lAOUdnYgt51OZnpFUSFk&ehbc=2E312F" width="100%" height="480"></iframe>
</div>



@endsection