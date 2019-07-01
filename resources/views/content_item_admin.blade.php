@include('header')

<div class="panel">
        <a href="{{URL('/Admin/Item/Add')}}"><button type="button" class="btn btn-warning" style="float:right; margin-top:1.5%; position:relative; margin-right:2.5%; z-index:90;"><i class="fa fa-plus"></i>&nbsp&nbspAdd&nbsp</button></a>
        <div class="panel-heading" style="z-index:1;">
            <h3 class="panel-title">Smarthphone</h3>
        </div>
          <div class="panel-body">
              <table class="table">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Status</th>
                          <th>Merk</th>
                          <th>Color</th>
                          <th>Description</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($item as $item)
                        <tr>
                            <td>{{$item->id_item}}</td>
                            <td>{{$item->item_name}}</td>
                            <td>{{$item->item_total}}</td>
                            <td>{{$item->item_price}}</td>
                            <td>{{$item->item_status}}</td>
                            <td>{{$item->merk_name}}</td>
                            <td>{{$item->color_name}}</td>                                
                            <td>{{$item->item_description}}</td>
                            <td class="col-md-2">
                                <a href="{{URL('/Admin/Item/Update', $item->id_item)}}" class="btn btn-primary"><span class="fa fa-pencil"></span></div>
                                <a href="{{URL('/Admin/Item/Delete', $item->id_item)}}" class="btn btn-danger"><span class="fa fa-trash"></span></div>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
    </div>
    @include('footer')