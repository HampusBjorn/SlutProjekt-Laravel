<!--detta dokument är en del av layout filen-->
@extends('layout')

<!--väljer titel på sidan-->
@section('title', 'Login')

<!--sidans innehåll (detta skickas till layout filen)-->
@section('content')

<!--Formulär för inloggning på hemsidan, hemsidan är ej kopplad till en databas så den funkar ej-->
<div class="signin">
    <h1>sign in</h1>
    <form>
        <p>E-mail</p>
        <input class="textform1" type="text" name="E-mail" placeholder="">
        <p>Password</p>
        <input class="textform1" type="password" name="Password" placeholder="">
        <br>
        <input type="checkbox" name="Remember" value="Remember"> Remember me!
        <br>
        <input type="submit" value="Sign in">
</div>

<!--Formulär för att skapa en användare på hemsidan, hemsidan är ej kopplad till en databas så den funkar ej-->
<div class="signup">
    <h1>sign up</h1>
    <p>Firstname</p>
    <input class="textform1" type="text" name="firstname" placeholder="">
    <p>Lastname</p>
    <input class="textform1" type="text" name="lastname" placeholder="">
    <p>E-mail</p>
    <input class="textform1" type="text" name="E-mail" placeholder="">
    <p>Password</p>
    <input class="textform1" type="password" name="Password" placeholder="">
    <br>
    <p>What kind of account do you need?</p>
    <input type="radio" name="accounttype" value="Designer"> Designer
    <input type="radio" name="accounttype" value="Client"> Client
    <br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy.</a></p>
    <input class="submit" type="submit" value="Sign up">
</div>
@endsection
