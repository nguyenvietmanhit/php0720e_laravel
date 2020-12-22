<?php
/**
 * resources/views/products/create.blade.php
 *
 */
// Giới thiệu về Template Engine Blade của LAravel
// + Hỗ trợ viết code PHP theo hướng thân thiện,
//dễ đọc
?>
<!--Gọi layouts-->
@extends('layouts/main')

{{--TRuyền giá trị thật cho các yield của layout--}}
@section('page_title', 'Form thêm mới sản phẩm')

@section('content')
    <h1>Form thêm mới sản phẩm</h1>
    {{--Laravel quy định chặt chẽ route nào đc
    phép submit form--}}
    <form method="post" action="{{ url('/store') }}">
        {{--Form Laravl bắt buộc phải chống lỗi
        bảo mật CSRF Token--}}
        <input type="hidden" name="_token"
        value="{{ csrf_token() }}" />

        Nhập tên sp:
        <input type="text" name="name"
               class="form-control"
       value="{{ old('name') }}" />
        <br />
        Nhập giá:
        <input type="text" name="price"
               class="form-control"
               value="{{ old('price') }}" />
        <br />
        <select name="status" class="form-control">
            <option value="0">Ẩn</option>
            <option value="1">Hiển thị</option>
        </select>
        <br />
        <input type="submit" name="submit"
               value="Save" class="btn btn-primary" />
    </form>
@endsection











{{--@php--}}
    {{--$is_gender = TRUE;--}}
{{--@endphp--}}

{{--@if ($is_gender)--}}
    {{--<b>Là nam</b>--}}
{{--@else--}}
    {{--<b>Là nữ</b>--}}
{{--@endif--}}

{{--@foreach ([1, 2] AS $key => $value)--}}
    {{--Phần tử: {{ $value }}--}}
{{--@endforeach--}}

{{--<h1>Form thêm mới</h1>--}}
