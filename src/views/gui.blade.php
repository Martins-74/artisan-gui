<!DOCTYPE html>
<html lang="en">
<head>
  <title>Artisan GUI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

</head>
<body>

@if($PasswordHasBeenVerified == 'true')  
<div class="jumbotron text-center">
  <h1>Laravel Artisan GUI</h1>
  <p>Check my <a href="https://github.com/Martins-74" target="_blank">github</a> for more information!</p> 
  <p>Made by: Pedro Martins</p>
</div>

<div class="container">
  <div class="row">
  	<div class="col-md-12">
  		<h2>List of Available Commands</h2>
  	</div>
    <div class="col-sm-4">
      <h3>php artisan make:</h3>
      	<div class="input-group">
      		<span class="input-group-addon" id="basic-addon1">controller</span>
  			<input id="makecontroller" type="text" class="form-control" placeholder="name">
			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('make:controller', true)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
    	</div><br>
    	<div class="input-group">
      		<span class="input-group-addon" id="basic-addon1">migration</span>
  			<input id="makemigration" type="text" class="form-control" placeholder="name">
			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('make:migration', true)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
    	</div><br>
    	<div class="input-group">
      		<span style="width: 90px;" class="input-group-addon" id="basic-addon1">model</span>
  			<input id="makemodel" type="text" class="form-control" placeholder="name">
			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('make:model', true)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
    	</div><br>
    	<div class="input-group">
      		<span style="width: 90px;" class="input-group-addon" id="basic-addon1">mail</span>
  			<input id="makemail" type="text" class="form-control" placeholder="name">
			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('make:mail', true)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
    	</div><br>
    	<div class="input-group">
      		<span style="width: 90px;" class="input-group-addon" id="basic-addon1">command</span>
  			<input id="makecommand" type="text" class="form-control" placeholder="name">
			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('make:command', true)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
    	</div><br>
    	<div class="input-group">
      		<span style="width: 90px;" class="input-group-addon" id="basic-addon1">seed</span>
  			<input id="makeseed" type="text" class="form-control" placeholder="name">
			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('make:seed', true)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
    	</div>
    </div>
    <div class="col-sm-4">
      <h3>php artisan migrate:</h3>
      	<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">migrate</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('migrate', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">refresh</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('migrate:refresh', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">install</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('migrate:install', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div>
    </div>
    <div class="col-sm-4">
      <h3>php artisan queue:</h3>        
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">table</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('queue:table', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">restart</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('queue:restart', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">work</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('queue:work', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div>
    </div>
    <div class="col-sm-4">
      <h3>php artisan db:</h3>        
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">seed</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('db:seed', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
    </div>
    <div class="col-sm-4">
      <h3>php artisan schedule:</h3>        
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">run</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('schedule:run', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
    </div>
    <div class="col-sm-4">
      <h3>php artisan vendor:</h3>        
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">publish</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('vendor:publish', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
    </div>
    <div class="col-sm-4">
      <h3>php artisan storage:</h3>        
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">link</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('storage:link', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
    </div>
    <div class="col-sm-4">
      <h3>Others:</h3>        
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">down</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('down', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">up</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('up', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div><br>
		<div class="input-group">
				<span style="width: 90px;" class="input-group-addon" id="basic-addon1">cache:clear</span>

			<span class="input-group-btn">
				<button onclick="javascript:fowardCommand('cache:clear', false)" type="button" class="btn btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>"><i class="fa fa-check"></i></button>
			</span>
		</div>
    </div>
  </div>
</div>

<div style="margin-top: 30px; margin-bottom: 0px;" class="jumbotron text-center">
  <h1>Laravel Artisan GUI</h1>
  <p>Check my <a href="https://github.com/Martins-74" target="_blank">github</a> for more information!</p> 
  <p>Made by: Pedro Martins</p>
</div>

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content panel-success">
        <div class="modal-header panel-heading">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Command Executed With Success!</h4>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <button id="myModalBTN" type="button" class="btn btn-info btn-lg hidden" data-toggle="modal" data-target="#myModal" hidden=""></button>

  <div class="modal fade" id="myModalError" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content panel-danger">
        <div class="modal-header panel-heading">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Name Can't Be Empty!</h4>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <button id="myModalErrorBTN" type="button" class="btn btn-info btn-lg hidden" data-toggle="modal" data-target="#myModalError" hidden=""></button>
@else

<form style="padding-top: 100px;" class="form-horizontal" action="{{ url('artisan-gui/login') }}" method="POST">
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ip1"></label>  
  <div class="col-md-3">
  <input id="ip1" name="ip1" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ip2"></label>  
  <div class="col-md-3">
  <input id="ip2" name="ip2" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">GO</button>
  </div>
</div>

</fieldset>
</form>	
@endif

</body>
</html>

@if($PasswordHasBeenVerified == 'true')  
<script>
function fowardCommand(command, nameIsSet){

	if(nameIsSet == false){
		var url = "{{url('/artisan-gui/command')}}/"+command;
	}else{
		var name = $('#'+command.replace(':', '')).val();

		if(name.length === 0){
			$('#myModalErrorBTN').click();
			setTimeout(function(){ $('.disabled').button('reset'); }, 500);
			return false;
		}

		var url = "{{url('/artisan-gui/command')}}/"+command+':'+name;
	}
	
	$.ajax({url: url, success: function(result){
        if(result == 'true'){
        	setTimeout(function(){ $('#myModalBTN').click(); }, 50);
        	$('.disabled').button('reset');
        }
    }});

}	

$('.btn').on('click', function() {
    var $this = $(this);
  	$this.button('loading');
});

$(window).on('beforeunload', function(){
	$.ajax({url: "{{url('artisan-gui/killsession')}}", success: function(result){}});
});

</script>
@endif

<style>
	.jumbotron{
	    background-color: #99dfff;
	    color: white;
	    font-family: 'Baloo Bhaijaan', cursive;
	}  

	.modal-title{
		color: black;
	}

	body{
		font-family: 'Roboto Slab', serif;
	}
</style>