@extends('adminview/navbar')

 @section('adminpanel-navbar')

   <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Notice List Table</h4>
               
                <form  method="post" action="{{route('search.notice')}}">
                    @csrf
                
            
                <div id="datatable_filter" class="dataTables_filter float-right"><label>Search:<input type="search" class="form-control form-control-sm" name="search_data" placeholder="" aria-controls="datatable"></label>
                <button type="submit" class="btn btn-primary " style="height: 33px;"> <i class="fa fa-search" aria-hidden="true"></i> </button>
            </div>
                <br><br>
                </form>
                <div id="main_table">
                    
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Notice Date</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $i=0; @endphp
                     @forelse($allNotice as $value)     
                        <tr> 
                            <td>{{++$i}}</td>
                            <td>{{$value['title']}}</td>
                            <td><textarea class="form-control">{{$value['description']}}</textarea></td>
                            <td>{{$value['created_at']}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{route('notice.edit',base64_encode($value->id))}}" class="btn btn-info">Edit</a>
                                  <a href="{{route('notice.delete',base64_encode($value->id))}}" class="btn btn-secondary" onclick="return checkDelete()">Delete</a>
                                </div>
                            </td>
                        </tr>
                      @empty
                      <td colspan="5" style="text-align:center; color:red;">no data found</td>
                      @endforelse
                    </tbody>
                </table>
                {{ $allNotice->links() }}
            

                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
@endsection