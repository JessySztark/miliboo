


<ol>
@include('partials.search')

<?php
foreach($products as $categoriePage)

    echo "<li>".$categoriePage->nomcategorie."</li>";

if(request()->input('q'))
    echo "<h4>".$products->total().' résultat(s) pour la recherche "'.request()->q.'"</h4>';

?>



</ol>