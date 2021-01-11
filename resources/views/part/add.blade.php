@extends('layouts.template1')

@section('title','不良箇所追加')

@section('header')
    <p>不良箇所追加</p>
@endsection

@section('content')
<form action="/part/add" method="post">
    <table>
        @csrf
        <tr><th>不良箇所: </th><td><input type="text" name="part" ></td></tr>
        <tr><th></th><td><input type="submit"  value="登録"></td></tr>
    </table>
</form>

@endsection

@section('footer')
    copyright 2021 Semantic-i
@endsection
