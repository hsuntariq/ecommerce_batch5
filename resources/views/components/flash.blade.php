@if (session()->has('message'))
    
    <div class="border w-25 rounded p-3" style="background:pink;position:fixed;right:0;top:0">
        {{session('message')}}
    </div>

@endif