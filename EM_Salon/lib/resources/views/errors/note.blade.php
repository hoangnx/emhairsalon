@if(Session::has('error'))
	<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif
@if(Session::has('success'))
	<p class="alert alert-success">{{Session::get('success')}}</p>
@endif

<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
	}, 4000);
</script>