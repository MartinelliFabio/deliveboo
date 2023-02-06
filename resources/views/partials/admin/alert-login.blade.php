<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
          setTimeout(function(){
            document.querySelector(".card").style.display = "none";
          }, 5000);
        });
</script>
