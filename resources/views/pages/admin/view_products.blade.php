<x-layout>
    <div class="d-flex">
        <x-flash/>
        <x-admin_sidebar/>
        <div class="add_form w-50 mx-auto mt-3 rounded"   >
        <table class="text-capitalize table table-striped table-dark" style="background:pink">
            <thead>
                <tr style="">
                    <th>id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Added At</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                fo
                @foreach ($products as $item)
                    <tr>
                        <td> {{$item['id']}} </td>
                        <td> {{$item['name']}} </td>
                        <td> {{$item['price']}} </td>
                        <td> {{$item['category']}} </td>
                        <td> 
                            <img width="50px" src="{{asset('storage/' . $item->image)}}" alt="">
                        </td>
                        <td> {{$item->created_at}} </td>
                        <td>
                            <button class="btn btn-info">
                                Update
                            </button>
                        </td>
                        <td>
                            <form method="POST" action="/delete-item/{{$item->id}}">
                                @csrf
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links("pagination::bootstrap-5")}}
        </div>
    </div>
</x-layout>