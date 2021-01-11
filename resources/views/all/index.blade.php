@extends('layouts.template1')

@section('title','全レコード')

@section('header')
    <p>全レコード</p>
@endsection


@section('content')
<table>
    <tr><th>id</th><th>症状</th></tr>
    @foreach($items_syojo as $item_syojo)
        <tr>
            <td>{{$item_syojo->id}}</td>
            <td>{{$item_syojo->syojo}}</td>
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

