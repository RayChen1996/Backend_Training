
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
      部門： {{ count($deps) }} 
    </div>

</div>
    <table  class='userTable table ' style='width:100%;  ' border="1" >
        <thead>
            <tr>
                <th>Name</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deps as $index => $dep)
                @php
                    $rowClass = $index % 2 === 0 ? 'even' : 'odd';
                @endphp
                <tr class="{{ $rowClass }}">
                    <td>{{ $dep->D_NAME }}</td>
                    <td>{{ $dep->D_NOTE }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $readers->links() }} --}}
@endsection


<script >



</script>