
@extends('layouts.layout')

@section('content')

          <main role="main">
            <div id="myCarousel" class="carousel" data-ride="carousel">     
              <div class="carousel-inner"> 
                <div class="carousel-item active">
                  <div class="carousel-caption ">

                  <h4>Bible Study Request Form</h4>
                    <div id="ourmanna-verse">
                        <div id="mannaverse-container">
                            <p id="mannaverse">
                                For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.
                            </p>
                            <p id="mannaverse-reference">
                                John 3:16
                                <small id="mannaverse-version"><i>(KJV)</i></small>
                            </p>
                        </div>
                    </div><br>
                   
                  <form action="/bible-study-form-create" method="POST" class="">
                            @csrf
                            <input type="hidden" value="{{ $bsrequest->id }}" name="id" >
                            
                            <label for="fullname" class="typefield-label" style="text-align: left;"></label>
                            <input type="text" value="{{ $bsrequest->fullname }}"  name="fullname" class="formtext" placeholder="&nbsp;&nbsp;Full name"><br>
    
                            <label for="email" class="typefield-label"></label>
                            <input type="email" value="{{ $bsrequest->email }}"  name="email" class="formtextemail" placeholder="&nbsp;&nbsp;Email Address"><br>

                            <label for="contactnumber" class="typefield-label">&nbsp;Contact Number&nbsp;</label>
                            <input type="number" value="{{ $bsrequest->contactnumber }}"  name="contactnumber" class="formtextcontact" placeholder="&nbsp;&nbsp;Number" ><br>

                            <label for="birthdate" class="typefield-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthdate&nbsp;&nbsp;&nbsp;</label>
                            <input type="date" value="{{ $bsrequest->birthdate }}"  name="birthdate" class="formtextbirthday" placeholder="&nbsp;&nbsp;Birthdate" ><br>

                            <label for="religion" class="typefield-label"></label>
                            <input type="text" value="{{ $bsrequest->religion }}"  name="religion" class="formtextreligion" placeholder="&nbsp;&nbsp;Religious Affiliation"><br>

                            <label for="bsdate" class="typefield-label">Bible Study Date&nbsp;</label>
                            <input type="date" value="{{ $bsrequest->bsdate }}"  name="bsdate" class="formtextdate" placeholder="&nbsp;&nbsp;Bible Study Date" ><br>

                            <label for="bstime" class="typefield-label">Bible Study Time&nbsp;</label>
                            <input type="time" value="{{ $bsrequest->bstime }}"  name="bstime" class="formtexttime" placeholder="&nbsp;&nbsp;Bible Study Time" ><br>

                            <label for="address" class="typefield-label"></label>
                            <input type="text" value="{{ $bsrequest->address }}"  name="address" class="formtextlocation" placeholder="&nbsp;&nbsp;Bible Study Location / Address" ><br><br>

                            <button type="submit" value="Submit and Save" class="signup-btn">Submit</button>

                    </form> 

                   
                  </div>
                    <img src="img/bgt5.jpg"  alt="LV" width="100%" height="100%" style="object-fit:cover ; position :fixed">
                </div>
               
              </div>
              
            </div>
          
            <div id="myCarousel" class="carousel" data-ride="carousel"></div>
          
            </div>
      </main>
       
@endsection