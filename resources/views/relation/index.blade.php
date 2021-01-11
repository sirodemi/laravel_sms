@extends('layouts.template1')

@section('title','関連性一覧表')

@section('header')
    <p>関連性一覧表</p>
@endsection


@section('content')


<table>
    <tr>
        <th>症状</th>
        <th>不良箇所</th>
        <th>原因</th>
        <th>所見</th>
    </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->syojo_id}}</td>
                <td>{{$item->part_id}}</td>
                <td>{{$item->cause_id}}</td>
                <td>{{$item->comment_id}}</td>
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

