@extends('layouts.app')

@section('article:section', 'Home')
@section('url', 'https://foremost-website.herokuapp.com')
@section('image'){{ asset('customImages/Logo.png') }}@stop

@section('content')
<!-- Sub nav -->
<html>



<body class="mt-5" style="margin-right: 0px;" >

    <html>

    <body class="mt-5">
        <div class="d-flex flex-wrap mt-5 ">
            <div class="col-md-3 un-text px-5 big-text no-margin no-padding" id="myDiv">
                We are Untitled
            </div>

            <!-- <div class="col-md-3 untitled-dm" id="show" style=" display:none; ; font-weight: 700;font-size: 64px;line-height: 74px;; height:fit-content">
                We are Untitled
            </div> -->
            <div class="col-md-1 no-margin"></div>
            <div class="col-md-7 container u-ft small-text">
                As an independent design and marketing agency, Untitled Digital is dedicated to helping businesses
                solve problems and achieve growth through the use of creativity and technology. We understand the
                importance of creating compelling and meaningful brand experiences that inspire and engage
                customers, and strive to turn our clients' products and services into just that.
                At Untitled Digital, we pride ourselves on our mastery of digital technologies and use this
                expertise to accelerate business growth for our clients. We believe in building a bridge that
                connects our clients' current capabilities to their future potential, and we are committed to
                being with them every step of the way. Whether it's through the development of a new website,
                the creation of a social media campaign, or the design of a new logo, we are committed to
                delivering results that drive success.
            </div>
        </div>

        <section class="">
            <div class="d-flex flex-wrap" style="margin-top: 12%;">
                <div class=" col-md-3">
                    <div class="core-v-txt big-text no-padding"> Core Values</div>
                    <div style="border: 8px solid #FB8500;"></div>
                </div>


                <div class="col-md-8 container cv-txt small-text">
                    By “Core Values” we mean the values that are at the center of everything we do. Having
                    clearly defined Core Values helps us determine if we are on the right path and fulfilling
                    our business goals.
                    These values are the unwavering, unchanging guides by which we filter all our decision
                    making and goal setting efforts. They are the attitudes and mindsets we strive for,
                    understanding that if we fall short, at least we’re falling forward in the direction
                    of attaining these values. We treat them as resolutions.
                </div>
            </div>
        </section>

        <section class="container" style="margin-top: 12%;">
            <div class="d-flex flex-wrap">
                <div class="col-md-6 medium-text">
                    <div class="h2-txt medium-text">Bold</div>
                    <div class="under-txt col-md-11 mt-3 small-text">
                        Boldness means having the confidence and courage to take risks, be different,
                        and stand out from the competition. It requires a willingness to challenge the status
                        quo and push boundaries, and to think outside the box and find innovative solutions.

                        We are not afraid to be ourselves and to stand up for what we believe in. We are authentic
                        and transparent, and build trust with their customers by being genuine and honest.
                    </div>

                    <div class="h2-txt mt-5 medium-text">Adventorous</div>
                    <div class="under-txt col-md-11 mt-3 small-text">
                        we believe that having fun is a core value that should be at the heart of everything we do.
                        We believe that when we enjoy ourselves, we are more productive, creative, and engaged. That's
                        why we make sure to incorporate fun into our daily work lives, whether it's through team
                        building activities, social events, or simply by bringing a sense of playfulness and
                        lightheartedness to our tasks.
                        We also believe that having fun is not just about feeling good in the moment, but about
                        creating a positive and supportive work environment that fosters collaboration and
                        connection. We encourage our team members to have fun and be themselves, and we work hard
                        to create a culture where everyone feels welcome and included.
                    </div>

                    <div class="h2-txt mt-5 medium-text">All ideas are Welcome</div>
                    <div class="under-txt col-md-11 mt-3 small-text">
                        As a team, we value the importance of fostering an open and inclusive culture where all ideas
                        are welcome. We believe that every team member, regardless of their role or seniority, has
                        valuable insights and perspectives to contribute.
                        We understand that fostering a culture of collaboration and teamwork is essential for driving
                        innovation and creativity. By encouraging all team members to share their ideas and participate
                        in the decision-making process, we are able to come up with the best solutions and achieve our
                        goals. We are committed to ensuring that every team member feels heard and valued, and we strive to
                        create a culture where everyone can contribute and make a difference.
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h2-txt medium-text seperate">Have Fun</div>
                    <div class="under-txt col-md-11 mt-3 small-text">
                        we believe that having fun is a core value that should be at the heart of everything we do.
                        We believe that when we enjoy ourselves, we are more productive, creative, and engaged.
                        That's why we make sure to incorporate fun into our daily work lives, whether it's through
                        team building activities, social events, or simply by bringing a sense of playfulness and
                        lightheartedness to our tasks.
                        We also believe that having fun is not just about feeling good in the moment, but about
                        creating a positive and supportive work environment that fosters collaboration and
                        connection. We encourage our team members to have fun and be themselves, and we work
                        hard to create a culture where everyone feels welcome and included.
                    </div>

                    <div class="h2-txt mt-5 medium-text">Take ownership</div>
                    <div class="under-txt col-md-11 mt-3 small-text">
                        taking ownership is a core value that we hold dear. It means that we are responsible for our
                        actions and the outcomes of our work. We believe that taking ownership means being accountable
                        and accountable for the results of our efforts, and being willing to do what it takes to get the
                        job done.Taking ownership also means that we are committed to learning from our mistakes and
                        continuously improving. We embrace feedback and use it as an opportunity to grow and develop.
                        By taking ownership, we are able to build trust with our colleagues and clients, and create a
                        culture of excellence and accountability within our team.
                    </div>
                </div>



            </div>
        </section>

        <center>
            <div class="mt-5" style="border: 1px solid; width:80%"></div>
        </center>

        <center>
            <div class="launch-txt mt-5 small-text">Launch a Project</div>
            <div class="request-txt mt-5 medium-text">Request a Performance Estimate</div>
            <a href=""><button class="orange-button mt-5 small-text">Get In Touch</button></a>
        </center>

    </body>

    </html>


    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");


        }




        var originalContent;

        function replaceDiv() {
            // Get the div element
            var div = document.getElementById("myDiv");

            // Save the original content of the div
            if (!originalContent) {
                originalContent = div.innerHTML;
            }

            // Toggle the content of the div
            if (div.innerHTML === originalContent) {
                div.innerHTML = `<div class="un-text-dark untitled-dm big-text px-5 no-margin ">
                We are Untitled
            </div>`;
            } else {
                div.innerHTML = originalContent;
            }
        }
    </script>

</body>

</html>


@endsection