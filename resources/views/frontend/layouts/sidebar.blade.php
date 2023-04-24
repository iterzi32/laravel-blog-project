<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        @foreach($categories as $category)
            <div class="list-group">
                <a href="{{route('category.show', $category->slug)}}" class="list-group-item list-group-item-action"> {{$category->title}}
                    <span class="badge bg-danger float-lg-end text-white">{{$category->article()->count()}}</span>
                </a>
            </div>
        @endforeach
    </div>
</div>
