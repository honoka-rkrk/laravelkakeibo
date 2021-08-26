@extends('layout')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- パンくずリストの設定-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{% url 'kakeibo:kakeibo_list' %}">TOP</a>
                </li>
                <li class="breadcrumb-item active">一覧表示</li>
            </ol>
            <!--ページタイトル-->
            <div class="card mb-3">
                <div class="card-header">
                    <h3><b>家計簿アプリ</b></h3>
                </div>
                <div class="card-body">
                    <!-- テーブル表の定義 -->
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover">

                            <!-- 表の列の定義-->
                            <thead>
                                <tr>
                                    <th class="text-center">日付</th>
                                    <th class="text-center">カテゴリ</th>
                                    <th class="text-center">金額</th>
                                    <th class="text-center">メモ</th>
                                </tr>
                            </thead>

                            <!-- ここまでが表の列の定義-->

                            <!-- 表のデータ部分の表示-->
                            <tbody>
                                @foreach ($expences as $expence)
                                    <tr class="odd gradeX text-center">
                                        <td class="text-center" width="100">{{ $expence->formatted_write_date }}</td>
                                        <td class="text-center" width="100">{{ $expence->category_id }}</td>
                                        <td class="text-center" width="140">{{ $expence->money }}</td>
                                        <td class="text-center" width="140">{{ $expence->memo }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <!-- ここまでが表のデータ部分の表示-->
                        </table>
                        <!-- ここまでがテーブル表の定義 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
