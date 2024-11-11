@extends('admin.layouts.master')

@section('content')
  <h2>Xin chào admin , {{ Auth::user()->name }}</h2>
@endsection