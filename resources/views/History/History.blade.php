@extends('layouts.application')


@section('main_content')
    <Button class="btn btn-info">查詢</Button>
    <table class="table table-primary ">
        <tr>
            <th>序號</th>
            <th>卡號</th>
            <th>日期</th>
            <th>時間</th>
            <th>日期時間</th>
            <th>狀態</th>
            <th>接收時間</th>
            <th>機型</th>
        </tr>
        @foreach ($HistoryData as $History)
            <tr>
                <td>{{ $History->H_IDX }}</td>
                <td>{{ $History->H_CARD }}</td>
                <td>{{ $History->H_DATE }}</td>
                <td>{{ $History->H_TIME }}</td>
                <td>{{ $History->H_DATETIME }}</td>
                <td>{{ $History->H_STATE }}</td>
                <td>{{ $History->H_RECVDATETIME }}</td>
                <td>{{ $History->H_READERMODEL }}</td>
            </tr>
        @endforeach
    </table>
@endsection
