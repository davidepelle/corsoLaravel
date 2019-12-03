

@extends('layout')

@section('content')



    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Products</h3>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('blog.create') }}">Create</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Contenuto</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->titolo }}</td>
                <td>{{ $blog->contenuto }}</td>
                <td>
                    <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
 
                        <a class="btn btn-info" href="{{ route('blog.show',$blog->id) }}">Show</a>
 
                        <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')
 
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>            
                
            </tr>
        @endforeach
    </table>

    

@endsection

