@extends('layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Show Category</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titolo:</strong>
                {{ $blog->titolo }}
            </div>
            
            <div class="form-group">
                <strong>Contenuto:</strong>
                {{ $blog->contenuto }}
            </div>
            
            <div class="form-group">
                <strong>Id Utente:</strong>
                {{ $blog->user->id}}
            </div>
            
            <div class="form-group">
                <strong>Nome Utente:</strong>
                {{ $blog->user->name}}
            </div>
        </div>
    </div>
@endsection