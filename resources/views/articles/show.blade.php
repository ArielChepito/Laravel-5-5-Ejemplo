@extends('welcome')


@section('content')
  <br>
  <div class="row">

      <div class="col-sm-10 margin-tb">
              <h2>show Article</h2>
      </div>
      <div class="col-sm-2 margin-tb">
              <a class="btn btn-default"  href="{{ route('articles.index') }}"> BACK</a>
      </div>
  </div>

    <br>





    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                {{ $article->title}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Body:</strong>

                {{ $article->body}}

            </div>

        </div>

    </div>

@endsection
