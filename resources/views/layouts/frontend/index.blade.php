@extends('layouts.main')
@section('title', 'Home')
@section('mainSection')
<div class="page-title">Interior Designs
    <div class="description">

        DESIGN YOUR HOUSE

    </div>
</div>
</div>

<div class="page-blocks">
    <div class="title" data-aos="fade-right">
        <section id="Our Designs">
            Our Designs
        </section>
    </div>
    <div class="design">
        <img src="{{ asset('images/img1.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img2.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img3.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img4.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img5.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img6.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img7.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img8.jpg') }}" data-aos="fade-up" />
        <img src="{{ asset('images/img9.jpg') }}" data-aos="fade-up" />
    </div>

    <button class="more-designs-button" data-aos="fade-up"><a href="{{ url('/more-designs')}}"> More Designs </a></button>
</div>


<div class="page-blocks">
    <div class="title" data-aos="zoom-in">
        <section id="Why Us">
            Why Us
        </section>
    </div>
    <div class="flex-block">
        <div class="why-us-flex" data-aos="zoom-in">
            <div class="block-label">
                Our Projects
            </div>
            <div class="block-description">Our expert designers are well trained and equipped with major moderm interior designing tools that
                help us provide you with innovative solutions and unique Interior decor plans that stand out.
            </div>
        </div>
        <div class="flex-block">
            <div class="why-us-flex" data-aos="zoom-in">
                <div class="block-label">
                    Our Services
                </div>
                <div class="block-description">Architectural planning and drawings
                    Floor plans,
                    Furniture and accessory selection,
                    Custom textile and furniture design,
                    Color palette designs,
                    Finish selections for walls and floors,
                    Holiday decorating,
                    Styling
                    And any other interior design services that are relevant to the job and client in question.
                    Remember to include any work that you will need to contract out to another service provider, like a plumber or painter if you’re required to subcontract their services.


                </div>
            </div>
        </div>
        <div class="flex-block">
            <div class="why-us-flex" data-aos="zoom-in">
                <div class="block-label">
                    Finished Projects
                </div>
                <div class="block-number">
                    1,471,987
                </div>
            </div>
            <div class="why-us-flex" data-aos="zoom-in">
                <div class="block-label">
                    Upcoming Projects
                </div>
                <div class="block-number">
                    251,907
                </div>
            </div>

        </div>
    </div>

    <div class="page-blocks">
        <div class="title" data-aos="zoom-in">
            <section id="Appointment">
                Appointment
            </section>
        </div>
        <div class="flex-block">
            <div class="appointment-flex" data-aos="fade-right">
                <div class="appointment-img">
                    <div class="appointment-text">
                        Make An Appointment Today
                    </div>
                </div>
            </div>
            <div class="appointment-flex py-2 px-5 text-left" data-aos="fade-left">
                <!-- <form action="" method="post" class="appointment-form">
                
                <input type="text" placeholder="Name" name="name" required/><br/>
                
                <input type="number" placeholder="Mobile" name="phone" required/><br/>
                
                <input type="email" placeholder="Email" name="email" required/><br/>
                
                <input type="text" placeholder="City" name="address" required/><br/>
                
                <textarea type="text" placeholder="Requirement" name="requirement" required></textarea><br/>
                <button input type="submit" value="submit" class="appointment-btn" name="send">Make An Appointment</button>
            </form> -->

                <form action="{{ url('/make-appointment') }}" method="POST">
                    @csrf
                    <div class="form-group m-auto mt-1">
                        <label for="name">Full Name </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group m-auto mt-1">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group m-auto mt-1">
                        <label for="mobile">Contact Number</label>
                        <input type="tel" name="mobile" class="form-control" id="mobile" placeholder="Password">
                    </div>
                    <div class="form-group m-auto mt-1">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group m-auto mt-1">
                        <label for="requirement">Requirements</label>
                        <textarea name="requirement" class="form-control" rows="3"  id="requirement" placeholder="Requirements"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection