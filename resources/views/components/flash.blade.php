<style>
    .move{
        transition: all 0.9s
    }
</style>
@if (session()->has('message'))
    
    <div class="move border w-25 rounded p-3" style="background:pink;position:fixed;right:0;top:0">
        {{session('message')}}
        <button>OK</button>
    </div>

@endif



<script>
    let move = document.querySelector('.move');
    let btn = document.querySelector('button');
    btn.addEventListener('click',()=>{
        move.style.transform = 'translateX(100%)'
    })
    // setTimeout(() => {
    //     move.style.transform = 'translateX(100%)'
    // }, 2000);
</script>