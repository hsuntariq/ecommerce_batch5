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
    <div class="d-flex">
        <x-admin_sidebar/>
        <div class="add_form w-50 mx-auto mt-3">
            <form action="" class="rounded-5 p-4 " style="border:2px solid pink;padding:0.7rem">
                <h1 class="display-1 text-center" style='color:pink' >
                    Add Your Product
                </h1>
                <label for="">Product Name</label>
                <input type="text" class="my-2 form-control" placeholder="Product Name...">
                <label for="">Product Price</label>
                <input type="number" class="my-2 form-control" placeholder="Product Price...">
                <label for="">Product Description</label>
                <input type="text" class="my-2 form-control" placeholder="Product Description...">
                <label for="">Product Category</label>
                <select class="form-control">
                    <option value="">Women</option>
                    <option value="">Men</option>
                    <option value="">Branded</option>
                    <option value="">Local</option>
                </select>
                <label for="">Product Image</label>
                <input type="file" class="my-2 form-control" placeholder="Product Image...">
                <button class="btn w-100 my-3" style="background-color:pink">
                    Add product
                </button>
                
            </form>
        </div>
    </div>
</body>
</html>