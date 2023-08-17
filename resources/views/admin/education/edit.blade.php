@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin Education</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Education</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="post" action="{{ route('education-update') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id=""
                                                placeholder="Enter Education Name" value="{{ $data->name }}" />

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Year</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="year"
                                                class="form-control @error('year') is-invalid @enderror" id=""
                                                placeholder="Enter Education Year" value="{{ $data->year }}" />

                                            @error('year')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Percentage</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="number" name="percentage"
                                                class="form-control @error('percentage') is-invalid @enderror"
                                                id="" placeholder="Enter Percentage Between 1 to 100"
                                                value="{{ $data->percentage }}" />

                                            @error('percentage')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Collage</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="collage"
                                                class="form-control @error('collage') is-invalid @enderror" id=""
                                                placeholder="Enter Collage Details" value="{{ $data->collage }}" />

                                            @error('collage')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Content</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4"
                                                cols="50">
                                                {{ $data->content }}
                                            </textarea>

                                            @error('content')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Update Education" />
                                        </div>
                                    </div>
                            </div>

                            </form>



                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
