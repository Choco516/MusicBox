<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".panel").slideToggle("slow");
        });
    </script>
<style type="text/css">

        div.panel,p.flip {
          text-align: center;
          padding: 5px;
          background-color: rgba(7, 3, 3, 0.27);
          border: solid 1px #fff;
          width:60%;
          height: 60%;
          display: none;
          position: absolute;
          top: 50%; 
          left: 50%; 
          margin-top: -180px; 
          margin-left: -400px; 
          color: white;
      }

      .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
      }
      .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
      }
      h1 {font-family: "Rockwell", serif;font-weight: bold;font-size: 50pt;}

    </style>
  <div class="panel">
    <br>
    <br>
        <h1>Music</h1>
    <br>

  	<div class="progress progress-striped active">
    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
      <span class="sr-only">45% Complete</span>
    </div>
  </div>
    <form id="file-submit" enctype="multipart/form-data" method="post" action="store">
        <input id="filename" name="filename" type="file"/>
        <input type="submit" value="Guardar" id="file-save" class="btn btn-primary"/>
    </form>
    
    @if(Session::has('message'))
      <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
    @endif
  <form>
      <div class="fileUpload btn btn-primary btn-lg active">
      <span>Upload File</span>
      <input type="file" class="upload" name="file"/>
      </div>
      <button type="button" class="btn btn-success btn-lg active">Download File</button>
      <br>
  </form>
  

<h1>Box</h1>
</div>


{{HTML::script('js/jquery.js');}}
<script type="text/javascript">
console.log('lol');
    $(document).ready(function () {
        $('#Contact').removeClass("active");
        $('#Contact').addClass("Contact");
    });
</script>
	<script src="//code.jquery.com/jquery.js"></script>