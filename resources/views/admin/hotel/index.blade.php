@extends('admin.layouts.master_layout')
@section('page_active', 'active')
@section('title', 'Hotels')
@section('admin_content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Hotels</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">


            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="col-lg-6">
                    @include('admin.message')
                </div>

                <div class="card mb-4">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Hotel</h6>
                        <a class="btn btn-success" href="{{ route('hotel.create') }}">Add Room</a>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sno</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description </th>
                                    <th>Aminities</th>
                                    <th>Price</th>
                                    <th>Discount Price</th>
                                    <th>Deal</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sno</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description </th>
                                    <th>Aminities</th>
                                    <th>Price</th>
                                    <th>Discount Price</th>
                                    <th>Deal</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ url('uploads/hotel/' . $item->image) }}" width="100px"
                                                height="100px" alt=""></td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <ul class="hide_style">
                                                <li>
                                                    Ac
                                                </li>
                                                <li>
                                                    Tv
                                                </li>
                                                <li>
                                                    Wifi
                                                </li>
                                            </ul>
                                        </td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->discount_price }}</td>
                                        <td>{{ $item->deal }}</td>

                                        <td>{{ $item->created_at->diffforhumans() }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td style="white-space: nowrap;">
                                            <a class="btn btn-primary" title="view details"
                                                href="{{ route('hotel.edit', $item->id) }}"><i class="fas fa-eye"></i>
                                            </a>
                                            @if ($item->status == 1)
                                                <a class="btn btn-success" title="Deactive"
                                                    href="{{ url('admin/hotel/status/0', $item->id) }} "><i
                                                        class="fas fa-toggle-on"></i></a>
                                            @else
                                                <a class="btn btn-danger" title="Active"
                                                    href="{{ url('admin/hotel/status/1', $item->id) }} "><i
                                                        class="fas fa-toggle-off"></i></a>
                                            @endif
                                            {{-- <a class="btn btn-warning" title="Edit"
                                                href="{{ route('hotel.edit', $item->id) }}"><i
                                                    class="fas fa-edit"></i></a> --}}

                                            <form action="{{ route('hotel.destroy', $item->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" title="Delete" type="sumit"><i
                                                        class="fa fa-trash" aria-hidden="true"></i> </button>
                                            </form>

                                        </td>


                                    </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->

        <!-- Documentation Link -->




    </div>



@endsection
