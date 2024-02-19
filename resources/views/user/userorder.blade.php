<x-layout>
    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="page-content-inner ptb--80">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12 mb-md--50">
                       
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="table-content table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                  
                                                   
                                                   
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Price</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                static $x = 1;
                                                $amount = 0;
                                                $i = [];
                                                @endphp
                                                @if ($dataorder->isEmpty())
                                                <tr>
                                                  <td colspan="5">Your cart is empty.</td>
                                                </tr>
                                              @else
                                                @foreach ($dataorder as $d)
                                                <tr>
                                                    
                                                   
                                                    <td class="product-name text-start ">
                                                        <span class="product-price-wrapper">
                                                            <span class="money">{{ $d->color}}</span>
                                                        
                                                        </span>
                                                    </td>
                                                    <td class="product-name text-start ">
                                                        
                                                        <span class="product-price-wrapper">
                                                            <span class="money">{{ $d->size}}</span>
                                                         
                                                        </span>
                                                    </td>
                                                    
                                                    <td class="product-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money">₹  {{ $d->price}}</span>
                                                        </span>
                                                    </td>
                                                    
                                                     
                                                   
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                           
                        
                    </div>
                   
             
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
    <!-- Add this script in your HTML -->







</x-layout>