@extends('master')

@section('main_content')

    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="{{url('shop')}}">categories</a></li>
                        <li class="active">Shopping Cart</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <div class="page-wrapper">
        <section class="section" id="page-cart">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table cart-table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $item)
                                    <tr class="item">
                                        <td scope="row" class="product-remove">
                                            <a href="{{url('shop/remove-item?='. $item['id'])}}" class="remove"
                                               title="Remove this item"><i class="lil-close"></i></a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="">
                                                <img src="{{asset('img/products/'.$item['attributes']['pimage'])}}"
                                                     class="img-responsive">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="product.html">{{$item['name']}}</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">${{$item['price']}}</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="+" class="plus">
                                                <input type="number" step="1" max="5" min="1" value="1" title="Qty"
                                                       class="qty" size="4">
                                                <input type="button" value="-" class="minus">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">${{$item['quantity'] * $item['price']}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon col-md-5 col-sm-5 no-padding-left">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                                </div>
                                                <div class="col-xs-6">
                                                    <input type="submit" class="btn btn-default" value="Apply Coupon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cart-collaterals col-md-5 col-sm-7 col-md-offset-2 no-padding-right">
                                            <div class="cart-totals">
                                                <h2>Cart Totals</h2>
                                                <table class="table table-condensed" cellspacing="0">
                                                    <tbody>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td class="text-right">
                                                            <strong><span
                                                                        class="amount">${{Cart::getTotal()}}</span></strong>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="form-group clearfix">
                                                    <div class="pull-left">
                                                        <input type="submit" class="btn btn-primary"
                                                               value="Update Cart">
                                                    </div>
                                                    <div class="pull-right text-right">
                                                        <a href="{{url('shop/order')}}" class="btn btn-default">Proceed
                                                            to
                                                            Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- #page-cart -->
    </div><!-- /.page-wrapper -->


@endsection
