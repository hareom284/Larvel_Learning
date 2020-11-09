@extends('main')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
         
<div class="accordion mt-4" id="accordionExample">
  @php $i=1; @endphp
  @foreach($categories as $category)
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne{{$i}}">
          {{$category->name}}
        </button>
      </h2>
    </div>

    <div id="collapseOne{{$i}}" class="collapse @if($loop->first) {{'show'}} @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        @foreach($category->subcategories as $subcategory)
        <a class="btn btn-link subcategory" href="{{ route('itembysubcategory',$subcategory->id) }}" data-id="">{{$subcategory->name}}</a>
        @endforeach
      </div>
    </div>
  </div>
  @php $i++; @endphp
  @endforeach
</div>
        </div>
      </div>

      <!-- /.col-lg-3 -->
      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</div>
</div>
        <!-- /.card -->
    <div class="row offset-3">
     @foreach ($items as $item)
         
     
     <div class="col-lg-4">
        <div class="card h-100" style="width: 18rem;">
            <img class="card-img-top" src="{{asset($item->photo)}}" alt="Card image cap">
            <div class="card-body">
                <h2>{{$item->name}}</h2>
                <h4>{{$item->price}}MMK</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <a href="{{route('itemdetail',$item->id)}}" class="btn btn-success"> Details</a>
        </div>
     </div>
     @endforeach
    </div>

    
@endsection
