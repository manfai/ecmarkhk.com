<x-jet-dialog-modal wire:model="viewingDetail" maxWidth="5xl">

  <x-slot name="title">
  </x-slot>

  <x-slot name="content">

      <div class="w-64 rounded-lg mb-6">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-54" viewBox="0 0 807.14 466.85">
              <defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M31.89,23.69H18.4v-9A16,16,0,0,0,18,9.76a1.85,1.85,0,0,0-1.9-1A2,2,0,0,0,13.94,10a18,18,0,0,0-.45,5.13V39.2a16.69,16.69,0,0,0,.45,4.93,1.92,1.92,0,0,0,2,1.16,1.89,1.89,0,0,0,2-1.16,18.78,18.78,0,0,0,.47-5.43V32.18H31.89v2q0,8.05-1.14,11.43a11.63,11.63,0,0,1-5,5.9,17.17,17.17,0,0,1-9.6,2.54,19.88,19.88,0,0,1-9.77-2.15A10.41,10.41,0,0,1,1.25,46Q0,42.19,0,34.55V19.39A68.83,68.83,0,0,1,.38,11a11.73,11.73,0,0,1,2.3-5.4A12.75,12.75,0,0,1,8,1.49,19.21,19.21,0,0,1,15.74,0a19.11,19.11,0,0,1,9.84,2.3,11.09,11.09,0,0,1,5.09,5.75q1.21,3.43,1.22,10.71Z"/><path class="cls-1" d="M67.56,31.47q0,7.83-.36,11.08a12.43,12.43,0,0,1-7.55,10.08A19.11,19.11,0,0,1,52,54.07a19.53,19.53,0,0,1-7.49-1.36,12.47,12.47,0,0,1-7.74-10,108.74,108.74,0,0,1-.38-11.22V22.6q0-7.83.36-11.08A12.43,12.43,0,0,1,44.26,1.44,19.13,19.13,0,0,1,52,0a19.51,19.51,0,0,1,7.48,1.36,12.47,12.47,0,0,1,7.74,10,108.87,108.87,0,0,1,.38,11.22Zm-13.49-17a16,16,0,0,0-.4-4.63,1.6,1.6,0,0,0-1.65-1,1.83,1.83,0,0,0-1.62.82c-.37.54-.56,2.15-.56,4.82V38.65a23.5,23.5,0,0,0,.37,5.58,1.6,1.6,0,0,0,1.71,1.06,1.67,1.67,0,0,0,1.77-1.22,26.2,26.2,0,0,0,.38-5.8Z"/><path class="cls-1" d="M114.23,1.09V53H102.44l0-35-4.7,35H89.36l-5-34.23,0,34.23H72.6V1.09H90.06q.76,4.68,1.6,11l1.91,13.2,3.1-24.23Z"/><path class="cls-1" d="M119.65,1.09h13.59a31.67,31.67,0,0,1,8.47.87,9.4,9.4,0,0,1,4.46,2.5,8.51,8.51,0,0,1,2,4,35.66,35.66,0,0,1,.53,7.2v4.52q0,5-1,7.24a7,7,0,0,1-3.76,3.5,17.9,17.9,0,0,1-7.17,1.21h-3.62V53H119.65ZM133.14,10v13.2c.38,0,.72,0,1,0a3.12,3.12,0,0,0,2.58-.92c.48-.61.73-1.87.73-3.8V14.23c0-1.77-.28-2.93-.84-3.46S134.89,10,133.14,10Z"/><path class="cls-1" d="M174.29,1.09,182,53H168.21l-.72-9.33h-4.83L161.85,53H147.9l6.88-51.89Zm-7.16,33.37q-1-8.82-2-21.8-2.07,14.91-2.59,21.8Z"/><path class="cls-1" d="M214.42,1.09V53H202.6l-7-23.59V53H184.29V1.09h11.29l7.56,23.37V1.09Z"/><path class="cls-1" d="M248.59,1.09,238.75,34.2V53h-12.5V34.2L216.76,1.09h12.4q2.9,15.2,3.27,20.45,1.13-8.31,3.76-20.45Z"/><path class="cls-1" d="M13.88,79.86v41.5h8.2v10.39H.38V79.86Z"/><path class="cls-1" d="M55.19,110.24q0,7.83-.37,11.08a12.39,12.39,0,0,1-7.54,10.08,19.16,19.16,0,0,1-7.7,1.44,19.51,19.51,0,0,1-7.48-1.36,12.47,12.47,0,0,1-7.74-10A108,108,0,0,1,24,110.24v-8.87c0-5.22.13-8.91.37-11.08a12.43,12.43,0,0,1,7.55-10.08,19.11,19.11,0,0,1,7.69-1.44,19.53,19.53,0,0,1,7.49,1.36,12.52,12.52,0,0,1,7.74,10,111.76,111.76,0,0,1,.38,11.22Zm-13.49-17a16.36,16.36,0,0,0-.4-4.63,1.6,1.6,0,0,0-1.65-1,1.83,1.83,0,0,0-1.62.82c-.38.54-.56,2.15-.56,4.82v24.23a23.56,23.56,0,0,0,.37,5.58,1.6,1.6,0,0,0,1.71,1.06,1.65,1.65,0,0,0,1.76-1.22,25.33,25.33,0,0,0,.39-5.8Z"/><path class="cls-1" d="M91.19,99H77.69V94.25a23.88,23.88,0,0,0-.38-5.58,1.72,1.72,0,0,0-1.83-1.12,1.7,1.7,0,0,0-1.7,1,15.64,15.64,0,0,0-.45,4.94v24.9a14.8,14.8,0,0,0,.45,4.6,1.75,1.75,0,0,0,1.8,1.11,2,2,0,0,0,2-1.25,14.72,14.72,0,0,0,.53-4.87v-6.16H75.38V103.9H91.19v27.85H82.71L81.46,128A9.46,9.46,0,0,1,78,131.64a9.82,9.82,0,0,1-5,1.2,12.86,12.86,0,0,1-6.36-1.65,12.16,12.16,0,0,1-4.51-4.09A12.94,12.94,0,0,1,60.22,122a62.73,62.73,0,0,1-.38-8V98.54a52,52,0,0,1,.8-10.8c.53-2.24,2.07-4.3,4.6-6.17a16.12,16.12,0,0,1,9.82-2.8,18.22,18.22,0,0,1,9.84,2.44A11.48,11.48,0,0,1,90,87a30.65,30.65,0,0,1,1.19,9.73Z"/><path class="cls-1" d="M127.24,110.24q0,7.83-.37,11.08a12.39,12.39,0,0,1-7.54,10.08,19.13,19.13,0,0,1-7.7,1.44,19.51,19.51,0,0,1-7.48-1.36,12.47,12.47,0,0,1-7.74-10A108.87,108.87,0,0,1,96,110.24v-8.87q0-7.83.36-11.08a12.43,12.43,0,0,1,7.55-10.08,19.11,19.11,0,0,1,7.69-1.44,19.53,19.53,0,0,1,7.49,1.36,12.52,12.52,0,0,1,7.74,10,108.74,108.74,0,0,1,.38,11.22Zm-13.49-17a16,16,0,0,0-.4-4.63,1.6,1.6,0,0,0-1.65-1,1.83,1.83,0,0,0-1.62.82c-.37.54-.56,2.15-.56,4.82v24.23a23.56,23.56,0,0,0,.37,5.58,1.61,1.61,0,0,0,1.71,1.06,1.67,1.67,0,0,0,1.77-1.22,26.2,26.2,0,0,0,.38-5.8Z"/>
            </svg> -->
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-54" viewBox="0 0 248.59 132.84"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M31.89,23.69H18.4v-9A16,16,0,0,0,18,9.76a1.85,1.85,0,0,0-1.9-1A2,2,0,0,0,13.94,10a18,18,0,0,0-.45,5.13V39.2a16.69,16.69,0,0,0,.45,4.93,1.92,1.92,0,0,0,2,1.16,1.89,1.89,0,0,0,2-1.16,18.78,18.78,0,0,0,.47-5.43V32.18H31.89v2q0,8.05-1.14,11.43a11.63,11.63,0,0,1-5,5.9,17.17,17.17,0,0,1-9.6,2.54,19.88,19.88,0,0,1-9.77-2.15A10.41,10.41,0,0,1,1.25,46Q0,42.19,0,34.55V19.39A68.83,68.83,0,0,1,.38,11a11.73,11.73,0,0,1,2.3-5.4A12.75,12.75,0,0,1,8,1.49,19.21,19.21,0,0,1,15.74,0a19.11,19.11,0,0,1,9.84,2.3,11.09,11.09,0,0,1,5.09,5.75q1.21,3.43,1.22,10.71Z"/><path class="cls-1" d="M67.56,31.47q0,7.83-.36,11.08a12.43,12.43,0,0,1-7.55,10.08A19.11,19.11,0,0,1,52,54.07a19.53,19.53,0,0,1-7.49-1.36,12.47,12.47,0,0,1-7.74-10,108.74,108.74,0,0,1-.38-11.22V22.6q0-7.83.36-11.08A12.43,12.43,0,0,1,44.26,1.44,19.13,19.13,0,0,1,52,0a19.51,19.51,0,0,1,7.48,1.36,12.47,12.47,0,0,1,7.74,10,108.87,108.87,0,0,1,.38,11.22Zm-13.49-17a16,16,0,0,0-.4-4.63,1.6,1.6,0,0,0-1.65-1,1.83,1.83,0,0,0-1.62.82c-.37.54-.56,2.15-.56,4.82V38.65a23.5,23.5,0,0,0,.37,5.58,1.6,1.6,0,0,0,1.71,1.06,1.67,1.67,0,0,0,1.77-1.22,26.2,26.2,0,0,0,.38-5.8Z"/><path class="cls-1" d="M114.23,1.09V53H102.44l0-35-4.7,35H89.36l-5-34.23,0,34.23H72.6V1.09H90.06q.76,4.68,1.6,11l1.91,13.2,3.1-24.23Z"/><path class="cls-1" d="M119.65,1.09h13.59a31.67,31.67,0,0,1,8.47.87,9.4,9.4,0,0,1,4.46,2.5,8.51,8.51,0,0,1,2,4,35.66,35.66,0,0,1,.53,7.2v4.52q0,5-1,7.24a7,7,0,0,1-3.76,3.5,17.9,17.9,0,0,1-7.17,1.21h-3.62V53H119.65ZM133.14,10v13.2c.38,0,.72,0,1,0a3.12,3.12,0,0,0,2.58-.92c.48-.61.73-1.87.73-3.8V14.23c0-1.77-.28-2.93-.84-3.46S134.89,10,133.14,10Z"/><path class="cls-1" d="M174.29,1.09,182,53H168.21l-.72-9.33h-4.83L161.85,53H147.9l6.88-51.89Zm-7.16,33.37q-1-8.82-2-21.8-2.07,14.91-2.59,21.8Z"/><path class="cls-1" d="M214.42,1.09V53H202.6l-7-23.59V53H184.29V1.09h11.29l7.56,23.37V1.09Z"/><path class="cls-1" d="M248.59,1.09,238.75,34.2V53h-12.5V34.2L216.76,1.09h12.4q2.9,15.2,3.27,20.45,1.13-8.31,3.76-20.45Z"/><path class="cls-1" d="M13.88,79.86v41.5h8.2v10.39H.38V79.86Z"/><path class="cls-1" d="M55.19,110.24q0,7.83-.37,11.08a12.39,12.39,0,0,1-7.54,10.08,19.16,19.16,0,0,1-7.7,1.44,19.51,19.51,0,0,1-7.48-1.36,12.47,12.47,0,0,1-7.74-10A108,108,0,0,1,24,110.24v-8.87c0-5.22.13-8.91.37-11.08a12.43,12.43,0,0,1,7.55-10.08,19.11,19.11,0,0,1,7.69-1.44,19.53,19.53,0,0,1,7.49,1.36,12.52,12.52,0,0,1,7.74,10,111.76,111.76,0,0,1,.38,11.22Zm-13.49-17a16.36,16.36,0,0,0-.4-4.63,1.6,1.6,0,0,0-1.65-1,1.83,1.83,0,0,0-1.62.82c-.38.54-.56,2.15-.56,4.82v24.23a23.56,23.56,0,0,0,.37,5.58,1.6,1.6,0,0,0,1.71,1.06,1.65,1.65,0,0,0,1.76-1.22,25.33,25.33,0,0,0,.39-5.8Z"/><path class="cls-1" d="M91.19,99H77.69V94.25a23.88,23.88,0,0,0-.38-5.58,1.72,1.72,0,0,0-1.83-1.12,1.7,1.7,0,0,0-1.7,1,15.64,15.64,0,0,0-.45,4.94v24.9a14.8,14.8,0,0,0,.45,4.6,1.75,1.75,0,0,0,1.8,1.11,2,2,0,0,0,2-1.25,14.72,14.72,0,0,0,.53-4.87v-6.16H75.38V103.9H91.19v27.85H82.71L81.46,128A9.46,9.46,0,0,1,78,131.64a9.82,9.82,0,0,1-5,1.2,12.86,12.86,0,0,1-6.36-1.65,12.16,12.16,0,0,1-4.51-4.09A12.94,12.94,0,0,1,60.22,122a62.73,62.73,0,0,1-.38-8V98.54a52,52,0,0,1,.8-10.8c.53-2.24,2.07-4.3,4.6-6.17a16.12,16.12,0,0,1,9.82-2.8,18.22,18.22,0,0,1,9.84,2.44A11.48,11.48,0,0,1,90,87a30.65,30.65,0,0,1,1.19,9.73Z"/><path class="cls-1" d="M127.24,110.24q0,7.83-.37,11.08a12.39,12.39,0,0,1-7.54,10.08,19.13,19.13,0,0,1-7.7,1.44,19.51,19.51,0,0,1-7.48-1.36,12.47,12.47,0,0,1-7.74-10A108.87,108.87,0,0,1,96,110.24v-8.87q0-7.83.36-11.08a12.43,12.43,0,0,1,7.55-10.08,19.11,19.11,0,0,1,7.69-1.44,19.53,19.53,0,0,1,7.49,1.36,12.52,12.52,0,0,1,7.74,10,108.74,108.74,0,0,1,.38,11.22Zm-13.49-17a16,16,0,0,0-.4-4.63,1.6,1.6,0,0,0-1.65-1,1.83,1.83,0,0,0-1.62.82c-.37.54-.56,2.15-.56,4.82v24.23a23.56,23.56,0,0,0,.37,5.58,1.61,1.61,0,0,0,1.71,1.06,1.67,1.67,0,0,0,1.77-1.22,26.2,26.2,0,0,0,.38-5.8Z"/></svg> --}}
            <x-jet-authentication-card-logo />
 
      </div>
      
      @if($order)
        <div>
            <div class="card bg-base-100">
                
                <div class="invoice p-5 grid grid-cols-3">
                   
                    <div class="col-span-3">
                      <div class="px-4 mt-6">
                      <h5>Your order Confirmed!</h5> 
                      <span class="font-weight-bold mt-4 mb-8">Hello, Chris</span> <span>You order has been confirmed and will be shipped in next two days!</span>
                      </div>
                      <div class="payment border-top mt-3 mb-3 border-bottom table-responsive ">
                          <table class="table table-borderless w-full">
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="py-2"> <span class="d-block text-muted">Order Date</span> 
                                          <br><span>{{$order->created_at}}</span> </div>
                                      </td>
                                      <td>
                                          <div class="py-2"> <span class="d-block text-muted">Order No</span> 
                                          <br><span>{{$order->no}}</span> </div>
                                      </td>
                                      <td>
                                          <div class="py-2"> 
                                          <span class="d-block text-muted">Payment</span> 
                                          <br><span>
                                          @switch($order->payment_method)
                                          @case('stripe')
                                          <i class="fab fa-cc-stripe fa-lg"></i>
                                          @break
                                          @case('master')
                                          @case('mastercard')
                                          <i class="fab fa-cc-mastercard fa-lg"></i>
                                          @break
                                          @case('visa')
                                          <i class="fab fa-cc-visa fa-lg"></i>
                                          @break
                                          @case('applepay')
                                          <i class="fab fa-cc-apple-pay fa-lg"></i>
                                          @break
                                          @case('asiapay')
                                          <i class="fab fa-alipay fa-lg"></i>
                                          @break
                                          @case('POS')
                                          <i class="fas fa-wallet fa-lg"></i>
                                          @break
                                          
                                          @endswitch
                                          </span> 
                                          </div>
                                      </td>
                                      <td>
                                          <div class="py-2"> <span class="d-block text-muted">Shiping Address</span> 
                                          <br><span>{{$order->ship_status}}</span> </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-span-3 product mb-6 w-full">
                        <table class="w-full table table-borderless">
                            <tbody>
                              @foreach($order->items as $item)
                                <tr>
                                    <td width="10%"> <img class="mask mask-squircle" src="{{$item->product->image_file}}" width="100%"> </td>
                                    <td width="70%"> <span class="font-weight-bold">{{$item->product->title}}</span>
                                        <div class="product-qty"> <span class="d-block">Quantity:{{$item->quantity}}</span></div>
                                        @if($item->remark)<div class="product-remark"> <span class="d-block">Student:{{$item->remark}}</span></div>@endif
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">${{$item->quantity * $item->price}}</span> </div>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="summary mb-6 bg-red-500 col-span-1 md:col-end-4 col-end-3">
                      <table class="table table-borderless w-full">
                                <tbody class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Subtotal</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>${{$order->charges()->where('remark','like','Product%')->get()->sum('value')}}</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>${{$order->charges()->where('remark','like','Shipping%')->get()->sum('value')}}</span> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Discount</span> </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="text-success">${{$order->charges()->where('value','<=','0')->get()->sum('value')}}</span> </div>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Total</span> </div>
                                        </td>
                                        <td>
                                            <!-- <div class="text-right"> <span class="font-weight-bold">${{$order->charges()->get()->sum('value')}}</span> </div> -->
                                            <div class="text-right"> <span class="font-weight-bold">${{$order->real_amount}}</span> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="text-sm col-span-3 mt-6">
                      <p>{{__('We will be sending shipping confirmation email when the item shipped successfully!')}}</p>
                      <p class="font-weight-bold mb-0">{{__('Thanks for shopping with us!')}}</p>
                      {{-- <br>
                      <span>{{__('ECBento')}}</span>
                      <div class=" justify-content-between footer"> <span>{{__('Need Help?')}}' {!! 'visit our <a href="#"> help center</a>' !!}</span> <span>{{$order->created_at}}</span> </div> --}}
                    </div>
                </div>
            </div>
        </div>
      @endif
  </x-slot>

  <x-slot name="footer">

  </x-slot>
</x-jet-dialog-modal>