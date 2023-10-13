<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>Ecommerce</title>
</head>
<body>
    <x-flash/>
    <div class="d-flex">
        <x-admin_sidebar/>
        <div class="add_form w-50 mx-auto mt-3">
            <form action="/insert" enctype="multipart/form-data" class="rounded-5 p-4 " style="border:2px solid pink;padding:0.7rem" method="POST">
                @csrf
                <h1 class="display-1 text-center" style='color:pink' >
                    Add Your Product
                </h1>
                <label for="">Product Name</label>
                <input name="name" type="text" class="my-2 form-control" placeholder="Product Name..." value="{{old('name')}}">
                @error('name')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Product Price</label>
                <input name="price" type="number" class="my-2 form-control" placeholder="Product Price..." value="{{old('price')}}">
                @error('price')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Product Description</label>
                <input name="description" type="text" class="my-2 form-control" placeholder="Product Description..." value="{{old('description')}}">
                @error('description')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Product Category</label>
                <select name="category" class="form-control">
                    <option value="women">Women</option>
                    <option value="men">Men</option>
                    <option value="branded">Branded</option>
                    <option value="local">Local</option>
                </select>
                @error('category')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <label for="">Product Image</label>
                <input name="image" type="file" class="my-2 form-control" placeholder="Product Image..." value="{{old('image')}}">
                @error('image')
                    <p class="text-danger fw-bolder">
                        {{$message}}
                    </p>
                @enderror
                <button class="btn w-100 my-3" style="background-color:pink">
                    Add product
                </button>
                
            </form>
        </div>
    </div>
</body>
</html>