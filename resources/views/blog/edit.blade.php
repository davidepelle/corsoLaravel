@extends('layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit blog</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blog.update',$blog->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titolo:</strong>
                    <input type="text" name="titolo" value="{{ $blog->titolo }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Contenuto:</strong>
                    <input type="text" name="contenuto" value="{{ $blog->contenuto }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>User:</strong>
                    <select name="user_id">
                        <option value=""></option>
                         @foreach($users as $user)
                            <option value="{{ $user->id }}" @if($blog->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ URL::previous() }}">Indietro</a>
    </form>
@endsection
