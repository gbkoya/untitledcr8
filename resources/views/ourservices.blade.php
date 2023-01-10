@extends('layouts.app')

@section('description',
'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology
landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


<body>
    <div class="row mt-5 pt-5">
        <div class="col-md-3 un-text2  px-5 big-text no-margin no-padding" id="myDiv">
            Our Services
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 mt-5 accelerate-text medium-text">
            <center>
                Accelerate your online growth with integrated technical, creative, and marketing expertise on demand.
            </center>
        </div>
    </div>
    <div class="container col-md-8" style="margin-top:-40px; background:#000">
        <iframe width="100%" height="495px" src="{{ asset('customImages/Abraham.mp4') }}" frameborder="0"></iframe>
    </div>

    <center>
        <div class="container what-txt mt-5 medium-text">
            WHAT WE DO
        </div>
    </center>

    <div class="container d-flex mt-5 flex-wrap">
        <div class="col-md-6">
            <div class="d-flex">
                <img class="mx-3 reduce-size2" src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 82px; height: 82px;">
                <div>
                    <div class="dm-txt medium-text">Digital Marketing</div>
                    <div class="my-3" style="border: 1px solid ;"></div>
                    <div class="dm2-txt small-text">
                        Distribute your message directly to qualified customers across Google,
                        Facebook, Instagram, TikTok, Pinterest, SMS and more. P3’s data-driven,
                        omnichannel approach maximizes your return on ad spend.
                    </div>
                </div>
            </div>


            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Search Engine Optimization</div>
                    <div class="dm2-sm-txt small-text">
                    Search engine optimization (SEO) improves the visibility and ranking of your website on search 
                    engines like Google. It drives organic traffic to your site and can lead to increased brand awareness, 
                    customer acquisition, and sales. Investing in SEO can be a cost-effective way to generate qualified leads 
                    and improve the performance of your online presence.
                    </div>
                </div>
            </div>


            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Email Marketing</div>
                    <div class="dm2-sm-txt small-text">
                    Email marketing is a digital strategy that involves sending targeted 
                    and personalized messages to a group of subscribers via email. It helps drive 
                    conversions and sales, and allows you to segment your email list, personalize your 
                    messages, and track the success of your campaigns.It is important to follow best 
                    practices, such as obtaining consent and following privacy laws, to ensure effective 
                    and compliant campaigns.
                    </div>
                </div>
            </div>

            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Social Media Marketing</div>
                    <div class="dm2-sm-txt small-text">
                    Social media marketing is the process of using social media platforms to promote and market 
                    products or services. It involves creating and sharing content, such as text, images, and 
                    videos, to engage with and build relationships with your target audience. Social 
                    media marketing can help increase brand awareness and drive traffic and sales to 
                    your website. It also allows you to target specific demographics and locations, 
                    and to track and measure the success of your campaigns.
                    </div>
                </div>
            </div>

            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Marketing Campaigns</div>
                    <div class="dm2-sm-txt small-text">
                    Marketing campaigns are coordinated efforts to promote and sell products or services. 
                    They can include a variety of tactics and activities, such as advertising, social media 
                    marketing, email marketing, and content marketing, and are typically designed to reach a 
                    specific target audience and achieve specific business goals. Marketing campaigns can be 
                    used to launch new products, increase brand awareness, drive traffic and sales, and more.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex ">
                <img class="mx-3 reduce-size2" src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 82px; height: 82px;">
                <div>
                    <div class="dm-txt medium-text ">Video and Photography</div>
                    <div class="my-3" style="border: 1px solid ;"></div>
                    <div class="dm2-txt small-text">
                    Our creative division uses a multilayer search and social listening methodology 
                    to pinpoint the visuals and messages that resonate in your niche, and build powerful 
                    creative assets that convert.
                    </div>
                </div>
            </div>

            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Animation</div>
                    <div class="dm2-sm-txt small-text">
                    It is used in a variety of fields, including film, television, video games, and web design. 
                    Animation can be created using a variety of techniques, such as hand-drawn, computer-generated,
                     and stop-motion. It is a powerful tool for storytelling, conveying complex ideas, 
                     and engaging audiences.
                    </div>
                </div>
            </div>

            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Motion Graphics</div>
                    <div class="dm2-sm-txt small-text">
                    Motion graphics are animated visual elements that are used to communicate information or 
                    ideas. They can be used to convey complex information in a more engaging and visually 
                    appealing way, and are often used in video marketing, explainer videos, and other types 
                    of visual content.
                    Motion graphics are a powerful tool for creating engaging and dynamic visual content, 
                    and can be used to enhance the impact of marketing materials and other forms of visual 
                    communication.
                    </div>
                </div>
            </div>

            <div class="d-flex col-md-9 mt-5">
                <img class="mx-4 " src="{{ asset('customImages/Group 1.png') }}" alt="" style="width: 53px; height: 53px;">
                <div>
                    <div class="dm-sm-txt small-text">Brand Videos</div>
                    <div class="dm2-sm-txt small-text">
                    Brand videos are promotional videos that showcase a brand's products, services, or values. 
                    They are often used to build brand awareness, engage with customers, and drive sales. Brand 
                    videos can be used across various marketing channels, such as social media, websites, 
                    and email campaigns. Effective brand videos are typically well-produced, visually appealing, 
                    and tailored to the target audience. They can include a variety of content such as product 
                    demonstrations, customer testimonials, and company culture videos..
                    </div>
                </div>
            </div>      
        </div>
    </div>


   
    
        



</body>
{{-- END OF STORE CARD SECTION --}}

<script type="text/javascript">
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
                div.innerHTML = `<div class="un-text-dark2  big-text px-5 no-margin ">
                Our Services
            </div>
            <div style="margin-top:-80px"><div>`;
            } else {
                div.innerHTML = originalContent;
            }
        }
</script>
@endsection