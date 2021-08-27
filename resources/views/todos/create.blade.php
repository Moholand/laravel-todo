@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        ایجاد تسک جدید
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('todos.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input class="form-control @error('title') form-control-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}">
                                @error('title')
                                    <p class="invalid-feedback d-block">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <textarea class="form-control @error('description') form-control-invalid @enderror" name="description" id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="invalid-feedback d-block">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-dark">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
