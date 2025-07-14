@extends('layouts.app')
@section('content')

    <section class="h-100 gradient-form" style="">
        <div class="container py-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-5">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col">
                                <div class="card-body p-md-5 mx-md-4">
                                    <form action="{{ route('companies.store') }}" method="POST">

                                        @csrf
                                        @method('POST')

                                        <h1 style="font-family: fantasy;text-align: center;" >Adding Company</h1>

                                        @if ($errors->any())
                                            <ul class="list-group">
                                                @foreach ($errors->all() as $error)
                                                    <li class="list-group-item list-group-item-danger my-1">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                             
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text"  id="name" name="name" class="form-control"  value="{{ old('name')}}"/>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="" value="{{ old('email')}}"/>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label for="formFile" class="form-label">Choose image</label>
                                            <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="website">Website</label>
                                            <input type="text"  id="website" name="website" class="form-control"  value="{{ old('website')}}"/>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Save">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection