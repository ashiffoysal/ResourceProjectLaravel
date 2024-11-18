@extends('layouts.backend')
@section('content')

<style>
div.dataTables_wrapper div.dataTables_length select {

  height: 33px;
}
div.dataTables_wrapper div.dataTables_filter input {

    height: 25px;
}
</style>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>All Past Papers</div>
            </div>
            <div class="page-title-actions">

                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.past-paper.create')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                        Add Past Paper
                    </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">All Past Papers</h5>
                    <div class="table-responsive">
                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Series</th>
                            <th>Category</th>
                            <th>SubCategory</th>
                            <th>Resubcategory</th>
                            <th>Status</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allData as $key => $data)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->series->name}}</td>
                            <td>{{$data->categories->category_name}}</td>
                            <td>{{$data->subcategories->subcategory_name}}</td>
                            <td>{{$data->resubcategories->resubcategory_name}}</td>
                            <td>
                            @if($data->is_active==1)
                                <span class="btn-sm btn-success">Active</span>
                            @else
                                <span class="btn-sm btn-danger">Deactive</span>
                            @endif
                            </td>
                        
                            <td>
                            @if($data->is_active==1)
                            <a class=" bg-success-light" style="color:green"  data-toggle="tooltip" data-placement="top"  href="{{url('admin/past-paper/deactive/'.$data->id)}}" data-original-title="Active"><i class="fa fa-thumbs-up"></i></a>
                            @else
                                <a class="bg-danger-light" style="color:red"  data-toggle="tooltip" data-placement="top" href="{{url('admin/past-paper/active/'.$data->id)}}" data-original-title="Deactive"><i class="fa fa-thumbs-down"></i></a>
                            @endif
                            <a class=" bg-primary-light"  href="{{url('admin/past-paper/edit/'.$data->id)}}"  title="edit"><i class="fas fa-pencil-alt"></i></a>
                            <a id="delete" class="bg-danger-light" style="color:red"  data-toggle="tooltip" data-placement="top" href="{{url('admin/past-paper/delete/'.$data->id)}}" data-original-title="Delete"> <i class="fa fa-trash"></i></a>
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
</div>
@endsection
