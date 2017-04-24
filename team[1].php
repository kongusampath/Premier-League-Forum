<!DOCTYPE html>
  <html>
    <head>
      <title>Chelsea</title>
      <style>
      @font-face {
      font-family: rlb;
      src: url('Raleway-Black.ttf');
      }
      @font-face {
      font-family: rlt;
      src: url('Raleway-Thin.ttf');
      }

      ul {
          position: relative;
          margin-top: 10em;
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #f2f2f2;
          height:3.2em;
          box-shadow: 0px 0px 5px 0px #cccccc;
      }

        li{

          float:left;
          padding-top: 1em;
        }
        li a{
          text-align:center;
          text-decoration: none;
          padding-right: 1em;
          padding-left: 1em;
          margin-left: 0;
          margin-right: 0;
          font-size: 1.2em;
          background-color: #f2f2f2;
          color:#808080;

        }
        li a:hover,li a:focus,li a:active{
          background-color: #cccccc;
          color:white;
        }
        .contents{
          display: none;
          background-color: white;
        }
        .logo{
          width:100%;
          position: relative;
          background-color: rgba(0, 0, 0, 0.6);
          background-image: url("stamford.jpg");
          height:25em;
        }
        .logo1 img{
          height: 18em;
        }
        .tname{
          position: relative;
          margin-left: 2em;
          font-family: rlt;
          font-size: 4em;
          color: white;;
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
        body{
          background-color: white;

        }
        .header{
          position: relative;
          margin-left: 1.6em;
          margin-top: 2em;
          font-size: 2em;
          font-family: roli;
        }
        .header span{
          color: #005ce6;
          font-size: 2.5em;
        }
        .news{
          position: relative;
          width: 100%;
          margin-left: 3em;
          margin-right:3em;
          background-color: #e6e6e6;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
        }
        .n{
          padding-left: 2em;
          height: 3em;
          margin-top: 30px;
          background-color: #e6e6e6;
          font-size: 1.6em;
          font-family: ror;
          transition:0.4s;
        }
        .n:hover{
          background-color: #404040;
          color: #f2f2f2;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
          cursor: pointer;

        }
        .n.active{
          background-color: #d9d9d9;
        }
        div.h{
          display: none;
          background-color: white;
          height: 5em;

        }
        div.h.show{
          display: block;
          font-family: roli;
          padding-top: 2em;
          padding-left: 3em;
          font-size: 1.2em;
          transition: 0.6s ease-in-out;
        }

        .standings{
          background-color: #f2f2f2;
          height:3em;
          text-align: center;
          font-family:romi;
          color: black;
          margin: 1em 5em 1em 5em;
          padding-top: 1em;
          font-size: 1.5em;
        }
        .columnNames{
          background-color: #f2f2f2;
          margin:0em 7.6em 0em 7.6em;

        }
        .columnNames a{
          text-decoration: none;
          color: black;
          font-family: romi;
          font-size: 1.2em;
        }
        .rank{
          padding-left: 2em;
        }
        .team{
          padding-left: 7em;
        }
        .match{
          padding-left: 9em;
        }
        .gf{
          padding-left: 3em;
        }
        .ga{
          padding-left: 3em;
        }
        .gd{
          padding-left: 3em;
        }
        .point{
          padding-left: 4em;
        }
        .allteams{
          background-color: #f2f2f2;
          margin:0em 7.6em 0em 7.6em;
        }
        .r{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin:1em 0em 1em 3em;
        }
        .t{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin: 1em 0em 1em 12em;
        }
        .m{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin: 1em 0em 1em 28em;
        }
        .f{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin: 1em 0em 1em 35em;
        }
        .a{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin: 1em 0em 1em 40em;
        }
        .d{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin: 1em 0em 1em 44em;
        }
        .p{
          position: absolute;
          text-decoration: none;
          color: black;
          font-size: 1.2em;
          margin: 1em 0em 1em 50em;
        }
        .all:hover,.all:focus{
          background-color: #e6e6e6;
          padding-bottom: 10px;
          transition:  all 0.3s ease-in-out;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
        }
        .last{
          background-color: #f2f2f2;
          height:10em;
          margin:1em 11em 10em 11em;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
        }
        .lheader{
          background-color: #d9d9d9;
          width:100%;
          box-shadow: 0px 10px 10px 0px #e6e6e6;
        }
        .lheader p{
          font-family: roli;
          padding: 0.3em 1em 0.3em 1.5em;
          font-size: 1.6em;
          color: black;
        }
        .lcontent{
          font-family: roli;
          padding: 0.5em 5em 0.5em 10em;
          font-size: 1.8em;
        }
        .form{
          font-family: roli;
          background-color: #f2f2f2;
          height:10em;
          margin:7em 0em 7em 0em;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
        }
        .fheader{
          font-family: roli;
          background-color: #d9d9d9;
          width:100%;
          box-shadow: 0px 10px 10px 0px #e6e6e6;
        }
        .fheader p{
          font-family: roli;
          padding: 0.3em 1em 0.3em 1.5em;
          font-size: 1.6em;
          color: black;
        }
        .fcontent{
          padding: 0.5em 3em 0.5em 3em;
          margin-bottom: 5em;
          font-size: 1.9em;
          z-index: -100;
        }
        .fcontent .win{
          float: left;
          margin-left: 3em;
          background-color: green;
          border-radius: 1em;
          width:1.6em;
          height: 1.6em;
        }
        .fcontent .draw{
          float: left;
          margin-left: 3em;
          background-color: #d9d9d9;
          border-radius: 1em;
          width:1.6em;
          height: 1.6em;
        }

        .fcontent .loose{
          float: left;
          margin-left: 3em;
          background-color: red;
          border-radius: 1em;
          width:1.6em;
          height: 1.6em;
        }
        .fcontent p{
          display: none;
        }
        .win p:active{
          display: block;
          z-index:100;
        }
        .loose p:active{
          display: block;
          z-index:100;
        }
        .draw p:active{
          display: block;
          z-index:100;
        }
        .rheader{
          font-family: roli;
          background-color: #d9d9d9;
          width:100%;
          box-shadow: 0px 10px 10px 0px #e6e6e6;
        }
        .rheader p{
          font-family: roli;
          padding: 0.3em 1em 0.3em 1.5em;
          font-size: 1.6em;
          color: black;
        }
        .results{
          background-color: #f2f2f2;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
        }
        .rcontent a{
          font-size: 1.3em;
          color:black;
          text-decoration: none;
          margin: 0.3em 4em 0.3em 10em;
        }
        .rall{
          padding-top: 10px;
          padding-bottom: 10px;
        }
        .rall:hover{
          background-color: #e6e6e6;
          padding-bottom: 10px;
          transition:  all 0.3s ease-in-out;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
        }
        .fix{
          background-color: #f2f2f2;
          height:10em;
          margin:1em 11em 10em 11em;
        }
        .fxheader{
          font-family: roli;
          background-color: #d9d9d9;
          width:100%;
          box-shadow: 0px 10px 10px 0px #e6e6e6;
        }
        .fxheader p{
          font-family: roli;
          padding: 0.3em 1em 0.3em 1.5em;
          font-size: 1.6em;
          color: black;
        }
        .fxcontent{
          font-family: roli;
          padding: 0.5em 2em 0.5em 2em;
          font-size: 1.8em;
        }
        .up{
          background-color: #f2f2f2;
          margin: 8em 0em 5em 0em;
        }
        .upheader{
          font-family: roli;
          background-color: #d9d9d9;
          width:100%;
          box-shadow: 0px 10px 10px 0px #e6e6e6;
        }
        .upheader p{
          font-family: roli;
          padding: 0.3em 1em 0.3em 1.5em;
          font-size: 1.6em;
          color: black;
        }
        .upcontent a{
          font-size: 1.3em;
          color:black;
          text-decoration: none;
          margin: 0.3em 4em 0.3em 10em;
        }
        .fixall{
          padding-top: 10px;
          padding-bottom: 10px;
        }
        .fixall:hover{
          background-color: #e6e6e6;
          padding-bottom: 10px;
          transition:  all 0.3s ease-in-out;
          box-shadow: 0px 10px 10px 0px #d9d9d9;
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
          height:18em;
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
    </head>
    <body>
      <div class='logo'>
        <div class="logo1">
          <img src="chelsea.png" />
        </div>
        <div class='tname'>
          Chelsea
        </div>
      </div>
      <div class="header1">
        <ul>
        <li><a href='#squads' class="tabs" onclick="tab(event,'squads')">Squads</a></li>
        <li><a href='#news' class="tabs"  onclick="tab(event,'news')">News</a></li>
        <li><a href='#results' class="tabs"  onclick="tab(event,'results')">Results</a></li>
        <li><a href='#fixtures' class="tabs"  onclick="tab(event,'fixtures')">Fixtures</a></li>
        <li><a href='#leagueTable' class="tabs" onclick="tab(event,'leagueTable')" >League Table</a></li>
      </ul>
      </div>
      <div class="contents" id="squads">
        <div class='squad'>
          <div class='sheader'>
            <p>Know Your Team</p>
          </div>

            <?php
            $mysqlip=new mysqli('localhost','root','','players');
            if($mysqlip->connect_error){
              die("Connection error".$mysqlip->connect_error);
            }
            $teamnamep="";
            $teamnamep=isset($_GET['teamname'])? $_GET['teamname'] : "";
             $queryp=("SELECT * FROM $teamnamep");
             $resultsq=$mysqlip->query($queryp);
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
    $mysqlip->close();
        ?>

        </div>
      </div>
      <div class="contents" id="news">
        <div class='header'>
          Latest News<br>
        </div>
        <div class='news'>
          <div class="n">
              Some bulshit about some player and his performences
          </div>
          <div class='h'>
              Some bulshit about some player and his performences
          </div>
          <div class="n">
              Some bulshit about some player and his performences
          </div>
          <div class='h'>
              Some bulshit about some player and his performences
          </div>
          <div class="n">
              Some bulshit about some player and his performences
          </div>
          <div class='h'>
              Some bulshit about some player and his performences
          </div>
          <div class="n">
              Some bulshit about some player and his performences
          </div>
          <div class='h'>
              Some bulshit about some player and his performences
          </div>
          <div class="n">
              Some bulshit about some player and his performences
          </div>
          <div class='h'>
              Some bulshit about some player and his performences
          </div>
      </div>
      <div class='header'>
        Transfer News<br>
      </div>
      <div class='news'>
        <div class="n">
            Some bulshit about some player and his performences
        </div>
        <div class='h'>
            Some bulshit about some player and his performences
        </div>
        <div class="n">
            Some bulshit about some player and his performences
        </div>
        <div class='h'>
            Some bulshit about some player and his performences
        </div>
        <div class="n">
            Some bulshit about some player and his performences
        </div>
        <div class='h'>
            Some bulshit about some player and his performences
        </div>
        <div class="n">
            Some bulshit about some player and his performences
        </div>
        <div class='h'>
            Some bulshit about some player and his performences
        </div>
        <div class="n">
            Some bulshit about some player and his performences
        </div>
        <div class='h'>
            Some bulshit about some player and his performences
        </div>
    </div>
        <div class='header'>
          <span>#</span>Trending
        </div>
        <div class='news'>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
      <div class="contents" id="results">
        <div class='last'>
          <div class='lheader'>
            <p>Last Match</p>
          </div>
          <div class='lcontent'>
            <?php
            $mysqli=new mysqli('localhost','root','','fixtures');
            if($mysqli->connect_error){
              die("Connection error".$mysqli->connect_error);
            }
            $teamname="";
            $teamname=isset($_GET['teamname']) ?$_GET['teamname'] :"chelsea";
            $query="SELECT * FROM $teamname";
            $team=0;
            $matchday=0;
            $resultr1=$mysqli->query($query);
            while($rtemp1=mysqli_fetch_assoc($resultr1)){
              if($rtemp1['HomeGoals']!=NULL){
             $matchday+=1;
             $teamtemp=preg_replace('/\s+/',"_",$rtemp1["HomeTeam"]);
             if(stripos($teamtemp,$teamname)!==false){
             $team=(int)$rtemp1['homeID'];
           }
           }
         }
            $rtemp=0;
            $resultr=$mysqli->query($query);
             while($rtemp1=mysqli_fetch_assoc($resultr) AND $rtemp<$matchday){
               if($rtemp1['HomeTeam']==NULL){
              $rtemp+=1;
            }
          }
            echo $rtemp1['HomeTeam'].'&nbsp&nbsp&nbsp'.$rtemp1['HomeGoals'].'-'.$rtemp1['AwayGoals'].'&nbsp&nbsp&nbsp'.$rtemp1['AwayTeam'];
        echo"</div>
        <div class='form'>
          <div class='fheader'>
            <p>Last Five matches".$team."</p>
          </div>";


          $resultres=$mysqli->query($query);
          $resultres1=$mysqli->query($query);
          $count1res=mysqli_num_rows($resultres);
          $st='\'win\'';
            echo "<div class='fcontent' id='fcn'>";

          $temp1=0;
          if(!$count1res==1){
            die("Connection error".$mysqli->connect_error);
          }
          while($temp=mysqli_fetch_assoc($resultres) AND $temp1<=$matchday){
            if($temp['HomeTeam']!=NULL AND $temp['HomeGoals']!=NULL){
              if($temp1>=$matchday-5){
            if($temp['homeID']==$team){
              if($temp['HomeGoals']>$temp['AwayGoals']){

                $st='\'win\'';
              }
              else if($temp['HomeGoals']<$temp['AwayGoals']){
                $st='\'loose\'';
              }
              else {
                $st='\'draw\'';
              }
            }
            else{
              if($temp['HomeGoals']<$temp['AwayGoals']){
                $st='\'win\'';
              }
              else if($temp['HomeGoals']>$temp['AwayGoals']){
                $st='\'loose\'';
              }
              else {
                $st='\'draw\'';
              }
            }
            echo"<div class=".$st."></div>";
          }
          $temp1+=1;
          }
        }



        echo"</div>
        <div class='results'>
          <div class='rheader'>
            <p>Previous Results</p>
          </div>
          <div class='rcontent'>";
              while($rowres=mysqli_fetch_assoc($resultres1)){
                if($rowres['HomeTeam']!=NULL AND $rowres['HomeGoals']!=NULL){

                echo "<div class='rall'><a href='#'>".$rowres['HomeTeam'].'  '.$rowres['HomeGoals'].' - '.$rowres['AwayGoals'].'  '.$rowres['AwayTeam'].'</a><br></div><br>';
              }
            }
      echo"
        </div>
        </div>
        </div>
        </div>
    </div>
      <div class='contents' id='fixtures'>
      <div class='fix'>
      <div class='fxheader'>
        <p>Next match</p>
      </div>
      <div class='fxcontent'>";
    $resultf=$mysqli->query($query);
     $fxtemp=0;
     while($ftemp1=mysqli_fetch_assoc($resultf) AND $fxtemp<=$matchday){
       if($ftemp1['HomeTeam']==NULL){
      $fxtemp+=1;
    }
  }
  echo $ftemp1['Date'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp '.$ftemp1['HomeTeam'].' '.'-'.' '.$ftemp1['AwayTeam'];


   echo"</div>
   <div class='up'>
   <div class='upheader'>
     <p>Upcoming Fixtures</p>
   </div>
   <div class='upcontent'>";
   while($ftemp1=mysqli_fetch_assoc($resultf)){
     if($ftemp1['HomeTeam']!=NULL){
       echo "<div class='fixall'><a href='#'>".$ftemp1['Date'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp '.$ftemp1['HomeTeam'].' '.'-'.' '.$ftemp1['AwayTeam'].'</a><br></div><br>';
  }
}
  $mysqli->close();
 ?>
   </div>
 </div>
</div>
      </div>
      <div class='contents' id='leagueTable'>
        <div class='table'>
          <div class='standings'>
              League Standings
          </div>
          <div class='columnNames'>
            <a href='#' class='rank'>Rank</a>
            <a href='#' class='team'>Team Name</a>
            <a href='#' class='match'>Matches Played</a>
            <a href='#' class='gf'>GF</a>
            <a href='#' class='ga'>GA</a>
            <a href='#' class='gd'>GD</a>
            <a href='#' class='point'>Points</a>
        </div>
        <div class='allteams'>
          <?php
          $mysqlif=new mysqli('localhost','root','','league');
          if($mysqlif->connect_error){
            die("Connection error".$mysqlif->connect_error);
          }
          $queryf="SELECT * FROM leaguetable";
          $resultt=$mysqlif->query($queryf);
          if(!mysqli_num_rows($resultt)){
            die("Connection failed".$mysqlif->connect_error);
          }
          while($rowt=mysqli_fetch_assoc($resultt)){
            if(!$rowt['rank']==NULL){
              echo "<div class='all'><a href='#' class='al r'>".$rowt['rank']."</a>"."<a href='#' class='al t'>".$rowt['team']."</a>"."<a href='#' class='al m'>".$rowt['matches']."</a>"."<a href='#' class='al f'>".$rowt['goalsFor']."</a>"."<a href='#' class='al a'>".$rowt['goalsAgainst']."</a>"."<a href='#' class='al d'>".$rowt['goalDifference']."</a>"."<a href='#' class='al p'>".$rowt['points']."</a>"."<br><br></div>";
            }
          }
            $mysqlif->close();
          ?>
        </div>
      </div>
    </div>
  </body>
  <script>
  function tab(event,even){
    var contents;
    var t;
    var i;
    contents=document.querySelectorAll('.contents');
    for(i=0;i<contents.length;i++){
      contents[i].style.display='none';
    }
    t=document.getElementsByClassName('tabs')
    for(i=0;i<t.length;i++)
      t[i].className=t[i].className.replace(' active','');
    document.getElementById(even).style.display='block';
    event.currentTarget.className+=' active';
    window.location.hash='#'.even;
  }
    var n1=document.getElementsByClassName('n');
    var i;
    for(i=0;i<n1.length;i++){
    n1[i].onclick=function(){
      this.classList.toggle('active');
      this.nextElementSibling.classList.toggle('show');
    }
  }
  var f1=document.getElementById('fcn');
  for(i=0;i<f1.children.length;i++){
    console.log("over");
    f1.children[i].addEventListener("mouseover",scale,false);
    f1.children[i].addEventListener("mouseout",scaleout,false);
  }
  function scale(e){

    e.currentTarget.style.transform="scale(1.5,1.5)";
  }
  function scaleout(e){
    e.currentTarget.style.transform="scale(1,1)";
  }
  </script>
  </html>
