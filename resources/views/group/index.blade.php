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
                <tr>
                  <th scope="row">1</th>
                  <td>動物</td>
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
                <tr>
                  <th scope="row">2</th>
                  <td>ドラマ</td>
                  <td>
                    <div>
                      <a href="#">チャット画面へ</a>
                    </div>
                  </td>
                  <td>2019/07/10 16:09</td>
                  <td>
                    <div>
                      <a href="#">Exit</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>スポーツ</td>
                  <td>
                    <div>
                      <a href="#">チャット画面へ</a>
                    </div>
                  </td>
                  <td>2019/06/09 7:09</td>
                  <td>
                    <div>
                      <a href="#">Exit</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
@endsection