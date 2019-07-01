@include('header')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">ADD Color</h3>
    </div>
    <div class="panel-body">
        <form  method="POST" action="ColorAdd" >
            {{ csrf_field() }}
            <input class="form-control" style="margin-bottom:5px" name="color" type="text" placeholder="Color">
            <input class="form-control" style="margin-bottom:5px" name="hex_color" type="text" placeholder="Hex Color">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
        </form>
            <table class="table"  style="margin-top:50px">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Color Name</th>
                        <th>Color Hex</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataColor as $color)     
                        <tr>
                            <td>{{$color->id_color}}</td>
                            <td>{{$color->color_name}}</td>
                            <td>{{$color->hex_color}}</td>
                            <td><a href="{{URL('/Admin/ColorDelete', $color->id_color)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@include('footer')