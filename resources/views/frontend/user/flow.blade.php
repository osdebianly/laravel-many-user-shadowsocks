@extends('frontend.user.main')
@section('content')
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            流量信息
            <small>flow</small>
        </h1>
    </section>

    <!-- Main content -->
    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable" id="tabs-7865">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#panel-129773" data-toggle="tab">表格</a>
                        </li>
                        <li>
                            <a href="#panel-779009" data-toggle="tab">图表</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-129773">
                            <section class="content">
                                <div class="row">
                                    <!-- general form elements -->
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th data-field="date">日期</th>
                                            <th data-field="down">下载</th>
                                            <th data-field="up">上传</th>
                                            <th data-field="flow">总流量值</th>
                                            {{--<th data-field="reset_time">最后使用时间</th>--}}
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($flows as $flow)
                                            <tr>
                                                <td>{{ date('Y-m-d',strtotime($flow->created_at))  }}</td>
                                                <td>{{\App\Helpers\Tools::flowAutoShow($flow->down)}}</td>
                                                <td>{{\App\Helpers\Tools::flowAutoShow($flow->up)}}</td>
                                                <td>{{\App\Helpers\Tools::flowAutoShow($flow->flow)}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </section><!-- /.content -->

                        </div>
                        <div class="tab-pane" id="panel-779009">
                            <canvas id="myChart" width="1000" height="500"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div><!-- /.content-wrapper -->

{{Html::script(elixir('js/frontend.js'))}}
<script>
    $(document).ready(function () {
        var data = {
            labels:[
                @foreach($flows as $flow)
                {!! date('d',strtotime($flow->created_at)).',' !!}
                @endforeach
            ],
            datasets: [
                {
                    label: "upload",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [
                        @foreach($flows as $flow)
                        {!! round($flow->flow/1024/1024).',' !!}
                        @endforeach
                    ]
                }

            ]
        };
        var ctx = document.getElementById("myChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(data);
    })
</script>

@endsection