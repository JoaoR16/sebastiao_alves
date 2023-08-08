function esperar(){
    setTimeout(moverEAbrir,750);
}

function moverEAbrir(){
    $("#livros").dropdown("toggle");
}

function voltarAtras(){
    history.back()
}

function alterSaberMais($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/sabermais1.svg"){
        butao.setAttribute("src","./imgs/sabermais2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/sabermais1.svg");
    }

}



function alterFacebook($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/facebook1.svg"){
        butao.setAttribute("src","./imgs/facebook2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/facebook1.svg");
    }

}

function alterInsta($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/instagram1.svg"){
        butao.setAttribute("src","./imgs/instagram2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/instagram1.svg");
    }

}

function alterLinkedin($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/linkedin1.svg"){
        butao.setAttribute("src","./imgs/linkedin2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/linkedin1.svg");
    }

}


function alterVoltarAtras($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/voltar1.svg"){
        butao.setAttribute("src","./imgs/voltar2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/voltar1.svg");
    }
}


function alterSetaDrt($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/setadireita1.svg"){
        butao.setAttribute("src","./imgs/setadireita2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/setadireita1.svg");
    }
}

function alterSetaEsq($id){
    let butao = document.getElementById($id);
    let atributo = butao.getAttribute("src");

    if(atributo == "./imgs/setaesquerda1.svg"){
        butao.setAttribute("src","./imgs/setaesquerda2.svg");
    }
    else{
        butao.setAttribute("src","./imgs/setaesquerda1.svg");
    }
}

function fazerScroll(){
        document.getElementById("scroll").scrollIntoView();
}
