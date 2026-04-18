

<!DOCTYPE html>
<html>
  <head>
    <base href="https://adegdansk.pl/echo/">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet" href="tp.asset/css">
    <script>
      <?php
      if (isset($_GET["pid"])) echo "window.pid =\"" . $_GET["pid"] . "\";"
      ?>
    </script>
    <script src="tp.asset/js"></script>
  </head>
  <body>
    <span id="key">{placeholder}</span>
    <div id="nerd"></div>
    <div id="window">
    <h1 id="what" >Techn<span onclick="if (this.innerHTML=='!'){this.innerHTML='i'}else{this.innerHTML='!'}">i</span>player</h1>
    <div >
    aktualnie grane: <span class="spoiler" id="nazwa"></span><br/> 
    postęp: <span id="dur"></span>
    dodano przez: <span class="spoiler" id="author"></span> <br/>
    odtworzenia: <span class="spoiler" id="vcount"></span>
    </div>




    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>
    <br> 
    <!--controlki-->
    <button onclick="nextVid()">skip</button>
    <button id="stop" hidden onclick="
    console.log(window.clickcount)
    if (!window.clickcount){
      window.clickcount=1;
      window.eventy = {0:true}
    }else{
      window.clickcount+=1;
    }
    this.innerHTML = 'stop ' + window.clickcount + '/1000'
    if (window.eventy[window.clickcount]){
      return
    }
    if (window.clickcount==20){
      window.eventy[window.clickcount]=true
      alert('stop!')
    }
    if (window.clickcount==34){
      window.eventy[window.clickcount]=true
      alert('Why?!')
    }
    if (window.clickcount==55){
      window.eventy[window.clickcount]=true
      alert('Nie pozwole zatrzymać!')
    }
    if (window.clickcount==100){
      window.eventy[window.clickcount]=true
      alert('Nie znudziło ci się?')
    }
    if (window.clickcount==450){
      window.eventy[window.clickcount]=true
      alert('To się nazywa cierpliwość')
    }
    if (window.clickcount==1000){
      window.eventy[window.clickcount]=true
      alert('Wiesz że to tylko esteregg prawda?')
    }
    if (window.clickcount==1001){
      window.eventy[window.clickcount]=true
      alert('teraz to już przesadziłeś!')
      if (!window.explode){
        setInterval(()=>{window.clickcount-=5;this.innerHTML = 'stop ' + window.clickcount + '/1000'},1500)
        window.explode=true
      }
    }
    if (window.clickcount==2137){
      window.eventy[window.clickcount]=true
      console.log('o panie!')
      metadata['_o9mZ_DVTKA'] = {
        'added_by':'Adolf',
        'Nazwa':'Barka 2137',
      }
      window.que = ['_o9mZ_DVTKA']
      nextVid()
    }
    if (window.clickcount==2140){
      alert('oddać ci inną muzykę?')
      window.eventy[window.clickcount]=true
    }
    if (window.clickcount==2500){
      window.eventy[window.clickcount]=true
      window.que = Object.keys(metadata)
      window.que = φ(que)
      nextVid()
    }
    if (window.clickcount==5000){
      alert('serius cometment!')
      window.eventy[window.clickcount]=true
      document.getElementById('what').style.color = 'gold'
      
    }
    if (window.clickcount==10000){
      alert('no i dziura się powiekszyła...')
      window.eventy[window.clickcount]=true
      setInterval(()=>{window.clickcount-=5;this.innerHTML = 'stop ' + window.clickcount + '/1000'},1500)
    }
    if (window.clickcount==424242){
      window.eventy[window.clickcount]=true
      alert('naprawdę ci zależy co? dobrze zatrzymam wideo... jak dojdziesz do 1000000!')
    }
    if (window.clickcount==1000000){
      alert('mam nadzieje że było warto!')
      window.eventy[window.clickcount]=true
      pplayer.pauseVideo()
    }
    ">stop</button>
    <script>
      console.log(42)
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          origin: "https://dobraedukacja.edu.pl/"
        });
      }
      
      function 𐂂(){
        window.que = φ(weighting(Object.keys(metadata)))
        window.que_index = 0
        get_ccc()
        nextVid()
      }
      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        console.log("done loading")
        window.pplayer=event.target
        pplayer.loadPlaylist({listType:"playlist",list:"PLseEB4y99wAYKLQILDz3V3mAmNulxfQ9U",loopPlaylists:true})
        setInterval(()=>{
          document.getElementById("dur").innerHTML = "" +  Math.round((pplayer.getCurrentTime()/pplayer.getDuration()*100))+"%";
          req_command();
          if (pplayer.getPlayerState()==-1){pplayer.playVideo()}},1000)
        setTimeout(𐂂,2500)
        console.log(pplayer)
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var not_done = true;
      lastState = null
      function onPlayerStateChange(event) {
        window.video_data = metadata[video_id]
        if (video_data['autor']==false){
          nextVid()
        }
        customizse()
     /*-1 – unstarted (nie uruchomiono)
        0 – ended (zakończono)
        1 – playing (odtwarzanie)
        2 – paused (wstrzymano)
        3 – buffering (buforowanie)
        5 – video cued (film został wskazany)*/
  
        document.getElementById("nazwa").innerHTML = (video_data['Nazwa'] || video_data['title']) + (video_data['Autor'] ? ' - ' + video_data['Autor'] : '')
        document.getElementById("author").innerHTML = video_data['added_by']
        document.getElementById("vcount").innerHTML = video_data['view_count']
        if (pplayer.getVideoData().errorCode){
            console.log(pplayer.getVideoData().errorCode)
            console.log(pplayer.getVideoData())
            nextVid()
        }

        if (player.getPlayerState() == 0 ) {
          last_vid = video_id
          nextVid()
          inc(last_vid);
        }
    }
    </script>
  </div>
  <input type="range" min="0" max="100" onchange="pplayer.setVolume(this.value)">
  <img src="" id="arigato" style='display: none;object-fit:contain;' >
  <div id="ustawienia">
    <a href="./tp.asset/js">Odświerz js</a> <br>
    Informacje dla nerdów: <input type="checkbox" oninput="document.getElementById('nerd').toggleAttribute('open')"> <br/>
    Pokaż stop:<input type="checkbox" oninput="document.getElementById('stop').toggleAttribute('hidden')"> <br/>
    Motywy:<select id="motywy" onchange="body=document.getElementsByTagName('body')[0];[...body.attributes].forEach(attr => body.removeAttribute(attr.name));body.toggleAttribute(this.value)">
      <option value="0">Techniplayer 2022</option>
      <option value="w95">Windows 95</option>
      <option value="acid">Acid</option>
    </select>
    
  </div>
  <div id="filters">
    Pokaż ustawienia: <input type="checkbox" id="settings" onclick="if (this.checked){document.getElementById('ustawienia').toggleAttribute('open')}else{document.getElementById('ustawienia').toggleAttribute('open')}"> <br/>
    Wyłącz przeszkadzające utwory: <input type="checkbox" id="novoice" onclick="if (this.checked){tags.push('@voice')}else{tags.remove('@voice')}"> <br/>
    Anonymus: <input type="checkbox" id="spoilers" onchange="[...document.getElementsByClassName('spoiler')].forEach(e => this.checked ? e.style.display = 'none' : e.style.display = '' );document.getElementById('arigato').style.display='none';
    ;if((video_data['added_by']=='Glix')&(!this.checked)){
      document.getElementById('arigato').style.display = ''
    }">
  </div>
  </body>
</html>