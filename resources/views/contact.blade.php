@extends('layouts.app')
@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

<body>
    <section class="fit-screen" >
    <div class="row mt-5">

        <div class="col-md-3 mt-5" style="background: #595959; height: fit-content">
            <div class="input-forms-txt pt-5 px-4 small-text">LETS GET GROWING</div>
            <div class="px-4 py-3 big-text " style="font-weight: 700;font-size: 64px;line-height: 74px;color: #FFFFFF; ;">
                Launch a Project
            </div>
        </div>
        <div class="col-md-9 mt-5 bg-img">
            <div class="col-md-11 container mt-5">
                <div class="contact-txt medium-text">CONTACT INFORMATION</div>
                <div class="col-md-10 mt-5 pt-3">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-forms-txt small-text">Name</div>
                                <input class="input-forms input-forms-txt px-2 mt-2 small-text" type="text" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6">
                                <div class="input-forms-txt seperate small-text">Company name / website</div>
                                <input type="text" class="input-forms-txt input-forms px-2 mt-2 small-text" placeholder="Enter company name / website">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="input-forms-txt small-text">Email</div>
                                <input type="text" class=" input-forms-txt input-forms px-2 mt-2 small-text" placeholder="Enter Email">
                            </div>
                            <div class="col-md-6">
                                <div class="input-forms-txt seperate small-text">Phone number</div>
                                <input type="text" class="input-forms-txt input-forms px-2 mt-2 small-text" placeholder="Enter phone number">
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="input-forms-txt small-text">Message</div>
                            <textarea type="text" class="input-forms-txt input-textarea mx-3 mt-2 pt-2 small-text" rows="6" placeholder=" Enter Message"></textarea>

                        </div>

                        <center><a href=""><button class="orange-button my-5 small-text">Submit</button></a></center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
<script>
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");


    }
</script>


@endsection