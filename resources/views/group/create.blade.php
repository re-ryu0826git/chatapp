{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'チャットグループ一覧'を埋め込む --}}
@section('title', 'チャットグループ作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
          <h2>チャットグループ作成</h2>
        </div>
          <div class="card">
            <div class="card-header">
              チャットグループ名を入力してください
            </div>
            <div class="card-body">
              <form action="{{ action('GroupController@create') }}" method="post" enctype="multipart/form-data">
                
                @if (count($errors) > 0)
                  <ul>
                      @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                      @endforeach
                @endif
                
                <div class="form-group row">
                  <div class="col-md-7">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-info" value="作成ボタン">
              </form>
            </div>
          </div>
            

    </div>
@endsection


