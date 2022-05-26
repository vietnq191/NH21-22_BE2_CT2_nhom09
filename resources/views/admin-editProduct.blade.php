@extends('master-admin')
@section('content')
<?php if (session('usuccess')) { ?>
    <div class="alert alert-danger">
        <?php echo session('usuccess'); ?>
    </div>
<?php } ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="{{route('product.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                        <input type="hidden" id="id" class="form-control" value="<?php echo $product[0]['id'] ?>" name="id" required>
                            <label for="inputName">Name</label>
                            <input type="text" id="name" class="form-control" value="<?php echo $product[0]['name'] ?>" name="name" required>
                            <label for="inputPrice">Price</label>
                            <input type="number" id="price" class="form-control" step="any" value="<?php echo $product[0]['price'] ?>" name="price" required>
                            <label for="inputType">Type</label>
                            <select id="type" class="form-control custom-select" name="type" required>
                                <?php
                                foreach ($allprotype as $value) {
                                ?>
                                    <option <?php if($value['id']==$product[0]['type_id']){echo "selected";} ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                <?php } ?>
                            </select>
                            <label for="inputPrice">Weight</label>
                            <input type="number" id="weight" step="any" class="form-control" value="<?php echo $product[0]['sales'] ?>" name="weight" required>
                            <div class="form-group">
                                <label for="inputImage1">Image 1</label>
                                <input type="file" name="image1" id="inputImage1" class="form-control" accept="image/png, image/jpeg" onchange="validateFileType('inputImage1')"/>
                                <br>
                                <img id="blah" src="#" alt="your image" style="display:none" width="150" height="150"/>
                            </div>
                            <div class="form-group">
                                <label for="inputImage2">Image 2</label>
                                <input type="file" name="image2" id="inputImage2" class="form-control" accept="image/png, image/jpeg" onchange="validateFileType('inputImage2')"/>
                                <br>
                                <img id="blah2" src="#" alt="your image" style="display:none" width="150" height="150"/>
                            </div>
                            <div class="form-group">
                                <label for="inputImage3">Image 3</label>
                                <input type="file" name="image3" id="inputImage3" class="form-control" accept="image/png, image/jpeg" onchange="validateFileType('inputImage3')"/>
                                <br>
                                <img id="blah3" src="#" alt="your image" style="display:none" width="150" height="150"/>
                            </div>
                            <div class="form-group">
                                <label for="inputImage4">Image 4</label>
                                <input type="file" name="image4" id="inputImage4" class="form-control" accept="image/png, image/jpeg" onchange="validateFileType('inputImage4')"/><br>
                                <img id="blah4" src="#" alt="your image" style="display:none" width="150" height="150"/>
                            </div>
                        </div>
                        <label for="inputDescription">Description</label>
                        <textarea id="inputDescription" class="form-control" rows="4" name="description" required><?php echo $product[0]['description'] ?></textarea>
                        <label for="inputInfomation">Infomation</label>
                        <textarea id="inputInfomation" class="form-control" rows="4" name="infomation" required><?php echo $product[0]['infomation'] ?></textarea>
                        <label for="inputSales">Sales</label>
                        <select id="sales" class="form-control custom-select" name="sales" required>
                            <?php
                            for ($i = 0; $i <= 100; $i = $i + 10) {
                            ?>
                                <option <?php if ($product['0']['sales'] * 1 == $i) {
                                            echo "selected";
                                        } ?> value="<?php echo $i; ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        <label for="inputFeatured">Featured</label>
                        <select id="featured" class="form-control custom-select" name="featured" required>
                            <option disabled value="">Select one</option>
                            <option <?php if ($product['0']['featured'] == "0") {
                                            echo "selected";
                                        } ?> value="0">0</option>
                            <option <?php if ($product['0']['featured'] == "1") {
                                            echo "selected";
                                        } ?> value="1">1</option>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('admin.listproduct')}}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success float-right">Edit</button>
            </div>
        </div>
    </form>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    function validateFileType(name) {
        var fileName = document.getElementById(name).value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
            const [file1] = inputImage1.files
      if (file1) {
        blah.src = URL.createObjectURL(file1)
        document.getElementById("blah").style.display=""
      }
      const [file2] = inputImage2.files
      if (file2) {
        blah2.src = URL.createObjectURL(file2)
        document.getElementById("blah2").style.display=""
      }
      const [file3] = inputImage3.files
      if (file3) {
        blah3.src = URL.createObjectURL(file3)
        document.getElementById("blah3").style.display=""
      }
      const [file4] = inputImage4.files
      if (file4) {
        blah4.src = URL.createObjectURL(file4)
        document.getElementById("blah4").style.display=""
      }
        } else {
            alert("Only jpg/jpeg and png files are allowed!");
            document.getElementById(name).value = "";
        }
    }
</script>
<style>
img {
  border: 5px solid #555;
}
</style>
@endsection