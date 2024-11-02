@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-body" id="ajax-request">
                    <h1 class="text text-center mb-3">Yangi topshiriq qo'shish</h1>
                    <form action="{{ route('tasks.update', $task->id) }}" method="post" class="col-6 offset-3">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            @error('title')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                            @enderror
                            <label>Saralavha  <span style="color: red">*</span></label>
                            <input type="text" class="form-control" required name="title" value="{{ $task->title }}">
                        </div>
                        <div class="mb-3">
                            <label>Tavsifi</label>
                            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Holati</label>
                            <select class="form-control" required name="completed">
                                <option {{ $task->completed == 1 ? 'Selected' : '' }} value="1">Bajarilgan</option>
                                <option {{ $task->completed == 0 ? 'Selected' : '' }} value="0">Bajarilmagan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
