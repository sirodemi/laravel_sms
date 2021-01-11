@extends('layouts.template1')

@section('title','全レコード')

@section('header')
    <p>全レコード</p>
@endsection


@section('content')

<table border="0">
    <tr><td valign="top">
    <table>
        <tr><th>id</th><th>症状</th></tr>
        @foreach($items_syojo as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->syojo}}</td>
            </tr>
        @endforeach
    </table>
    </td><td valign="top">

    <table>
        <tr><th>id</th><th>不良箇所</th></tr>
        @foreach($items_part as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->part}}</td>
            </tr>
        @endforeach
    </table>
    </td><td valign="top">

    <table>
        <tr><th>id</th><th>原因</th></tr>
        @foreach($items_cause as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->cause}}</td>
            </tr>
        @endforeach
    </table>
    </td><td valign="top">

    <table>
        <tr><th>id</th><th>所見</th></tr>
        @foreach($items_comment as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->comment}}</td>
            </tr>
        @endforeach
    </table>
    </td></tr>
</table>

<br>
<div class="links">
    <a href="http://localhost/">->タイトル画面に戻る</a>
</div>

@endsection

@section('footer')
    copyright 2021 Semantic-i
@endsection

