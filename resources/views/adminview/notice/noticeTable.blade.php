


<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                    </thead>


                    <tbody>
                   @foreach($searchdata as $value)     
        <tr> 
            <td>{{$value['id']}}</td>
            <td>{{$value['title']}}</td>
            <td><textarea>{{$value['description']}}</textarea></td>
        </tr>
@endforeach
                    </tbody>
                </table>