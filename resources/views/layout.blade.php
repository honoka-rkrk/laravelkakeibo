<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-with,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kakeibo App</title>
    @yield('styles')
    <link rel="stylesheet" href={{ asset('/css/styles.css') }}>
    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css" />
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">家計簿 App</a>
            <div class="my-navbar-control">
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <script>
        jQuery(function($) {
            // デフォルトの設定を変更
            $.extend($.fn.dataTable.defaults, {
                language: {
                    url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
                }
            });
            $("#kakeibo_list").DataTable({
                "searching": true, //検索機能
                "paging": true, //ページング機能
                "ordering": true, //ソート機能
                "lengthChange": true, //件数切り替え機能

            }).columns.adjust().draw();
        });
    </script>
    @yield('scripts')
</body>

</html>
