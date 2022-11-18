 <form action="{{route('products.searchCategory')}}" class="d-flex mr-3">
    <input type="text" name="q" class="form-control" value="{{request()->q ?? ''}}">
    <button type="submit" class="btn btn-info">Submit</button>
 </form>