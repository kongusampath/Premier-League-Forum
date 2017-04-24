<!DOCTYPE html>
  <html>
    <head>
      <style>
      @font-face {
      font-family: rlb;
      src: url('Raleway-Black.ttf');
      }
      @font-face {
      font-family: rlt;
      src: url('Raleway-Thin.ttf');
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
      body{
        background-color: #f2f2f2;

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

      </style>
    </head>
    <body>
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

    </body>
    <script>
      var n1=document.getElementsByClassName("n");
      var i;
      for(i=0;i<n1.length;i++){
      n1[i].onclick=function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
      }
    }
    </script>
  </html>
