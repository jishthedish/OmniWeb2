@extends('app')

@section('content')
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title --> 

    <section style="text-align:center">
        <a href="http://maps.google.com/maps?hl=en&amp;q=12%C2%B057'45.6%22N+77%C2%B042'31.9%22E&amp;ie=UTF8&amp;hq=&amp;hnear=12%C2%B057'45.6%22N+77%C2%B042'31.9%22E&amp;t=m&amp;z=15&amp;source=embed" id="my_href"><img width="700" height="365" src="http://maps.google.com/maps/api/staticmap?language=en&amp;center=12%C2%B057'45.6%22N+77%C2%B042'31.9%22E&amp;zoom=15&amp;size=700x365&amp;format=png32&amp;maptype=roadmap&amp;markers=12%C2%B057'45.6%22N+77%C2%B042'31.9%22E&amp;sensor=false" id="my_src"></a>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
    <section class="no-margin">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>Omniware Technologies</p>
            <p>
                <i class="icon-map-marker pull-left"></i> #1007, 1st Floor, D Block, AECS Layout, Kundalahalli, Bengaluru - 560 037
Karnataka, INDIA</p>
            <p>
                <i class="icon-envelope"></i> &nbsp;Muralidhar.Nutakki@omniware.in
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+91-98805 29034
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://omniware.in/
            </p>
        </div>

    </div>

</section>
@endsection