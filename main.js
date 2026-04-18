tags = []

function φ(array) { 

    let ℵ = array.length,  Ψ;
    while (ℵ > 0) {
      Ψ = Math.floor(Math.random() * ℵ);
      ℵ--;
      [array[ℵ], array[Ψ]] = [
        array[Ψ], array[ℵ]];
    }
    return array
  }
  function weighting(ar){
    let l = {};
    let total = 0;
    let cue = [];
    for (let n of ar){
        v = metadata[n];
        cue.push(n)
        a = v['added_by'];
        c = v['view_count'];
        if (l[a]){
            if (c<(l[a][0]['view_count'])){
                l[a][2]=l[a][1];l[a][1]=l[a][0];l[a][0]=n}
            else if (c<(l[a][1]['view_count'])){
                l[a][2]=l[a][1];l[a][1]=n}
            else if (c<(l[a][2]['view_count'])){
                l[a][2]=n}
        }else{
            l[a] = {0:n,1:{'view_count':1/0},2:{'view_count':1/0}}
        }
    }
    
    for (const n in l) { 
        cue.push(l[n][0])
        cue.push(l[n][0])
        cue.push(l[n][1])
        cue.push(l[n][2])
    }
    return cue
}


function nextVid(){
    window.que_index = window.que_index+1
    if (que_index >= que.length){
        window.que = φ(weighting(que))
        window.que_index = 0

    }
    video_id = window.que[que_index]
    pplayer.cueVideoById(video_id)
    window.video_data = metadata[video_id]
    setTimeout(()=>{pplayer.playVideo();customizse()},1000)
    customizse()
}
function prev_Vid(){
    window.que_index = window.que_index-1
    if (que_index < 0){
        window.que_index = 0
        window.que = φ(que)
    }
    video_id = window.que[que_index]
    pplayer.cueVideoById(video_id)
    pplayer.playVideo()
    setTimeout(()=>{pplayer.playVideo();customizse()},1000)
    window.video_data = metadata[video_id]
} 
function pro_command(𐂦){
    if (𐂦.length!=0){
        𐂦.forEach(element => {
        elementar=element.split(".")
        if (+elementar[0]>window.ccc){
        element=elementar[1]
        window.ccc=elementar[0]
        if (element=="st"){
            window.pplayer = pplayer.pauseVideo()
        }
        if (element=="pl"){
            window.pplayer = pplayer.playVideo()
        }
        if (element==">"){
            nextVid()
        }
        if (element=="<"){
            pplayer.previousVideo()
            prev_Vid()
        }
        }
        });
    }
}
function req_command(){
    const xhttp = new XMLHttpRequest();
    
    xhttp.onload = function() {
        pro_command(this.response)
        }
    xhttp.open("GET", "./cue.php?gc", true);
    xhttp.setRequestHeader("Access-Control-Allow-Origin","*")
    xhttp.responseType = "json";

    xhttp.send();
}
function get_ccc(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        window.ccc = +this.response
        }
    xhttp.open("GET", "./cue.php?sup", true);
    xhttp.setRequestHeader("Access-Control-Allow-Origin","*")
    xhttp.responseType = "text";

    xhttp.send();
    }


function request_playlist(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        
        window.metadata = {}
        console.log(this.response)
        for (const key in this.response) {
            video = this.response[key]
            window.metadata[video["resourceId"]["videoId"]] = video
            window.metadata[video["resourceId"]["videoId"]] = {...JSON.parse(video['meta_data']),...video}
        }
        window.que = φ(weighting(Object.keys(metadata)))
        window.que_index = 0
        get_ccc()
        nextVid()
        nextVid()
        }
    xhttp.open("GET", "framwork/mytapi.php?pid="+window.pid+"&get", true);
    xhttp.setRequestHeader("Access-Control-Allow-Origin","*")
    xhttp.responseType = "json";

    xhttp.send();
}

function filter_data(){
    for (let i=0;i<tags.length;i++){
        element = tags[i]
        if (element[0]=="@"){ 
            return video_data['type']==element.slice(1)
        }
    }
    return false
}

function customizse(){
    nerd = document.getElementById('nerd');
    console.log(video_data,window.document.body)
    if (video_data['added_by']==="acidcave"){
        [...window.document.body.attributes].forEach(attr => document.body.removeAttribute(attr.name))
        window.document.body.toggleAttribute('acid')
    }else{
        [...document.body.attributes].forEach(attr => document.body.removeAttribute(attr.name))
        if( document.getElementById('motywy').value!=0){
            document.body.toggleAttribute(document.getElementById('motywy').value)
        }
    }
    if (video_data['Author']=="Windows95 Men"){
        [...document.body.attributes].forEach(attr => document.body.removeAttribute(attr.name))
        document.body.toggleAttribute('win95')
    }else{
        [...document.body.attributes].forEach(attr => document.body.removeAttribute(attr.name))
        if( document.getElementById('motywy').value!=0){
            document.body.toggleAttribute(document.getElementById('motywy').value)
        }
    }
    /**
    if ((video_data['added_by']=='Glix')&(!nerd.attributes['open'])){
        document.getElementById("arigato").attributes['src'].value = "./tp.asset/ad/plakatreklama.png"
        
        document.getElementById("spoilers").checked ? 0 : document.getElementById("arigato").style.display = 'block'
    }else{
        document.getElementById("arigato").attributes.src= ""
        document.getElementById("arigato").style.display = 'none'
    }
    */
    let test = filter_data()
    if (test){
        console.log(video_data)
        nextVid()
    }
    
    nerd_data = "<table><thead><th>Property<th/><th>Value<th/>"

    for (const col in video_data) {
        nerd_data += "<tr><td>" + col + "<td/><td>" + video_data[col] + '</td><tr/>'
    }
    nerd_data+='<table/>'
    nerd.innerHTML = nerd_data
}

function inc(video_id){
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function(res) {
        window.metadata[video_id]['view_count']++
        console.log('inc:',metadata[video_id]['view_count'],res.currentTarget.response)
        //document.getElementById("vcount").innerHTML = metadata[video_id]['view_count']   
    }
    xhttp.open("POST", "./cue.php?add="+video_id, true);
    xhttp.setRequestHeader("Access-Control-Allow-Origin","*")
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.responseType = "text";

    xhttp.send(`add=${video_id}`);
}

function brailing(x){
    digits = []
    console.log(x)
    while(x>=2){
        const remainder = x % 2;
        x = Math.floor(x / 2);
        digits.push(remainder)
    }
    digits.push(x)
    sum = 0
    i = 0
    while (digits.length>0){
        sum+= (2**i)  *digits.pop()
        i++
    }
    data = (sum<=255) ? String.fromCharCode(0x2800+sum): String.fromCharCode(0x28FF) + brailing(sum-256)
    return data
}


request_playlist()

window.video_data = false
video_id = "89GtYMXRAzc"


addEventListener("mousemove", (event) => {
    document.getElementById('key').innerHTML = event.movementX +';' +event.movementY
})