@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin Experience</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Experience</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('experience-create') }}" class="btn btn-primary">Add Experience</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Company Name </th>
                                <th>Experience Year </th>
                                <th> Location </th>
                                <th> Experience Status </th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->year }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">InActive</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('experience-edit', $item->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('experience-delete', $item->id) }}" class="btn btn-danger"
                                            id="delete">Delete</a>
                                        @if ($item->status == 1)
                                            <a href="{{ route('experience-inactive', $item->id) }}" class="btn btn-primary"
                                                title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>
                                        @else
                                            <a href="{{ route('experience-active', $item->id) }}" class="btn btn-primary"
                                                title="Active"> <i class="fa-solid fa-thumbs-up"></i> </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Company Name </th>
                                <th>Experience Year </th>
                                <th>Location </th>
                                <th> Experience Status </th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection