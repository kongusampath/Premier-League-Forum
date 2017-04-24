<!DOCTYPE html>
<html>
  <head>
    <style>
    @font-face {
    font-family: phil;
    src: url('philosopher.ttf');
    }
    @font-face {
    font-family: sname;
    src: url('sname.ttf');
    }
    body{
      background-image: url('backselect.jpg');
    }
    .heading{
      padding:2em 8em 2em 8em;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      font-family: phil;
      font-size: 1.6em;
    }
    .main{
      margin-left: 10%;
      margin-right: 10%;

    }
    .team{

      margin:1% 2% 1% 2%;
      text-overflow:hidden;
      float:left;
      background-position: center;
      background-size: cover;
      height:10em;
      width:10em;
    }
    .arsenal{
        background-image: url('arsenal.png');
    }
    .bourne{
        background-image: url('bourne.png');
    }
    .burnley{
        background-image: url('burnley.png');
    }
    .chelsea{
        background-image: url('chelsea.png');
    }
    .crystal{
        background-image: url('crystal.png');
    }

    .ever{
        background-image: url('everton.png');
    }
    .hull{
        background-image: url('hull.png');
    }
    .leic{
        background-image: url('leic.png');
    }
    .liv{
        background-image: url('liv.png');
    }
    .manc{
        background-image: url('manc.png');
    }
    .manu{
        background-image: url('manun.png');
    }
    .mid{
        background-image: url('middle.png');
    }
    .south{
        background-image: url('south.png');
    }
    .stoke{
        background-image: url('stoke.png');
    }
    .sunder{
        background-image: url('sunder.png');
    }
    .swansea{
        background-image: url('swansea.png');
    }
    .tot{
        background-image: url('tot.png');
    }
    .wat{
        background-image: url('watford.png');
    }
    .wba{
        background-image: url('wba.png');
    }
    .whu{
        background-image: url('westham.png');
    }
    .select{
      display: none;
      padding-top: 5em;
      text-align: center;
    }

    .select a{
      padding: 0.8em 0.8em 0.8em 0.8em;
      background-color: rgba(0, 0, 0, 0.5);
      text-decoration: none;
      font-family: sname;
      font-size: 0.7em;
      color: #f2f2f2;
      transition: padding 0.1s ease-in-out;

    }

    .select a:hover,.select a:focus{

      padding: 1em 1em 1em 1em;
      background-color: rgba(0, 0, 0, 0.8);
      color: solid white;
      box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 1);
    }
    .crystal a{
        font-size: 0.6em;
    }
    </style>
  </head>
  <body>
    <div class='heading'>
      Hello <?php echo $_GET['uname']; ?>,<br>You are just one step away from enjoying real ectasy of football experiences.<br>
      Here are the teams of Premier League in which your Favourite Team resides....<br><br>
    </div>
    <div class='main'>
    <div class='row1'>
      <div class='team arsenal'>
        <div class='select' id='arsenal'><a href='#'>Select Arsenal</a></div>
      </div>
      </div>
      <div class='row1'>
        <div class='team bourne'>
          <div class='select' id='bournemouth'><a href='#'>Select Bournemouth</a></div>
        </div>
        </div>
        <div class='row1'>
          <div class='team burnley' >
            <div class='select' id='burnley'><a href='#'>Select Burnley</a></div>
          </div>
          </div>
          <div class='row1'>
            <div class='team chelsea'>
              <div class='select' id='chelsea'><a href='#'>Select Chelsea</a></div>
            </div>
          </div>
            <div class='row1'>
              <div class='team crystal'>
                <div class='select' id='crystal_palace'><a href='#'>Select CrystalPalace</a></div>
              </div>
            </div>
              <div class='row2'>
                <div class='team ever'>
                  <div class='select' id='everton'><a href='#'>Select Everton</a></div>
                </div></div>
                <div class='row2'>
                  <div class='team hull'>
                    <div class='select' id='hull_city'><a href='#'>Select Hull City</a></div>
                  </div>
                  </div>
                  <div class='row2'>
                    <div class='team leic'>
                      <div class='select' id='leicester_city'><a href='#'>Select Leicester</a></div>
                    </div>
                    </div>
                    <div class='row2'>
                      <div class='team liv'>
                        <div class='select' id='liverpool'><a href='#'>Select Liverpool</a></div>
                      </div>
                      </div>
                      <div class='row2'>
                        <div class='team manc'>
                          <div class='select' id='manchester_city'><a href='#'>Select Man City</a></div>
                        </div></div>
                        <div class='row3'>
                          <div class='team manu'>
                            <div class='select' id='manchester_united'><a href='#'>Select Man United</a></div>
                          </div></div>
                          <div class='row3'>
                            <div class='team mid'>
                              <div class='select' id='middlesbrough'><a href='#'>Select Middlesbrough</a></div>
                            </div></div>
                            <div class='row3'>
                              <div class='team south'>
                                <div class='select' id='southampton'><a href='#'>Select Southampton</a></div>
                              </div>
                            </div><div class='row3'>
                              <div class='team stoke'>
                                <div class='select' id='stoke_city'><a href='#'>Select Stoke City</a></div>
                              </div>
                            </div>
                            <div class='row3'>
                              <div class='team sunder'>
                                <div class='select' id='sunderland'><a href='#'>Select Sunderland</a></div>
                              </div>
                            </div>
                            <div class='row4'>
                              <div class='team swansea'>
                                <div class='select' id='swansea'><a href='#'>Select Swansea</a></div>
                              </div>
                            </div>
                            <div class='row4'>
                              <div class='team tot'>
                                <div class='select' id='tottenham'><a href='#'>Select Tottenham</a></div>
                              </div>
                            </div><div class='row4'>
                              <div class='team wat'>
                                <div class='select' id='watford'><a href='#'>Select Watford</a></div>
                              </div>
                            </div><div class='row4'>
                              <div class='team wba'>
                                <div class='select'id='albion'><a href='#'>Select Albion</a></div>
                              </div>
                            </div>
                            <div class='row4'>
                              <div class='team whu'>
                                <div class='select' id='west_ham'><a href='#'>Select West Ham</a></div>
                              </div>
    </div>
  </div>
  <script>

  var a=document.querySelectorAll(".team");

  for(i=0;i<a.length;i++)
  {
    a[i].addEventListener('mouseover',change,true);
  }
  for(i=0;i<a.length;i++){
    a[i].children[0].children[0].addEventListener('click',goout,false);
  }
  function change(e)
  {
    e.target.children[0].style.display="block";
  }
  var t;
  function goout(e){
    t=String(e.target.parentNode.id);

    window.location.replace('team.php?teamname='+t);
  }
  </script>
  </body>
</html>
