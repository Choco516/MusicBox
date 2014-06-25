<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".panel").fadeIn('slow');
        });
    </script>

<style type="text/css">

        div.panel,p.flip {
          text-align: center;
          padding: 5px;
          background-color: rgba(7, 3, 3, 0.27);
          border: solid 1px #fff;
          width:60%;
          height: 65%;
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
        <h1>Music Box</h1>

  	<div class="progress progress-striped active">
    <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      <span class="sr-only">100% Complete</span>
    </div>
  </div>
    <form id="file-submit" enctype="multipart/form-data" method="post" action="store">
        <input id="filename" name="filename" type="file"/>
        <h2>Audio format to convert</h2> 
        <div class="form-control"> 
          <input type="radio" name="tipo" id="tipo" value="ogg" required> OGG
          <input type="radio" name="tipo" id="tipo" style="margin-left:12%;" value="mp3" required> MP3
          <input type="radio" name="tipo" id="tipo" style=" margin-left:12%; " value="wav" required> WAV
        </div>
        <div class="fileUpload btn btn-primary btn-lg active">
      <span>Upload File</span>
      <input type="submit" class="upload" name="file" value="Upload File" id="file-save"/>
      </div>
      <button type="button" class="btn btn-success btn-lg active">Download File</button>
      <br>

    </form>
      @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
      @endif
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