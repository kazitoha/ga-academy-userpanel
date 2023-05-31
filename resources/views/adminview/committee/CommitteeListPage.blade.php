@extends('adminview/navbar')

@section('adminpanel-navbar')
    <div class="row">
        <div class="container">
            <h4 class="float-left">Committee Member List</h4>
            <form method="post" action="{{ route('search.committee') }}">
                @csrf
                <div id="datatable_filter" class="dataTables_filter float-right"><label>Search:<input type="search"
                            class="form-control form-control-sm" name="search_data" placeholder=""
                            aria-controls="datatable"></label>
                    <button type="submit" class="btn btn-primary " style="height: 33px;"> <i class="fa fa-search"
                            aria-hidden="true"></i> </button>
                </div>
            </form>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th data-priority="1">Title</th>
                                        <th data-priority="1">Email</th>
                                        <th data-priority="1">Phone</th>
                                        <th data-priority="1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    @php $i=0; @endphp
                                    @forelse($CommitteeList as $value)
                                        <tr>
                                            <td>{{ $value['id'] }}</td>
                                            <td>{{ $value['name'] }}({{ $value['designation'] }})</td>
                                            <td>{{ $value['email'] }}</td>
                                            <td>{{ $value['phone'] }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('committee.edit', base64_encode($value->id)) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('committee.delete', base64_encode($value->id)) }}"
                                                        class="btn btn-secondary" onclick="return checkDelete()">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="5" style="text-align:center; color:red;">no data found</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">
                    {{ $CommitteeList->links() }}
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
@endsection
