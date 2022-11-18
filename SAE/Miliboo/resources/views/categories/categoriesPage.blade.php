    <ol>

    @include('partials.searchCategory')


    @foreach($categoriesPage as $categoriePage)
      <li><a href='{{url("/produits/?q={$categoriePage->nomcategorie}")}}'>{{$categoriePage->nomcategorie}}</a></li>
    @endforeach
    

    </ol>
 