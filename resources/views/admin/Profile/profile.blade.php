@extends('admin.layouts.master_layout')
@section('title', 'Create Category')
@section('admin_content')
@section('page_active', 'active')



<div class="container-fluid ">

    <h1>Manage Profile </h1>
    <div class="row mt-5">

        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img class="img-profile rounded-circle"
                                            src="{{ asset('admin_asset/img/boy.png') }}" style="max-width: 100px">
                                    </div>

                                </div>

                                <div class="col-md-12 form-group">
                                    {{-- <input type="file" name="main_image" id="exampleInputPassword1" autocomplete="off"
                                        required> --}}
                                    <button class="btn btn-dark btn-sm" data-toggle="modal"
                                        data-target="#exampleModal1">
                                        Change Profile</button>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" placeholder="First Name"
                                        autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" placeholder="Last Name"
                                        autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" value="merchant@gmail.com" readonly
                                        autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6 d-flex">

                                <div class="form-group col-md-8" style="padding: 0">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>

                                <div class="col-md-4  ">
                                    <button class="btn btn-dark  " data-toggle="modal" data-target="#exampleModal"
                                        style="margin-top: 32px">Change Password</button>
                                </div>



                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Number</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" value="9876543210" readonly
                                        autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>

                            </div>
                            <div class="col-md-6">



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alternate Number</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" value="9988778974" readonly
                                        autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" value="merchant" readonly
                                        autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">GST</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        required aria-describedby="emailHelp" value="0123456445484" autocomplete="off">
                                    @error('title')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">City</label>
                                    <input type="text" name="location" class="form-control" value="South Delhi"
                                        id="exampleInputPassword1" autocomplete="off" required>
                                    @error('city')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">State</label>
                                    <input type="text" name="location" class="form-control" value="Delhi"
                                        id="exampleInputPassword1" autocomplete="off" required>
                                    @error('city')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pincode</label>
                                    <input type="text" name="location" value="110081" class="form-control"
                                        id="exampleInputPassword1" autocomplete="off" required>
                                    @error('city')
                                        <span class="text-danger"> {{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea name="address" class="form-control" id="" cols="30"
                                        rows="5">Shop 17, 1st Floor, Babu Chitru Complex, Wazirabad, Sector 52, Near South City 2, Gurgaon</textarea>

                                </div>

                            </div>

                        </div>






                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- password change Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Password Change</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Old Password</label>
                        <input type="text" name="location" value="" class="form-control" id="exampleInputPassword1"
                            autocomplete="off" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="text" name="location" value="" class="form-control" id="exampleInputPassword1"
                            autocomplete="off" required>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Update Password</button>
            </div>
        </div>
    </div>
</div>




{{-- /////////Profile Update Modal///////// --}}

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile Change</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Choose Profile Pic</label>
                        <input type="file" name="profile_image" class="form-control" id="exampleInputPassword1"
                            autocomplete="off" required>
                        @error('profile_image')
                            <span class="text-danger"> {{ $message }}</span>

                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Update Profile</button>
            </div>
        </div>
    </div>
</div>


@endsection
