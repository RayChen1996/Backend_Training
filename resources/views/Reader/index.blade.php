
@extends('layouts.application')
<script src="./app.js"></script>
<style>
.userTable{

}
.userTable{

}
.userTable tr.even {
  background-color: #0fd576;
  color: white;
}

.userTable tr.odd {
  background-color: #ffffff;
}
</style>

@section('main_content')
<div class="d-flex justify-content-between  ">
    
    <div class="d-flex justify-content-center ">
        <Button class="query btn btn-primary pl-2 m-2">查詢</Button>
       
        <button type="button" class="btn btn-outline-primary  pl-2 m-2" 
        data-toggle="modal" data-target="#myModal">
            新增
        </button>
    </div>


    <div>
     讀卡機： {{ count($readers) }} 台
    </div>

</div>


  

    <table  class='userTable table ' style='width:100%;  ' border="1" >
        <thead>
            <tr>
                <th>卡機名稱</th>
                <th>介面</th>
                <th>編輯</th>
                <th>刪除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readers as $index => $reader)
                @php
                    $rowClass = $index % 2 === 0 ? 'even' : 'odd';
                @endphp
                <tr class="{{ $rowClass }}">
                    <td>{{ $reader->R_NAME }}</td>
                    <td>{{ $reader->R_INTERFACE }}</td>

                    <td> <button class="btn btn-info">編輯</button> </td>
                    <td> <button class="btn btn-danger">刪除</button> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $readers->links() }} --}}
@endsection






