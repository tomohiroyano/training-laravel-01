@extends('layouts.app')
@section('title', '商品詳細')
@section('content')
    <p>ID：{{ $item->id }}</p>
    <p>商品名：{{ $item->name }}</p>
    <p>登録日：{{ $item->created_at }}</p>
    <p>更新日：{{ $item->updated_at }}</p>
@endsection