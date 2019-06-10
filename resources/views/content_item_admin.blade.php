@include('header')
<script>
        function move() {
          var elem = document.getElementById("myBar");   
          var width = 0.1;
          var id = setInterval(frame, 3);
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
        <button type="button" onclick="move()" class="btn btn-warning" style="float:right; margin-top:1.5%; position:relative; margin-right:2.5%; z-index:90;"><i class="fa fa-plus"></i>&nbsp&nbspAdd&nbsp</button>
        <div class="panel-heading" style="z-index:1;">
            <h3 class="panel-title">ADD Smarthphone</h3>
        </div>
        <div class="panel-body">
                <input class="form-control" type="text" placeholder="Smarthphone Name">
            <br>
                <input class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="number" placeholder="Quantity">
            <br>
                <input class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="number" placeholder="Price">
            <br>
                <input class="form-control" type="text" readonly="readonly" placeholder="Status">
            <br>

                <textarea class="form-control" type="text" placeholder="Description"></textarea>
            <br>
            <select class="form-control">
                <option value="color">red</option>
                <option value="color1">blue</option>
            </select>
            <br>
            <select class="form-control">
                <option value="merk">samsung</option>
                <option value="merk1">apple</option>
            </select>
            <br>
            <button type="button" onclick="move()" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
        </div>
    </div>
    @include('footer')