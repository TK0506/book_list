@extends('layouts.app')
@section('content')

<!-- Bootstrapの定形コード -->
<div class="card-body">
    <div class="card-title">
        本のタイトル
    </div>

    <!-- バリデーションエラーの表示に使用 -->
    @include('common.errors')

    <!-- 本登録フォーム -->
    <form action="{{ url('books') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    </form>
</div>