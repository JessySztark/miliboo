<ol>
@include('partials.searchCategory')


@foreach($categoryProduit as $categoriePage)
    <li>{{$categoriePage->nomcategorie}}</li> 
@endforeach

@if(request()->input('q'))
    <h4>{{$categoryProduit->total()}} résultat(s) pour la recherche {{request()->q}}</h4>
@endif




</ol>