@extends('layouts.backend')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Admin User Manage</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.admin-user.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                            All Admin User
                        </button>
                        </a>
                    </div>
            </div>    
        </div>
    </div>      
    <div class="row">
        <div class="col-md-10">
            <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Admin User Update</h5>
                    <div>
                    <form action="{{url('admin/admin-user/create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="position-relative form-group"><label for="exampleFile" class="">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Enter Name" required value="{{ $edit->name }}">
                            <input type="hidden" name="id"  value="{{ $edit->id }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">User Name</label>
                            <input type="text" class="form-control" name="user_name"  placeholder="Enter User Name" required value="{{ $edit->user_name }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">User Role</label>
                            <select  class="form-control" name="user_role" required>
                                    <option selected disabled>Select</option>
                                @foreach ($allRole as $role)
                                    <option value="{{ $role->id }}" @if($edit->user_role==$role->id) selected @endif>{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Email </label>
                            <input type="text" class="form-control" name="email"  placeholder="Enter Email" required value="{{ $edit->email }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Phone </label>
                            <input type="text" class="form-control" name="phone"  placeholder="Enter Phone" required value="{{ $edit->phone }}" >
                        </div>
                        <br>
                   
                        <div class="position-relative form-group"><label for="exampleFile" class="">Address </label>
                            <textarea class="form-control" name="address"  placeholder="Enter Address">{{ $edit->address }}</textarea>
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Image</label>
                            <input type="file" name="image">
                        </div>
                        <br>
                        <div class="input-group">
                            <button type="submit" class="mb-2 mr-2 btn btn-success">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Password Update</h5>
                    <div>
                    <form action="{{route('admin.admin-user.passwordupdate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group"><label for="exampleFile" class="">Password </label>
                            <input type="text" class="form-control" name="password"  placeholder="Enter Password" required>
                            <input type="hidden" name="id"  value="{{ $edit->id }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Confirm Password </label>
                            <input type="text" class="form-control" name="confirmm_password"  placeholder="Enter Confirm Password" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <button type="submit" class="mb-2 mr-2 btn btn-success">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection