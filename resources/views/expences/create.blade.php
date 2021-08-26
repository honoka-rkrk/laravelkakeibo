@extends('layout')

@section('styles')
    @include('share.flatpickr.styles')
@endsection

@section('content')
    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-wrapper">
                        <div class="container-fluid">
                            <!-- Breadcrumbs-->
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{% url 'kakeibo:kakeibo_list' %}">TOP</a>
                                </li>
                                <li class="breadcrumb-item active">家計簿アプリ</li>
                                <li class="breadcrumb-item active">データ登録</li>
                            </ol>
                            <!-- Example DataTables Card-->
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fa fa-server"></i>
                                    <h3>データ登録画面</h3>
                                </div>
                                {{-- <div class="card-body"> {{ form | bootstrap }} --}}
                                <div class="panel-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $message)
                                                <p>{{ $message }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                    <form action="{{ route('tasks.create', [1]) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="write_date">日付</label>
                                            <input type="text" class="form-control" name="write_date" id="write_date"
                                                value="{{ old('write_date') }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="category_id">分類</label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                @foreach ($categories as $index => $category)
                                                    <option value="{{ old('cateogry_id') }}" serected>
                                                        {!! $category->title !!}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="money">金額</label>
                                            <input type="text" class="form-control" name="money" id="money"
                                                value="{{ old('money') }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="memo">メモ</label>
                                            <input type="text" class="form-control" name="memo" id="memo"
                                                value="{{ old('memo') }}" />
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">送信</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary">保存</button>
                            </div>
                        </div>
                    </div>
                    @csrf
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection

@section('scripts')
    @include('share.flatpickr.scripts')
@endsection
