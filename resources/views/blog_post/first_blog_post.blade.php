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

    <section>
        <div class="container">
            <div class="mt-5"> <img src="/customImages/Frame 76.png" alt="" style="width:100% "></div>
            <br>
            <p class="blogpost-text">How to combat digital eye strain</p>
            <br>
            <br>
            <p class="blogpost-aug">August 2022</p>
            <br>
            <p class="blogpost-text2">
                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum
                facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
                ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. <br>
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el
                texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se
                dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un
                libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en
                documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la
                creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con
                software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum
            </p>
            <br>
            <br>
            <br>

            <div class="blogpost_about_content d-flex flex-row ">
                <div class="">
                    <img src="/customImages/Frame 118.png" class="blogpost_eyeimg">
                    <div>
                        <br>
                        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
                        <button type="submit" class="i-blog-button">READ MORE</button>
                    </div>
                </div>

                <div class="blogpost-card">
                    <img src="/customImages/Frame 115.png" class="blogpost_eyeimg">
                    <div>
                        <br>
                        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
                        <button type="submit" class="i-blog-button ">READ MORE</button>
                    </div>
                </div>

                <div class="blogpost-card">
                    <img src="/customImages/Frame 116.png" class="blogpost_eyeimg">
                    <div>
                        <br>
                        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
                        <button type="submit" class="i-blog-button ">READ MORE</button>
                    </div>
                </div>


                <div class="blogpost-card">
                    <img src="/customImages/Frame 116.png" class="blogpost_eyeimg">
                    <div>
                        <br>
                        <p class="readmore_text1">How Much Do You Know About Pink Eye?</p>
                        <button type="submit" class="i-blog-button ">READ MORE</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="brind py-5"><button type="submit" class="i-blogend-button">BACK TO BLOG</button></div>

    </section>


@endsection
