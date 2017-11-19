@extends('welcome')


@section('content')


  <br>
  <div class="row">

      <div class="col-sm-10 margin-tb">
              <h2>Laravel 5.5 CRUD</h2>
      </div>
      <div class="col-sm-2 margin-tb">
              <a class="btn btn-success" href="{{ route('articles.create') }}"> Create New Article</a>
      </div>
  </div>

    <br>



    <div class="row">
      @if ($message = Session::get('success'))

          <div class="alert alert-success">

              <p>{{ $message }}</p>

          </div>

      @endif


      <table class="table table-bordered">

          <tr>

              <th>No</th>

              <th>Title</th>

              <th>Body</th>

              <th width="280px">Action</th>

          </tr>

      @foreach ($articles as $article)

      <tr>

          <td>{{ ++$i }}</td>

          <td>{{ $article->title}}</td>

          <td>{{ $article->body}}</td>

          <td>

              <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>

              {!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}

              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

              {!! Form::close() !!}

          </td>

      </tr>

      @endforeach

      </table>


      {!! $articles->links() !!}

    @endsection
    </div>
