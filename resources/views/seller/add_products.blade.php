@extends('seller.seller_master')
@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('seller.insertProduct')}}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="product_name" class="form-control"  placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Category</label>
                    <!-- <input type="text" name="category" class="form-control"  placeholder="Enter Product Category"> -->
                    <select class="form-control select2" name="category_id" style="width: 100%;" >
                    <option value="" selected="selected">Please Select The Category</option>
                    @foreach(App\Models\Category::orderBy('category_name','asc')->get() as $cate)
                    <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="number" name="price" class="form-control"  placeholder="Enter Product Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <input type="text" name="description" class="form-control"  placeholder="Enter Product Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Image</label>
                    <input type="file" name="image[]" class="form-control"  placeholder="Enter Product Image">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product SKU</label>
                    <input type="text" name="SKU" class="form-control"  placeholder="Enter Product SKU">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Slug</label>
                    <input type="text" name="slug" class="form-control"  placeholder="Enter Product Slug">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Stock</label>
                    <input type="number" name="stock" class="form-control"  placeholder="Enter Product Stock">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Weight</label>
                    <input type="number" name="Weight" class="form-control"  placeholder="Enter Product Weight">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Dimension</label>
                    <input type="number" name="dimension" class="form-control"  placeholder="Enter Product Dimension">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection