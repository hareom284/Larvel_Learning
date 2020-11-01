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
                                <tr>
                                    <td>1</td>
                                    <td>
                                    Zaw </td>
                                    <td>
                                        <a href="{{route('brand.edit',1)}}" class="btn btn-warning">
                                            <i class="icofont-ui-settings"></i>
                                            Edit
                                        </a>
                                        
                                        
                                        <button class="btn btn-outline-danger" type="submit">
                                            <i class="icofont-close"></i> Delete
                                        </button>
                                        
                                        <a href="{{route('brand.show',1)}}" class="btn btn-primary text-white">
                                        <i class="icofont-list"></i>Show
                                        </a>
                                        
                                    </td>

                                </tr>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection
