@include('header_dashboard')
<section id="cart-view">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="cart-view-area">
            <div class="cart-view-table">
                <form action="">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            {{-- <th></th> --}}
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                                <tr>
                                    <td><a class="remove" href="{{URL('/Dashboard/RemoveCart',$item->id_cart)}}"><fa class="fa fa-close"></fa></a></td>
                                    <td><img height="70px" src="{{ url('/Item/'.$item->item_image) }}"></td>
                                    <td><a class="aa-cart-title" href="#">{{$item->item_name}}</a></td>
                                    <td>Rp.{{$item->item_price}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>Rp.{{$item->item_price*$item->quantity}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </form>
                <!-- Cart Total view -->
                <div class="cart-view-total">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                    <tbody>
                    <tr>
                        <th>Total</th>
                        <td>{{$item->total}}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{URL('/Dashboard/CheckOut')}}" class="aa-cart-view-btn">Proced to Checkout</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@include('footer_dashboard')
