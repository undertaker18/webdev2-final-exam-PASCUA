

@extends('layouts.layout')

@section('content')
<main role="main">
        <div id="myCarousel" class="carousel" data-ride="carousel">     
          <div class="carousel-inner"> 
            <div class="carousel-item active">
                <div class="carousel-caption text-xl-start">

                <h4>THANK YOU!</h4>
                <h4>your request form has been sent!</h4>
                <br>
                <a href="/bible-study-requests">
                <button type="submit" class="choice">LIST OF BIBLE STUDY REQUESTS</button>
                </a>
                <a href="/bible-study-request-form">
                <button type="submit"class="choice">ANOTHER BIBLE STUDY REQUESTS FORM</button>
                </a>
                
                </div>
                <img src="img/bgt5.jpg"  alt="LV" width="100%" height="100%" style="object-fit:cover ; position :fixed">
            </div>
           
          </div>
          
        </div>
      
        <div id="myCarousel" class="carousel" data-ride="carousel"></div>
      
        </div>
  </main>

@endsection