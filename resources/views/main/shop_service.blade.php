@extends('base')

@section('title', 'En magasin')

@section('meta')
    <meta property="og:description" content="" />
    <meta name="description" content="">
    <meta property="og:url" content="" />
@endsection

@section('content')

    <section class="container__full-width c--secondary-dark bg--secondary-color-2 flex col align--center">
        <span class="container"></span>
        <div class="container flex col align--start gap--5 pb--30">
            <h1 class="uppercase">Nos services <br> en magasin</h1>
            <p class="text--m w--50 w-100-mobile align--self-end">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
            </p>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pl--0 pt--0 pb--0 pr--0 flex row col-rev-mobile">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Faites contrôler votre vue gratuitement</h2>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.Highlight the Unique Selling Proposition (USP) with a short
                    summary of the main feature and how it benefits customers. The idea here is to keep it short and
                    direct. If the visitor wishes to learn more they will hit the button.
                    <br><br>
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it
                    benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn
                    more they will hit the button.
                </p>
                <a hx-boost="true" href="{{ route('contact') }}#booking" class="btn btn--main-light">Je prends rendez-vous</a>
            </div>
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/a815b7f0bd7fe915483f07067f5d0129.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section class="container__full-width c--primary-light bg--secondary-dark flex col align--center justify--center">
        <div class="container flex col align--start gap--10">
            <h2>La validité de votre ordonnance</h2>
            <div class="grid grid--3 grid-gap--6 grid--1-mobile grid-gap--6-mobile w--100 text--l c--secondary-dark">
                <card class="flex col gap--3 pb--6 border--bottom-mobile border--secondary-color-3 pt--5 w--100">
                    <div class="flex row gap--3 align--center">
                        <p>1 an</p>
                    </div>
                    <p class="text--m">Pour les moins de 16 ans.</p>
                </card>
                <card class="flex col gap--3 pb--6 border--bottom-mobile border--secondary-color-3 pt--5 w--100">
                    <div class="flex row gap--3 align--center">
                        <p>3 ans</p>
                    </div>
                    <p class="text--m">Pour les 16 à 42 ans.</p>
                </card>
                <card class="flex col gap--3 pb--6 border--bottom-mobile border--secondary-color-3 pt--5 w--100">
                    <div class="flex row gap--3 align--center">
                        <p>5 ans</p>
                    </div>
                    <p class="text--m">Pour les plus de 42 ans.</p>
                </card>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--3 align--center text-center">
            <h3>Besoin d'aide pour vos lentilles de contact ?</h3>
            <p class="text--s">Accompagnement à la pose de lentilles, à la correction de la vue et à l’adaptation.</p>
            <a hx-boost="true" href="{{ route('contact') }}#service" class="btn btn--main-light mt--2">En savoir plus</a>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20 border--bottom border--secondary-dark">
        <div class="container pt--0 pb--0 pl--0 pr--0 flex row col-mobile justify--end">
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/e574f92d8ea82d005cac8e03303eaa48.webp') }}" alt="">
            </div>
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Gravure de vos branches</h2>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.Highlight the Unique Selling Proposition (USP) with a short
                    summary of the main feature and how it benefits customers. The idea here is to keep it short and
                    direct. If the visitor wishes to learn more they will hit the button.
                    <br><br>
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it
                    benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn
                    more they will hit the button.
                </p>
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--primary-light flex row align--center justify--center gap--20">
        <div class="container pt--0 pb--0 pr--0 pl--0 flex row col-rev-mobile justify--end">
            <div class="flex col align--start justify--center gap--8 container">
                <h2>Collecte & recyclage</h2>
                <p class="text--m">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.Highlight the Unique Selling Proposition (USP) with a short
                    summary of the main feature and how it benefits customers. The idea here is to keep it short and
                    direct. If the visitor wishes to learn more they will hit the button.
                    <br><br>
                    Highlight the Unique Selling Proposition (USP) with a short summary of the main feature and how it
                    benefits customers. The idea here is to keep it short and direct. If the visitor wishes to learn
                    more they will hit the button.
                </p>
            </div>
            <div class="img__hero w--60 w-100-mobile">
                <img loading="lazy" class="img" src="{{ asset('/images/layers/18d61ca33bcf9b335c8e80601f3f30d2.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section
        class="container__full-width c--secondary-dark bg--secondary-color-2 flex row align--center justify--center">
        <div class="container flex col gap--10 align--center">
            <h2 class="w--60 w-100-mobile text-center">Venez nous voir en magasin, nos opticiens sont là pour vous conseiller.</h2>
            <a hx-boost="true" href="{{ route('contact') }}" class="btn btn--main-light mt--2">Je prends rendez-vous</a>
        </div>
    </section>
@endsection
