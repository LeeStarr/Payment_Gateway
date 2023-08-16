//buttons and pages
const page1 = document.querySelector(".personalInfo");
const page2= document.querySelector('.payment');
const cont=document.querySelector('.cont');
const prev=document.querySelector('.prev');
const checkout=document.querySelector(".checkout");
const form=document.querySelector(".pay");

//spans
const span1= document.querySelector("#span1");
const span2= document.querySelector("#span2");

//All Inputs
const name= document.querySelector("#name");
const sur=document.querySelector("#surname");
const idtype=document.querySelector("#idtype");
const idvalue=document.querySelector("#idvalue");
const cell=document.querySelector("#cell");
const housenum=document.querySelector("#housenum");
const address=document.querySelector("#address");
const suburb=document.querySelector("#suburb");
const code=document.querySelector("#code");
const city=document.querySelector("#city");
const cardname= document.querySelector("#cardName");
const cardnum= document.querySelector("#cardNum");
const exp= document.querySelector("#exp");
const cvv= document.querySelector("#cvv");

//validation functions
function checkName(){
    var errorMsg=document.querySelector("#nameError");
    var input=name.value.trim();
    if (input==""){
        errorMsg.innerHTML="This field is manditory"
        name.style.borderBottom="red 2px solid";
        return false;
    }else{
        name.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkSur(){
    var input=sur.value.trim();
    var errorMsg=document.querySelector("#surError");
    if (input==""){
        sur.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else{
        sur.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkID(){
    var input=idvalue.value.trim();
    var errorMsg=document.querySelector("#idvalueError");
    if (input==""){
        idvalue.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else if((option==1) && (input.length<13 || input.length>13 || !input.match(/^\d+$/))){
        idvalue.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="Must consist of 13 digits only"
        return false;
    }
    else{
        idvalue.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }

}

function checkCell(){
    var input=cell.value.trim();
    var errorMsg=document.querySelector("#cellError");
    if (input==""){
        cell.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else if(!input.match(/^0[6-8][0-9]{8}$/)){
        cell.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="Invalid cell phone number"
        return false;
    }
    else{
        cell.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
       
    }
}
function checkHouseNum(){
    var input=housenum.value.trim();
    var errorMsg=document.querySelector("#housenumError");
    if (input==""){
        housenum.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else{
        housenum.style.borderBottom="2px solid #bbb";
       errorMsg.innerHTML="";
       return true;
    }

}
function checkAddress(){
    var input=address.value.trim();
    var errorMsg=document.querySelector("#addressError");
    if (input==""){
        address.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else{
       address.style.borderBottom="2px solid #bbb";
       errorMsg.innerHTML="";
       return true;
    }
}

function checkSuburb(){
    var input=suburb.value.trim();
    var errorMsg=document.querySelector("#suburbError");
    if (input==""){
        suburb.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else{
        suburb.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkCode(){
    var input=code.value.trim();
    var errorMsg=document.querySelector("#codeError");
    if (input==""){
        code.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else if(input.length< 4){
        code.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="Must be 4 digits long"
        return false;
    }
    else{
        code.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkCity(){
    var input=city.value.trim();
    var errorMsg=document.querySelector("#cityError");
    if (input==""){
        city.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory";
        return false;
    }else{
        city.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }

}

function checkCardName(){
    var errorMsg=document.querySelector("#cardnameError");
    var input=cardname.value.trim();
    if (input==""){
        errorMsg.innerHTML="This field is manditory"
        cardname.style.borderBottom="red 2px solid";
        return false;
    }else{
        cardname.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkCardNum(){
    var input=cardnum.value.trim();
    var errorMsg=document.querySelector("#cardnumError");
    if (input==""){
        cardnum.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else if(input.length< 19){
        cardnum.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="Must be 16 digits long"
        return false;
    }else{
        cardnum.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkExp(){
    var input=exp.value.trim();
    var errorMsg=document.querySelector("#expError");
    if (input==""){
        exp.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else if(input.length< 7){
        exp.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="Invalid input"
        return false;
    }else{
        exp.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }
}

function checkCVV(){
    var input=cvv.value.trim();
    var errorMsg=document.querySelector("#cvvError");
    if (input==""){
        cvv.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="This field is manditory"
        return false;
    }else if(input.length< 3){
        cvv.style.borderBottom="red 2px solid";
        errorMsg.innerHTML="Must be 3 digits long"
        return false;
    }
    else{
        cvv.style.borderBottom="2px solid #bbb";
        errorMsg.innerHTML="";
        return true;
    }

}
//On input functions
name.addEventListener("input",()=>{
    checkName();

})

sur.addEventListener("input",()=>{
   checkSur();

})

var option=0;

idvalue.addEventListener("input",()=>{
    checkID();
})

idtype.addEventListener("change", ()=>{
    option=idtype.selectedIndex;
    checkID();

})

cell.addEventListener("input",()=>{
   checkCell();

})

housenum.addEventListener('input',()=>{
    checkHouseNum();
})
address.addEventListener("input",()=>{
   checkAddress();
})

suburb.addEventListener("input",()=>{
   checkSuburb();
})

code.addEventListener("input",()=>{
    checkCode();

})

city.addEventListener("input",()=>{
    checkCity();
})

cardname.addEventListener("input",()=>{
    checkCardName();

})

cardnum.addEventListener("input",()=>{
    checkCardNum();
})

exp.addEventListener("input",()=>{
    checkExp();
})

cvv.addEventListener("input",()=>{
    checkCVV();
})

// Page Transistions
cont.addEventListener('click',()=>{

    if( checkName()==true && checkSur()==true && checkID()==true && checkCell()==true && checkHouseNum()==true && checkAddress()==true && checkSuburb() && checkCode()==true &&  checkCity()==true){
        page1.style.transform=" translateX(-700px)";
        page2.style.transform="translateX(0)";
        cont.style.transform=" translateX(-700px)";
        prev.style.transform="translateX(0)";
        span1.style.backgroundColor="#1c69d4";
        span2.style.color="#1c69d4"
        span2.style.border="#1c69d4 2px solid"
        document.documentElement.scrollTop = 0;
    }
    
})

prev.addEventListener('click',()=>{
    page1.style.transform=" translateX(0)";
    page2.style.transform="translateX(700px)";
    cont.style.transform=" translateX(0)";
    prev.style.transform="translateX(700px)";
    span1.style.backgroundColor="#fff";
    span2.style.color="black"
    span2.style.border="silver 2px solid"

})

checkout.addEventListener("click",()=>{
    if(checkCardName()==true && checkCardNum()==true && checkExp()==true && checkCVV()==true){
        form.submit();
    }
})

    


