@extends('admin.layouts.master_layout')
@section('title', 'Create Category')
@section('admin_content')
@section('page_active','active')

<div class="container-fluid ">

<h1>Hotel</h1>
<div class="row mt-5">

    <div class="col-lg-8">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <form action="{{route('hotel.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp"
                placeholder="Enter Title" autocomplete="off"  >
                @error('title')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="description" id="" required class="form-control" cols="30" rows="3"></textarea>
           @error('description')
           <span class="text-danger">  {{$message}}</span>

              @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1"  autocomplete="off" required>
             @error('image')
             <span class="text-danger">  {{$message}}</span>
  
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deal</label>
                <input type="text" name="deal" class="form-control" id="exampleInputPassword1"  autocomplete="off" required>
             @error('deal')
             <span class="text-danger">  {{$message}}</span>
  
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword1"  autocomplete="off" required>
             @error('price')
             <span class="text-danger">  {{$message}}</span>
  
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Discount Price</label>
                <input type="text" name="d_price" class="form-control" id="exampleInputPassword1"  autocomplete="off" >
      
              </div>





            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
