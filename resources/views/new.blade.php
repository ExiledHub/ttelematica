<!DOCTYPE html>

<html>
  <head>
    <title>New Project</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{ URL::asset('css/general.css') }}" rel="stylesheet"/>
  </head>	
  <body>
    <header>
      <div class="container">
	<div id="left">
	  <strong>
	    <a href="/">
	      Home
	    </a>
	  </strong>
	  <strong>
	    <a href="">
	    </a>
	  </strong>
	</div>
	<div id="right">
	  <strong>
	    <a href="">
	      Login
	    </a>
	  </strong>
	</div>
      </div>
    </header>
    <br>
    
    <div class="container" id="mainBody">
      <div id="formid">
	<form method="POST" action="/posts">
	  {{ csrf_field() }}
	  *Proyect Name:<br>
	  {{ Form::text('pname') }}
	  <br><br>
	  Description:<br>
	  {{ Form::text('pdesc') }}
	  <br><br>
	  *Start Date:<br>
	  {{ Form::date('idate', \Carbon\Carbon::now()) }}
	  <br><br>
	  *End Date:<br>
	  {{ Form::date('edate', \Carbon\Carbon::now()) }}
	  <br><br>
	  {{ Form::submit(
	  'Submit',
	  array('class'=>'btn'))
	}}
	</form>
      </div>
    </div>
    
    <footer>
      <div class="container">
	<div id="left">
	  <a>
	    left
	  </a>
	</div>
	<div id="right">
	  <a>
	    right
	  </a>
	</div>
      </div>
    </footer>
  </body>
</html>
