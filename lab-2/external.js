let cropName="Rice"
let croptype="Seasonal"
let soilmoisture=30
let growthstage="vagetative"
let sowingDate="2026-01-10"
let harvestDate="2025-05-18"
const farmername="Ramanjaneyulu"
console.log(cropName)
function showmessage(){
    document.getElementById("output").innerText="function declaration executed";
};
const calculateyield=function(){
    let yield=getcropyield(10,5);
    document.getElementById("output").innerText="Estimated yield is "+yield;
};
const changetitle=()=>{
    document.getElementById("title").innerText="Smart Agriculture - Crop Management";
};
function getcropyield(area,productivity){
    return area*productivity;
};
function waterequired(cropcount){
    return cropcount*20;
};
function testfunctions(){
    let ytest=getcropyield(15,4);
    let wtest=waterequired(50);
    document.getElementById("output").innerText="Test yield: "+ytest+" Test water required: "+wtest;
};
function showalert(){
    alert("soil moisture is low start irrigation");
};
function confirmirrigation(){
    let result=confirm("do you want to start irrigation?");
    if(result==true){
        alert("Irrigation started");
    }
    else{
        alert("Irrigation cancelled");
        
    }
};
function entercrop(){
    let cropname=prompt("enter crop name");
    if(cropname!=null && cropname!=""){
        alert(cropname)  
    }
    else{
        alert("no crop name entered")
    }
}