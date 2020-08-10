@extends('admin_layout')
@section('admin_content')
<div class="row">
   <div class="col-lg-12">
      <section class="panel">
         <header class="panel-heading">
            Thêm thương hiệu
         </header>
         <div class="panel-body">
            <div class="position-center">
               <form role="form" action="{{URL::to('/save-brand-product')}}" method="POST">
                  @csrf
                  <div class="form-group">
                     <label for="exampleInputEmail1">Tên thương hiệu :</label>
                     <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Mô tả :</label>
                     <textarea style="resize: none" rows="8" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Hiển thị :</label>
                     <select name="brand_product_status" class="form-control input-sm m-bot15">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiển thị</option>
                     </select>
                  </div>
                  <button type="submit" name="add_brand_product" class="btn btn-info">Thêm thương hiệu</button>
               </form>
            </div>
         </div>
      </section>
   </div>
</div>
@endsection