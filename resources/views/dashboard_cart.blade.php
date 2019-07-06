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
                            <th></th>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                            <td><a href="#"><img src="img/man/polo-shirt-1.png" alt="img"></a></td>
                            <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                            <td>$250</td>
                            <td><input class="aa-cart-quantity" type="number" value="1"></td>
                            <td>$250</td>
                        </tr>
                        <tr>
                            <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                            <td><a href="#"><img src="img/man/polo-shirt-2.png" alt="img"></a></td>
                            <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                            <td>$150</td>
                            <td><input class="aa-cart-quantity" type="number" value="1"></td>
                            <td>$150</td>
                        </tr>
                        <tr>
                            <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                            <td><a href="#"><img src="img/man/polo-shirt-3.png" alt="img"></a></td>
                            <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                            <td>$50</td>
                            <td><input class="aa-cart-quantity" type="number" value="1"></td>
                            <td>$50</td>
                        </tr>
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
                        <th>Subtotal</th>
                        <td>$450</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>$450</td>
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
