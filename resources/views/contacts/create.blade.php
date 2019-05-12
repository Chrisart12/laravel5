@extends("layouts/default", ["title" => "Contact"])

@section("title")
    About
@stop

@section("content")
    <div class="container" >
    	<h2 class="text-center">CONTACT</h2>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<p class="text-muted">if you having trouble whith this service, please ask for help</p>

			<form action="#" @method('POST')>
				<div class="form-group">
					<label for="name" class="control-label">Name</label>
					<input type="text" name="name" id="name" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label for="email" class="control-label">Email</label>
					<input type="email" name="email" id="email" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label for="message" class="control-label sr-only">Message</label>
					<textarea rows="10" cols="10" name="message" id="message" class="form-control" required="required"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info btn-block">ENVOYER</button>
				</div>
				
			</form>
		</div>
		
	</div>

@stop
    
