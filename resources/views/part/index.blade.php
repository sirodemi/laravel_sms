@extends('layouts.template1')

@section('title','不良箇所一覧表')

@section('header')
    <p>不良箇所一覧表</p>
@endsection

@section('content')
<table>
    {{-- withを使ったリレーション --}}
    {{-- <tr><th>message</th><th>name</th></tr> --}}

    {{-- 複数列表示の場合 --}}
    <tr><th>id</th><th>不良箇所</th></tr>

    {{-- 一列表示の場合 --}}
    {{-- <tr><th>Data</th></tr> --}}

    @foreach($items as $item)
        <tr>
            {{-- withを使ったリレーション --}}
            {{-- <td>{{$item->message}}</td> --}}
            {{-- <td>{{$item->person->name}}</td> --}}


            {{-- 複数列表示の場合 --}}
            <td>{{$item->id}}</td>
            <td>{{$item->part}}</td>


            {{-- 一列表示の場合 --}}
            {{-- Person.phpのPersonクラスにgetData()を定義済 --}}
            {{-- <td>{{$item->getData()}}</td> --}}
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
