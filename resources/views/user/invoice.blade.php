<x-layout>
    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
       <div class="page-content-inner">
           <div class="container">
               <div class="row pt--50 pt-md--40 pt-sm--20">
                   <div class="col-12">
                     
                   </div>
               </div> 
               <div class="row pb--80 pb-md--60 pb-sm--40">
                   <!-- Checkout Area Start -->  
                   <div class="col-lg-3">
                       <!--<div class="checkout-title mt--10">
                           <h2>Billing Details</h2>
                       </div>-->
                      
                            
                             
                               
                               
                             
                                      
                          
                   </div>
                   <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40" id="to_print">
                       <div class="order-details">
                           <div class="checkout-title mt--10">
                               <h2>Your Order</h2>
                               <h3>{{ $invoiceaddress->fname }}</h3>
                               <p>{{ $invoiceaddress->street }}</p>
                               <p>{{ $invoiceaddress->city }}</p>
                               <p>{{ $invoiceaddress->state }}</p>
                           </div>
                           <div class="table-content table-responsive mb--30">
                               <table class="table order-table order-table-2">
                                   <thead>
                                       <tr>
                                           <th class="text-bold"><b>Product</b></th>
                                           <th class="text-end text-bold"><b>Total</b></th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                     
                                           <tr>
                                               <th>{{ $invoiceproduct_data->product_name }} </th>
                                               <td class="text-end"> ₹ {{ $invoice_order->price }}</td>
                                              
                                           </tr>
                                     
                                   
                                      <!-- <tr>
                                           <th>Auctor gravida enim 
                                               <strong><span>&#10005;</span>1</strong>
                                           </th>
                                           <td class="text-end">$60.00</td>
                                       </tr>-->
                                   </tbody>
                                   <tfoot>
                                       <tr class="cart-subtotal">
                                           <th>Subtotal</th>
                                           <td class="text-end">₹ {{  $invoice_order->price }}</td>
                                       </tr>
                                       <!--<tr class="shipping">
                                           <th>Shipping</th>
                                           <td class="text-end">
                                               <span>Flat Rate; ₹ 20.00</span>
                                           </td>
                                       </tr>-->
                                       <tr class="order-total">
                                           <th>Order Total</th>
                                           <td class="text-end"><span class="order-total-ammount"> ₹ {{ $invoice_order->price }}</span></td>
                                           </tr>
                                   </tfoot>
                               </table>
                           </div>
                           <div class="checkout-payment">
                               
                                
                               <a href="javascript:void(0)" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2" onclick="print_this('to_print')" >Download Invoice</a>
                                
                                   <div class="payment-group mt--20">
                                      </div>
                              
                           </div>
                       </div>
                   </div>
                   <!-- Checkout Area End -->
               </div>
           </div>
       </div>
   </div>
   


   <script>
    window.print_this = function(id) {
        var prtContent = document.getElementById(id);
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
    
        WinPrint.document.write('<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">');
    
        WinPrint.document.write('<html><head><title><?php if(!empty($products)) echo $products[0]['project_name'];?></title></head><body>');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.write('</body></html>');
        WinPrint.document.close();
    
        // Use a longer timeout, e.g., 3000 milliseconds (3 seconds), to ensure the print window loads
        WinPrint.setTimeout(function(){
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }, 1000);
    }
    </script>
</x-layout>
