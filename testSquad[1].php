<!DOCTYPE html>
  <html>
    <head>
    <style>
    body{
      background-color: white;
    }
    @font-face {
    font-family: rlb;
    src: url('Raleway-Black.ttf');
    }
    @font-face {
    font-family: rlt;
    src: url('Raleway-Thin.ttf');
    }
    @font-face {
    font-family: rlmi;
    src: url('Raleway-MediumItalic.ttf');
    }
    @font-face {
    font-family: romi;
    src: url('Roboto-MediumItalic.ttf');
    }
    @font-face {
    font-family: rot;
    src: url('Roboto-Thin.ttf');
    }
    @font-face {
    font-family: rob;
    src: url('Roboto-Black.ttf');
    }
    @font-face {
    font-family: roli;
    src: url('Roboto-LightItalic.ttf');
    }
    @font-face {
    font-family: ror;
    src: url('Roboto-Regular.ttf');
    }
    @font-face {
    font-family: rleli;
    src: url('Raleway-ExtraLightItalic.ttf');
    }
    @font-face {
    font-family: rlsbi;
    src: url('Raleway-SemiBoldItalic.ttf');
    }
    .squad{
      margin:1em 3em 3em 3em;
    }
    .sheader p{
      font-size: 1.7em;
      font-family: rlmi;
      text-align: center;
    }
    .scontent{
      height:20em;
      width:20em;
      margin:2em 1em 2em 3em;
      background-color: #e6e6e6;
      color:black;
      float:left;
      font-family: roli;
      transition: all 0.3s ease-in-out;
    }
    .scontent:hover{
      transform: scale(1.2,1.2);
      box-shadow: 0px 30px 30px 0px #d9d9d9;
    }
    .kno{
      padding-top: 0.6em;
      font-size: 3em;
      font-family: romi;
      text-align: center;
    }
    .pname{
      text-align: center;
      font-size: 1.5em;
      font-family:rlsbi;
    }
    .pos,.value,.contract,.nat{
      text-align: center;
      padding-top: 20px;
    }
    </style>
    <body>
      <div class='squad'>
        <div class='sheader'>
          <p>Know Your Team</p>
        </div>

          <?php
          $mysqli=new mysqli('localhost','root','','players');
          if($mysqli->connect_error){
            die("Connection error".$mysqli->connect_error);
          }

           $query=("SELECT * FROM chelsea");
           $resultsq=$mysqli->query($query);
           while($tempsq=mysqli_fetch_assoc($resultsq)){
             if($tempsq['name']!=NULL AND $tempsq['position']!=NULL AND $tempsq['marketValue']!=NULL AND $tempsq['contractUntil']!=NULL AND $tempsq['nationality']!=NULL){
          echo"  <div class='scontent'><div class='kno'>".$tempsq['Kitno']."</div>
          <div class='pname'>".$tempsq['name']."</div>
          <div class='pos'>".$tempsq['position']."</div>
          <div class='value'>".$tempsq['marketValue']."</div>
          <div class='contract'>".$tempsq['contractUntil']."</div>
          <div class='nat'>".$tempsq['nationality']."</div></div>";


    }
  }
      ?>

      </div>
    </body>
  </html>
