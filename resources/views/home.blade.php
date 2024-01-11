{{--@include('Parties.nav');--}}
@extends('layouts.master')
{{--layout aide de faire structure retulisable--}}
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de traitement</title>
</head>
<body>
    {{--  unless == !if(un seul cas) --}}
   
       

    <h1>bonjour {{$nom}}</h1>
   <h1> @php $n3=$n1+$n2 ;echo $n3;
    @endphp </h1>
    <h1> HELLO <?php echo $nom ; ?></h1>
    {{--apel component
        utilise slot por faire text un balise <stron>--}}
    <x-alert type="warning" text=""><strong>attention !</strong></x-alert>
    <x-users-table nom="yasmina" :users="$users" />




{{-- Check if $nom is set --}}
@isset($nom)
 exist
@endisset

{{-- Check if $nom is empty --}}
@empty($nom)
yess
@endempty


{{-- @switch($color)
  @case("red")
    rouge 
    @break
 @default
    color
@endswitch
    --}}






    @endsection

</body>
</html>
