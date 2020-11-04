@extends('backend')

@section('backend')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Category </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="{{route('category.create')}}" class="btn btn-outline-primary">
                <i class="icofont-plus"></i>
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
                                  <th>No</th>
                                  <th>Name</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    
                                
                                <tr>
                                    <td> 1 </td>
                                    <td> {{$item->name}}</td>
                                    <td>
                                        <a href="{{route('category.edit',$item->id)}}" class="btn btn-warning">
                                            <i class="icofont-ui-settings"></i>Edit
                                        </a>
                                        <form class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')" action="{{route('category.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="">
                                        <button class="btn btn-outline-danger" type="submit">
                                            <i class="icofont-close"></i>
                                        </button>
                                        </form>
                                        <a href="{{route('category.show',$item->id)}}" class="btn btn-primary text-white">
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