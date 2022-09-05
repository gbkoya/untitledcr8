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
<div class="blogpost-content">
    <img src="/customImages/Frame 76.png" class="blogpost_firstimg">
    <p class="combat">How to combat digital eye strain</p>
    <p class="blogpost_date">August 2022</p>
    <p class="blogpost_content">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum</p>
</div>
<div class="blogpost_about_content">
<div class="blogpost-card1">
    <img src="/customImages/Frame 116.png" class="blogpost_eyeimg">
    <div>
    <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
    <button class="blogpost_readmore_button">READ MORE</button>
    </div>
</div>
    <!--  -->
    <div class="blogpost-card">
        <img src="/customImages/Frame 115.png" class="blogpost_eyeimg">
        <div>
        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
        <button class="blogpost_readmore_button">READ MORE</button>
        </div>
    </div>
    <!--  -->

    <div class="blogpost-card">
        <img src="/customImages/Frame 116.png" class="blogpost_eyeimg">
        <div>
        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
        <button class="blogpost_readmore_button">READ MORE</button>
        </div>
    </div>
    <!--  -->

    <div class="blogpost-card">
        <img src="/customImages/Frame 116.png" class="blogpost_eyeimg">
        <div>
        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
        <button class="blogpost_readmore_button">READ MORE</button>
        </div>
    </div>
   </div>


<button class="blogpost_backtoblog">BACK TO BLOG</button>
    <script type="text/javascript"></script>

@endsection
