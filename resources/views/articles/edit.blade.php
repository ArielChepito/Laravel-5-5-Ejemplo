@extends('welcome')


@section('content')
  <br>
  <div class="row">

      <div class="col-sm-10 margin-tb">
              <h2>Edit Article</h2>
      </div>
      <div class="col-sm-2 margin-tb">
              <a class="btn btn-default"  href="{{ route('articles.index') }}"> BACK</a>
      </div>
  </div>

    <br>



    <div class="row">


    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    {!! Form::model($article, ['method' => 'PATCH','route' => ['articles.update', $article->id]]) !!}

        @include('articles.form')

    {!! Form::close() !!}

      </div>


@endsection
