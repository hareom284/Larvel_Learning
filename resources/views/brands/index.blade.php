@extends('backend')

@section('backend')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Brand </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="{{route('brand.create')}}" class="btn btn-outline-primary">
                <i class="icofont-plus"></i> Insert 
            </a>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $item)
                                    
                            
                                <tr>
                                    <td>1</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{route('brand.edit',$item->id)}}" class="btn btn-warning">
                                            <i class="icofont-ui-settings"></i>
                                            Edit
                                        </a>
                                        
                                        <form action="{{route('brand.destroy',$item->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit">
                                            <i class="icofont-close"></i> Delete
                                        </button>
                                        </form>
                                        
                                        <a href="{{route('brand.show',$item)}}" class="btn btn-primary text-white">
                                        <i class="icofont-list"></i>Show
                                        </a>
                                        
                                    </td>

                                </tr>
                                @endforeach
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection
