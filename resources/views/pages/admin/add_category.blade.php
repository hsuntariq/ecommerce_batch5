<x-layout>
    <div class="d-flex">
        <x-flash/>
        <x-admin_sidebar/>
        <div class="add_form w-50 mx-auto mt-3" >
        <form action="/insert-category" enctype="multipart/form-data" method="POST" style="border:2px solid pink;padding:0.7rem" class="rounded p-3">
            @csrf
            <h1 class="display-1 text-center" style="color:pink">
                Add Category
            </h1>
            <label for="">Category Name</label>
            <input type="text" placeholder="Add a category...." name="category_name" class="form-control">
            <label for="">Image</label>
            <input type="file" name="category_image" class="form-control">
            <button class="btn w-100 my-3" style="background-color:pink">
                Add Category
            </button>
        </form>
        </div>
    </div>
</x-layout>