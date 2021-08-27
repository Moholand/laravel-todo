@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h4 class="text-center" >{{ $todo->title }}</h4>
                <div class="card">
                    <div class="card-header">
                        توضیحات
                    </div>
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                    <hr>
                    <div class="mr-3 mb-2 d-flex">
                        <a class="btn btn-sm btn-outline-dark ml-2" href="{{ route('todos.edit', ['todo' => $todo->id]) }}">
                            ویرایش
                        </a>
                        <form action="{{ route('todos.delete', ['todo' => $todo->id]) }}" method="POST" >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">حذف</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
