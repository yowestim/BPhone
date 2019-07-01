@include('header')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">ADD Merk</h3>
    </div>
    <div class="panel-body">
    <form action="{{URL('/Admin/MarkAdd')}}" method="POST">
            {{ csrf_field() }}
            <input class="form-control" style="margin-bottom:5px" name="merk" type="text" placeholder="Mark">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
        </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Color Name</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataMerk as $merk)
                                <tr>
                                    <td>{{$merk->id_merk}}</td>
                                    <td>{{$merk->merk_name}}</td>
                                <td><a href="{{URL('/Admin/MarkDelete',$merk->id_merk)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
</div>
@include('footer')