"use strict";

var keyboard=document.getElementById('keyboard');
var txtPassword=document.getElementById('password');
var codigo="";

if(keyboard){
    keyboard.addEventListener('click',(event)=>{
        let target= event.target;
        if(target){
            let id=target.id;
            let classN=target.className;
            if(classN!='button-ok'){
                if(classN=='number' && id!=='c'){
                    codigo+=id;
                }else{
                    if(classN=='button-back'){
                        codigo=codigo.slice(0,-1);
                    }else{
                        codigo="";
                    }
                }
                txtPassword.value=codigo;
            }
        }
    });
}


var button_ok=document.getElementById('ok');
var div_mesas=document.getElementById('mesas');
var id=0;
if(div_mesas){
    div_mesas.addEventListener('click',(e)=>{
        let target=e.target;
        if(target){
            let className=target.className;
            if(className=='btn btn-mesa'){
                id=target.textContent;
                console.log(id);
            }
        }
    });
}

if(button_ok){
    button_ok.addEventListener('click',(e)=>{
        if(buscarMesa(codigo)){
            console.log('abrir mesa');
        }else{
            console.log('crear nueva mesa');
        }
        console.log(codigo);
        codigo='';
    });
}

function buscarMesa(codigo){
    var buttons_mesa=document.getElementsByClassName('btn-mesa');
    var encontrado=false;
    var mesa;
    var i=0;
    //console.log(buttons_mesa[5].innerText);
    while(!encontrado && i<buttons_mesa.length){
        if((buttons_mesa[i]).innerText==codigo){
            mesa=buttons_mesa[i];
            encontrado=true;
        }
        i++;
    }
    return encontrado;
}

//FETCH
var formularioBuscador=document.getElementById('buscador');


formularioBuscador.addEventListener('submit', (e)=>{
    e.preventDefault();
    var form=new FormData(formularioBuscador);
    console.log(form.get('DNI'));
});

formularioBuscador.addEventListener('keyup', (e)=>{
    e.preventDefault();
    var form=new FormData(formularioBuscador);
    //console.log(form.get('DNI'));
    fetch('https://mighty-ocean-96087.herokuapp.com/ClientesRokysController/filtrarFetch',{
        method: 'POST',
        body: form
    }).then(res => res.json())
        .then(data => {
            
            llenarTabla(data);
        });
});

function llenarTabla(data){
    var tablaCuerpo=document.getElementById('tbody');
    tablaCuerpo.innerHTML='';
    let i=0;
    //console.log(data);
    for(let iterator of data){
        tablaCuerpo.innerHTML+=`
            <tr>
                <td>${i}</td>
                <td>${iterator.nombres}</td>
                <td>${iterator.apellidos}</td>
                <td>${iterator.dni}</td>  
                <td>${iterator.tarjeta}</td>
                <td>${iterator.estado}</td>
            </tr>
        `
        i++;
    }
}
