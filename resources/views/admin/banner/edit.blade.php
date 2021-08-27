@extends('admin.layouts.master_layout')
@section('title', 'Create Category')
@section('admin_content')
@section('page_active','active')

<div class="container-fluid ">

<h1>Banner</h1>
<div class="row mt-5">

    <div class="col-lg-8">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <form action="{{route('banner.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Catgory Name" autocomplete="off"  >
                @error('title')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" name="description" value="{{$data->description}}" class="form-control" id="exampleInputPassword1" placeholder="Enter Description (optional)" autocomplete="off" >
           @error('description')
           <span class="text-danger">  {{$message}}</span>

              @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1"  autocomplete="off" >
             @error('image')
             <span class="text-danger">  {{$message}}</span>
  
                @enderror
                <img src="{{url('uploads/banner/'.$data->image)}}" height="100px" width="100px" alt="">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
