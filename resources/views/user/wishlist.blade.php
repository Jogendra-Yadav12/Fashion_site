<x-layout>
     <!-- Main Content Wrapper Start -->
     <div class="main-content-wrapper">
        <div class="page-content-inner ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table table-style-2 wishlist-table text-center">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="text-start">Product</th>
                                        <th>Stock Status</th>
                                        <th>Price</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($datawishlist->isEmpty())
                                    <tr>
                                      <td colspan="5">Your wishlist is empty.</td>
                                    </tr>
                                  @else
                                    @foreach ($datawishlist as $d)
                                    <tr>
                                        <td class="product-remove text-start"><a href="wishremove/{{$d->id}}"><i class="flaticon flaticon-cross"></i></a></td>
                                        <td class="product-thumbnail text-start">
                                            @if(!empty($d->img))
                                                            @php
                                                                $images = json_decode($d->img);
                                                            @endphp
                                                        
                                                            @if(count($images) > 0)
                                                                <img src="{{ asset('public/images/' . $images[0]) }}" >
                                                            @endif
                                                        @endif
                                        </td>
                                        <td class="product-name text-start wide-column">
                                            <h3>
                                                <a href="#">{{ $d->name}}</a>
                                            </h3>
                                        </td>
                                        <td class="product-stock">
                                            In Stock
                                        </td>
                                        <td class="product-price">
                                            <span class="product-price-wrapper">
                                                <span class="money">₹ {{ $d->price}}</span>
                                            </span>
                                        </td>
                                        <td class="product-action-btn">
                                            <a href="{{ route('product_view', ['id' => $d->p_id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Buy Now</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    <!--<tr>
                                        <td class="product-remove text-start"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                        <td class="product-thumbnail text-start">
                                            <img src="{{asset('public/assets/img/products/prod-11-70x88.jpg')}}" alt="Product Thumnail">
                                        </td>
                                        <td class="product-name text-start wide-column">
                                            <h3>
                                                <a href="product-details.html">Warm Shaker Solid Wood End Table</a>
                                            </h3>
                                        </td>
                                        <td class="product-stock">
                                            In Stock
                                        </td>
                                        <td class="product-price">
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </td>
                                        <td class="product-action-btn">
                                            <a href="cart.html" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove text-start"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                        <td class="product-thumbnail text-start">
                                            <img src="{{asset('public/assets/img/products/prod-12-70x88.jpg')}}" alt="Product Thumnail">
                                        </td>
                                        <td class="product-name text-start wide-column">
                                            <h3>
                                                <a href="product-details.html">Atlin Designs Mid Century Club Chair</a>
                                            </h3>
                                        </td>
                                        <td class="product-stock">
                                            In Stock
                                        </td>
                                        <td class="product-price">
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </td>
                                        <td class="product-action-btn">
                                            <a href="cart.html" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove text-start"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                        <td class="product-thumbnail text-start">
                                            <img src="{{asset('public/assets/img/products/prod-13-70x88.jpg')}}" alt="Product Thumnail">
                                        </td>
                                        <td class="product-name text-start wide-column">
                                            <h3>
                                                <a href="product-details.html">Contemporary 5-Light Large Chandelier</a>
                                            </h3>
                                        </td>
                                        <td class="product-stock">
                                            In Stock
                                        </td>
                                        <td class="product-price">
                                            <span class="product-price-wrapper">
                                                <span class="money">$49.00</span>
                                            </span>
                                        </td>
                                        <td class="product-action-btn">
                                            <a href="cart.html" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                        </td>
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
</x-layout>