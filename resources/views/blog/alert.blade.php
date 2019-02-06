@if(isset($categoryName))
    <div class="alert alert-info">
        <p>Catagory:<strong> {{$categoryName}}</strong></p>
    </div>
@endif

@if(isset($tagName))
    <div class="alert alert-info">
        <p>Tagged:<strong> {{$tagName}}</strong></p>
    </div>
@endif

@if(isset($authorName))
    <div class="alert alert-info">
        <p>Author:<strong> {{$authorName}}</strong></p>
    </div>
@endif

@if($term = request('term'))
    <div class="alert alert-info">
        <p>Search Results For:<strong> {{$term}}</strong></p>
    </div>
@endif