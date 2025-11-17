function kutusRadio() {
    const pildid=[
        '../images/95.png',
        '../images/98.png',
        '../images/d.png'
    ];
    let b95b = document.getElementById("b95b");
    let b98b = document.getElementById("b98b");
    let d = document.getElementById("d");
    let valikKutus = document.getElementById("valikKutus");

    if(b95b.checked){
        valikKutus.src=pildid[0];
    }
    if(b98b.checked){
        valikKutus.src=pildid[1];
    }
    if(d.checked){
        valikKutus.src=pildid[2];
    }
}
function arvuta(kogus, hind){
    return(kogus*hind).toFixed(2);
    //toFixed - أ¼mardab 2 numbri peale koma
}
const pilt1Hind=1.62;
const pilt2Hind=1.63;
const pilt3Hind=1.43;
function arvutaPiltHind(){
    let hindKokku=document.getElementById("hindKokku");
    let number=document.getElementById("number");
    let b95b=document.getElementById("b95b");
    let b98b=document.getElementById("b98b");
    let d=document.getElementById("d");
    let button=document.getElementById("button");

    if(b95b.checked){
        hindKokku.innerHTML=arvuta(number.value,pilt1Hind)+" eurot";
    }
    if(b98b.checked){
        hindKokku.innerHTML=arvuta(number.value,pilt2Hind)+" eurot";
    }
    if(d.checked){
        hindKokku.innerHTML=arvuta(number.value,pilt3Hind)+" eurot";
    }
    hindKokku.style.backgroundColor="green";

}