@extends('layouts.template1')

@section('title','症状一覧表')

@section('header')
    <p>症状一覧表</p>
@endsection


@section('content')
<table>
    <tr><th>id</th><th>症状</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->syojo}}</td>
        </tr>
    @endforeach
</table>
<br>
<div class="links">
    <a href="http://localhost/">->タイトル画面に戻る</a>
</div>

@endsection

@section('footer')
    copyright 2021 Semantic-i
@endsection

