@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
                <div class="card">
                    <div class="card-body" id="ajax-request">
                        <h1 class="text text-center mb-3">Yangi topshiriq qo'shish</h1>
                       <form action="{{ route('tasks.store') }}" method="post" class="col-6 offset-3">
                           @csrf
                           <div class="mb-3">
                               @error('title')
                               <div class="alert alert-warning">
                                   {{ $message }}
                               </div>
                               @enderror
                               <label>Saralavha  <span style="color: red">*</span></label>
                               <input type="text" class="form-control" required name="title">
                           </div>
                           <div class="mb-3">
                               <label>Tavsifi</label>
                               <input type="text" class="form-control" name="description">
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
