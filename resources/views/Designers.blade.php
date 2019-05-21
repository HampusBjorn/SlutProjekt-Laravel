<!--detta dokument är en del av layout filen-->
@extends('layout')

<!--väljer titel på sidan-->
@section('title', 'Designers')

<!--sidans innehåll (detta skickas till layout filen)-->
@section('content')

<h1 class="headline">Designers</h1>

<h1 class="underheadline">Featured</h1>

<hr>
<!--här är en tillfällig lösning för att man ska se hur layouten kommer se ut.
Det kommer att vara en for each loop här som lägger in alla designers och denna kommer komma in när databas fixas-->
    <div class="designers">
        <div class="designer1">
            <img src="/css/felix1.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Felix Möller</p>
            <p class="Dwork">Architect</p>
        </div>
        <div class="designer1">
            <img src="/css/felix2.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Felix Strinnholm</p>
            <p class="Dwork">Pistvakt</p>
        </div>
        <div class="designer1">
            <img src="/css/felix3.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Felix Boström</p>
            <p class="Dwork">Missing</p>
        </div>
        <div class="designer1">
            <img src="/css/felix4.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Felix Müller</p>
            <p class="Dwork">Programmer</p>
        </div>
        <div class="designer1">
            <img src="/css/felix5.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Felix Chebaane</p>
            <p class="Dwork">Troubadour</p>
        </div>
        <div class="designer1">
            <img src="/css/alex1.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Alexander Blom</p>
            <p class="Dwork">Plumber</p>
        </div>
        <div class="designer1">
            <img src="/css/alex2.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Alexander Blüm</p>
            <p class="Dwork">Entrepreneur</p>
        </div>
        <div class="designer1">
            <img src="/css/alex3.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Alexander Aarre</p>
            <p class="Dwork">Psychologist</p>
        </div>
        <div class="designer1">
            <img src="/css/alex4.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Alexander Göransson</p>
            <p class="Dwork">Designer</p>
        </div>
        <div class="designer1">
            <img src="/css/alex5.jpg" height="128px" width="128px" alt="designer">
            <p class="Dname">Alexander Edström</p>
            <p class="Dwork">Visionary</p>
        </div>
    </div>

@endsection
