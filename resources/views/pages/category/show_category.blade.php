@extends('layout')
@section('content');

@foreach($category_name as $key =>$name)
<h4 class="head"><span class="m_2">{{$name->category_name}}</span> </h4>
@endforeach
<div class="top_grid2">
   @foreach($category_by_id as $key => $product)
   <div class="col-md-4 ">
      <a href="single.html">
         <div class="grid_1">
            <div class="b-link-stroke b-animate-go  thickbox">
               <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" class="img-responsive" alt=""/> 
            </div>
            <div class="grid_2">
               <p>{{$product->product_name}}</p>
               <ul class="grid_2-bottom">
                  <li class="grid_2-left">
                     <p>{{number_format($product->product_price).' VNĐ'}}</p>
                  </li>
                  <li class="grid_2-right">
                     <div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Thêm giỏ hàng</div>
                  </li>
                  <div class="clearfix"> </div>
               </ul>
            </div>
         </div>
      </a>
   </div>
   @endforeach
</div>

@endsection
