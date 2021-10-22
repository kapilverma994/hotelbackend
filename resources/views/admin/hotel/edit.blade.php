@extends('admin.layouts.master_layout')
@section('title', 'Edit Room')
@section('admin_content')
@section('page_active', 'active')

<div class="container-fluid ">

    <h1>Edit Room Details</h1>
    <div class="row mt-5">

        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('hotel.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->title }}" required aria-describedby="emailHelp"
                                placeholder="Enter Title" autocomplete="off">
                            @error('title')
                                <span class="text-danger"> {{ $message }}</span>

                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" id="" required class="form-control" cols="30"
                                rows="3">{{ $data->description }}</textarea>
                            @error('description')
                                <span class="text-danger"> {{ $message }}</span>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Choose Amenities</label>
                            <select class="js-example-basic-multiple1 form-control" name="states[]" multiple="multiple"
                                required>
                                <option value="AC" selected>AC</option>

                                <option value="TV" selected>TV</option>
                                <option value="Free Wifi" selected>Free Wifi</option>
                                <option value="Geyser" selected>Geyser</option>

                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Main Thumbnail Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1"
                                autocomplete="off">
                            @error('image')
                                <span class="text-danger"> {{ $message }}</span>

                            @enderror
                            <img src="{{ url('uploads/hotel/' . $data->image) }}" height="100px" width="100px" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Other Images</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1"
                                autocomplete="off" required>
                            @error('image')
                                <span class="text-danger"> {{ $message }}</span>

                            @enderror

                        </div>
                        <div class="row">




                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deal</label>
                                    <input type="text" name="deal" class="form-control" id="exampleInputPassword1"
                                        autocomplete="off" required>
                                    @error('deal')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="text" name="price" class="form-control" value="{{ $data->price }}"
                                    id="exampleInputPassword1" autocomplete="off" required>
                                @error('price')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Discount Price</label>
                                <input type="text" name="d_price" value="{{ $data->discount_price }}"
                                    class="form-control" id="exampleInputPassword1" autocomplete="off">

                            </div>
                        </div>







                        <button type="submit" class="btn btn-primary">Update Hotel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple1').select2();
    });
</script>

@endpush
