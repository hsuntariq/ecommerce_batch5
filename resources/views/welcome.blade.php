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
                    <div class="col-lg-4">
                        <div class="card p-2 my-1">
                            <img width="100%" height="300px" src="{{asset('storage/' . $item->image)}}" alt="">
                            <h4>{{$item->name}}</h4>
                            <h5> {{$item->price}} </h5>
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



    <x-boot_js/>
</body>
</html>
