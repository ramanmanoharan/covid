@include('header')
 <section class="page-header">
            <div class="container">
                <h2>All Records</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><span>All Records</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

	<!-- @foreach($datas as $key => $e)
	<li>{{ $e['name'] }}</li>
	@endforeach -->
	 <div class="card-body card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>

	<div class="container">
		<br><br>
		<table class="table table-bordered table-striped table-dark table-hover">
			<tr>
				<th>S.No</th>
				<th>NAME</th>
				<th>TITLE</th>
				<th>DESCRIPTION</th>
				<th>IMAGE</th>
				
			</tr>
			@foreach($datas as $key => $e)
			<tr>
				<td>{{ $e['id'] }}</td>
				<td>{{ $e['name'] }}</td>
				<td>{{ $e['title'] }}</td>
				<td>{{ $e['description'] }}</td>
				<td><img class="img-thumbnail" src="uploads/{{ $e['image_name'] }}"></td>
				
			</tr>
			@endforeach
		</table>
	</div>

@include('footer')
<script type="text/javascript">
	$(document).ready(function(){
		
    	$(".card").slideUp(10000);

	});
</script>