@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin Skill</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Skill</li>
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

                                <form method="post" action="{{ route('skill-store') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id=""
                                                placeholder="Enter Skill Name" />

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Percentage Know</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="number" name="number"
                                                class="form-control @error('number') is-invalid @enderror" id=""
                                                placeholder="Enter Percentage of Know About Skill Between 1 to 100" />

                                            @error('number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Skill Status</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <label for="chkYes">
                                                <input type="radio" class="status" value="1" name="status"
                                                    checked />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="0" name="status" />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Inactive
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Add Skill" />
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
