<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot_css/>
    <title>Document</title>
</head>
<body>
    <x-nav/>
    <x-slider/>

    <div class="container">
        <h1 class="display-1 text-center" style="color:hotpink">
            Our Products
        </h1>
        <hr style="width: 20%;background-color:hotpink;border:none;height:3px;margin:auto">

        <div class="container">
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-lg-2">
                        <div class="card p-2 my-1">
                            <img width="50%" style="margin: auto;display:flex" height="100px" src="{{asset('storage/' . $item->image)}}" alt="">
                            <h4>{{$item->name}}</h4>
                            <h5>Rs.<span class="d_price">{{$item->d_price}}</span>  </h5>
                            <h6 class="text-secondary price" style="text-decoration: line-through">Rs.{{$item->price}} <span class="per"></span> </h6>
                            <button class="btn w-100 my-2" style="background:pink">
                                View Details
                            </button>
                        </div>
                    </div>
                @endforeach
                <div class="my-2">
                    {{$product->links("pagination::bootstrap-5")}}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="display-1 text-center" style="color:hotpink">
            Our Categories
        </h1>
        <hr style="width: 20%;background-color:hotpink;border:none;height:3px;margin:auto">
        <div class="row mt-3">
            @foreach ($category as $cat)
                <div class="col-lg-2">
                    <div class="card p-3">
                        <img width="50%" style="margin: auto;display:flex" height="100px" src="{{asset('storage/' . $cat->category_image)}}" alt="">
                        <h4>Category:{{$cat->category_name}}</h4>
                        <button class="btn w-100 my-2" style="background:pink">
                            Related Products
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <x-boot_js/>

    <script>
        let discount = document.querySelector('.d_price');
        // alert(discount.innerHTML)
        let d = parseInt(discount);
        alert(typeof(d))

    </script>

</body>
</html>
