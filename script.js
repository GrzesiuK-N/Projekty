window.onload=()=>{
    document.getElementById('oblicz').onclick=()=>{
        var ilosc=document.getElementById('ogloszenia').value;
        var newsletter = document.getElementById('newsletter').checked;
        console.log(ilosc,newsletter)
        let ans = document.getElementById('finish');
        if (ilosc>=51){
            ans.innerHTML = "Koszt ogłoszeń: " + ((2 - (0.20*newsletter))*ilosc) + 'PLN'
        }
        if (ilosc<=50){
            ans.innerHTML = "Koszt ogłoszeń: " + ((1 - (0.20*newsletter))*ilosc) + 'PLN'
        }
    }
}