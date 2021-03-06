{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'チャットグループ一覧'を埋め込む --}}
@section('title', 'チャット一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <h2>チャット一覧</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">チャットグループ名</th>
                  <th scope="col">詳細</th>
                  <th scope="col">Last Comment</th>
                  <th scope="col">Leave one's group</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $group)
                  <tr>
                    <th scope="row">{{ $group->id }}</th>
                    <td>{{ $group->name }}</td>
                    <td>
                      <div>
                        <a href="#">チャット画面へ</a>
                      </div>
                    </td>
                    <td>2019/08/09 12:49</td>
                    <td>
                      <div>
                        <a href="#">Exit</a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection