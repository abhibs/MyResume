@extends('admin.layout.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin Social Media</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Social Media</li>
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

                                <form method="post" action="{{ route('social-store') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Social Media Icon</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="icon"
                                                class="form-control @error('icon') is-invalid @enderror" id=""
                                                placeholder="Enter Social Media Icon Class" />

                                            @error('icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Social Media URL</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="url"
                                                class="form-control @error('url') is-invalid @enderror" id=""
                                                placeholder="Enter Social Media URL" />

                                            @error('url')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Social Media Status</h6>
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
                                            <input type="submit" class="btn btn-primary px-4" value="Add Social Media" />
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
