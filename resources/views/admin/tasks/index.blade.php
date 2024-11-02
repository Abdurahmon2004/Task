@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-header bg-white d-flex justify-content-end">
                    <a href="{{ route('tasks.create') }}" class="btn btn-success btn-sm" style="color: white !important;">
                        <span class="fas fa-plus-circle"></span> Yangi topshiriq qo'shish
                    </a>
                </div>
                <div class="card">
                    <div class="card-body" id="ajax-request">
                        <table class="table" style="max-width: 100%; overflow: auto">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Sarlavha</th>
                                <th>Tavsifi</th>
                                <th>Holati</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr class="{{ $task->completed == 1 ? '' : 'bg-warning'}}">
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->completed ? 'Bajarilgan' : 'Bajarilmagan' }}</td>
                                    <td>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">Tahrirlash</a>
                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">O'chirish</button>
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
    </div>
@endsection
