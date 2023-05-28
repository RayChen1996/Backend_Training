
@extends('layouts.application')
 
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
      使用者： {{ count($uacs) }} 人
    </div>

</div>

    <table  class='userTable table ' style='width:100%;  ' border="1" >
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uacs as $index => $uac)
                @php
                    $rowClass = $index % 2 === 0 ? 'even' : 'odd';
                @endphp
                <tr class="{{ $rowClass }}">
                    <td>{{ $uac->U_ID }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $readers->links() }} --}}
@endsection
<script >



</script>