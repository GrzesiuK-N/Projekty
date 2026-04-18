window.onload = function klik() {

    var obiekt_ustalony = new Date();

 y =  obiekt_ustalony.getMonth();
 const M12 = ["styczeń", "luty", "Marzec","Kwiecień","Maj","Czerwiec","Lipec","Sierpień", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien"];

document.getElementById('do_miesiecy').innerHTML =  M12[y];
document.getElementById('przycisk2').onclick = function () {
document.getElementById('przycisk2').onclick = klik;


}

}