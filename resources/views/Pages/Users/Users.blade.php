@extends('layouts.application')
@include('components.modal')
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


@section('alert_msg')
<div class="info_msg alert alert-secondary" role="alert">
    
  </div>
@endsection

@section('message')
<div class="alert_msg alert alert-success" role="alert">
    
</div>
@endsection

@section('main_content')
<div class="d-flex justify-content-between  ">
    
    <div class="d-flex justify-content-center ">
        <Button class="query btn btn-primary pl-2 m-2">查詢</Button>
        <Button id="Adduserlist" class="List btn btn-outline-primary pl-2 m-2">清單</Button>
        {{-- <button type="button" class="btn btn-outline-primary  pl-2 m-2" 
        data-toggle="modal" data-target="#myModal">
            新增
        </button> --}}
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            新增
        </button>



    </div>


    <div>
      使用者： {{ count($users) }} 人
    </div>

</div>

    <table  class='userTable table ' style='width:100%;  ' border="1" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                @php
                    $rowClass = $index % 2 === 0 ? 'even' : 'odd';
                @endphp
                <tr class="{{ $rowClass }}">
                    <td>{{ $user->U_NAME }}</td>
                    <td>{{ $user->EMAIL }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $users->links() }} --}}
@endsection

