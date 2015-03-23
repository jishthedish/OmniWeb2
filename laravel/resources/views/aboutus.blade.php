@extends('app')

@section('content')
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->   

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span6">
                <h2>What we are</h2>
                <p>Our values are Innovation, Commitment to Principles,
                 Customer Satisfaction and Profitable Growth.</p>
            </div>

        </div>

        <hr>

        
        <div class="row-fluid">
            <div class="span6">
                <h3>Why Choose Us?</h3>
                <p>We build world class products and services with special focus on Cloud, SmartDevices and BigData Technologies for the greater benefit of Society`.</p>
            </div>
            
            <div class="span6">
                <h3>Our Services</h3>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          B2C Integration
                      </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
 Interaction could be in the form of Pushing Approval Letters, Booking confirmations, Registrations etc… Our service enables Businesses send rich g
                  </div>
              </div>
          </div>
          <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  Campaign Management
              </a>
          </div>
          <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
              Campaign Management is integrated with consumer analytics to obtain insight into consumer spending habits. Businesses can create a coupon or deal or flyer or an invitation as part of the service and then push it to targeted customers smart phones based on certain Business rules. 
          </div>
      </div>
  </div>
  <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
          Consumer Analytics
      </a>
  </div>
  <div id="collapseThree" class="accordion-body collapse">
    <div class="accordion-inner">
      We offer Consumer Analytics as a Service. We profile customers based on various parameters like Spend, Frequency of Visit, Demographics etc… which is used for running promotions using our campaign management service.
  </div>
</div>
</div>
  <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
          Consumer Analytics
      </a>
  </div>
  <div id="collapseFour" class="accordion-body collapse">
    <div class="accordion-inner">
      We offer Consumer Analytics as a Service. We profile customers based on various parameters like Spend, Frequency of Visit, Demographics etc… which is used for running promotions using our campaign management service.
  </div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
