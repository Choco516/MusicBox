<!doctype html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
</head>
<body>
	<h1>Hola Walti</h1>
	form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	<script src="//code.jquery.com/jquery.js"></script>
</body>
</html>	
