window.onload = ()=>{document.getElementById("wys").onclick= ()=>{
    val = +document.getElementById('rodz').value;
    
    talia = []
    if ((val>=2)&(val<=10)){
        if (val<7){
            for(let i=0;i<=4;i++){
                talia.push(val+i)
            }
        }else{
            for (let i=val;i<(val-4);i--){
                talia.push(i)
            }
        }
    }else{
        alert("You moron! (2-10)")
    }
    document.getElementById("karta").innerHTML="twoja talia to: "+talia.join(", ")
}}