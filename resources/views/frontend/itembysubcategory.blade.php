@extends('main')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
         
          <x-sidebar-component></x-sidebar-component>
      </div>

      <!-- /.col-lg-3 -->

</div>
</div>
        <!-- /.card -->
    <div class="row offset-3">
     @foreach ($subcategory->items as $item)
         
     
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
