  @extends('layouts.home-master')

  @section('class')
page-inner @endsection

    @section('content')     

  <!-- MAIN -->
        <main class="site-main contact-us">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="{{route('/')}}">Home </a></li>
                    <li class="active"><a href="">Contact Us</a></li>
                </ol>
            </div>

            <div class="col-md-6 col-md-offset-3">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            
                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
        </div>

            <div class="container">
                <div class="row">
                    <div class="contact-map full-width">
                        <iframe width="100%" height="450" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJNVVQ9B8Z6zkRI_a7FoSPxbQ&key=AIzaSyCscBbPIiLWllJLvYcoFce_cZ4QJk87nok" allowfullscreen></iframe>
                    </div>
                    <form class="form-contact" action="{{route('comment')}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-5">
                            <div class="contact-info">
                                <h5 class="title-contact">Leave a Message</h5>
                                <p class="form-row form-row-wide">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" value="" name="name" placeholder="Full name" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" value="" name="email" placeholder="Email" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Number Phone<span class="required"></span></label>
                                    <input type="text" value="" name="contact" placeholder="Contact Number" class="input-text">
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="form-row form-row-wide form-text">
                                <label>Comment<span class="required"></span></label>
                                <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="comment" placeholder="Your Message.."></textarea>
                            </p>
                            <p class="form-row">
                                <input type="submit" value="Submit" name="Submit" class="button-submit">
                            </p>
                        </div>
                    </form>
                    <div class="col-md-3 contact-detail">
                        <h5 class="title-contact">Contact Detail</h5>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <h4 class="title-info">Email</h4>
                            <div class="info-detail"> {{setting('site.email')}}</div>
                        </div>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <h4 class="title-info">Phone</h4>
                            <div class="info-detail">{{setting('site.phone')}}</div>
                        </div>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <h4 class="title-info">Mail Office</h4>
                            <div class="info-detail">{{setting('site.location')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- end MAIN -->
       

       @endsection