@extends('layouts.app')

@section('content')
    @include('items.items')
    {!! $items->render() !!}
@endsection
@section('content')
    テスト
@endsectio

