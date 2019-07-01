@include('header')
<script>
        function move() {
          var elem = document.getElementById("myBar");   
          var width = 0.1;
          var id = setInterval(frame, 0.5);
          function frame() {
            if (width >= 100) {
              clearInterval(id);
            } else {
              width++; 
              elem.style.width = width + '%'; 
            }
          }
        }
</script>
<style>
#myBar {
  width: 0,1%;
  height: 10px;
  background-color: green;
}
</style>
<div class="progress progress-xs" style="margin-bottom:-0.5%">
        <div id="myBar" class="progress-bar progress-bar-success">
        </div>
</div>
<div class="panel">
        <div class="panel-heading" style="z-index:1;">
                <h3 class="panel-title">ADD Smarthphone</h3>
            </div>
        <div class="panel-body">
        <form action="{{URL('/Admin/Item/Update/Save', $dataItem->id_item)}}" method="POST">
          {{ csrf_field() }}
                <input class="form-control" type="text" value="{{$dataItem->item_name}}" name="name" placeholder="Smarthphone Name">
              <br>
                <input class="form-control" value="{{$dataItem->item_total}}" name="quantity" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="number" placeholder="Quantity">
              <br>
                <input class="form-control" value="{{$dataItem->item_price}}" name="price" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="number" placeholder="Price">
              <br>
                <input class="form-control" type="text" value="{{$dataItem->item_status}}" name="status" readonly="readonly" placeholder="Status">
              <br>
                <textarea class="form-control" type="text" name="description" placeholder="Description">{{$dataItem->item_description}}</textarea>
              <br>
              <select class="form-control" name="color">
                  @foreach ($dataColor as $color)  
                     <option value="{{$color->id_color}}"
                        @if ($dataItem->color_id == $color->id_color)
                            {{"selected"}}
                        @endif
                        >{{$color->color_name}}</option>
                  @endforeach     
              </select>
              <br>
              <select class="form-control" name="merk">
                @foreach ($dataMerk as $merk)  
                  <option value="{{$merk->id_merk}}"
                    @if ($dataItem->merk_id == $merk->id_merk)
                        {{"selected"}}
                    @endif
                    >{{$merk->merk_name}}</option>
                @endforeach
              </select>
              <br>
              <button type="submit" onclick="move()" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
          </form>
        </div>
</div>


@include('header')