@extends('layouts.app')

@section('title','Create')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                @csrf

                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@push('scripts')

@endpush