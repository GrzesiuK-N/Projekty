window.onload = ()=>{
    tabela = document.getElementById("mnozenie")
    console.log(tabela)
    for(let i=1;i<=10;i++){
        row = document.createElement("tr")
        d = document.createElement("td")
        d.innerHTML = i
        row.appendChild(d)
        for(let j=1;j<=10;j++){
            d = document.createElement("td")
            d.innerHTML = i*j
            row.appendChild(d)
        }
        tabela.appendChild(row)
    }
}