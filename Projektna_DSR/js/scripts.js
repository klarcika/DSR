function preveri(){
    try {
if(JSON.parse(sessionStorage.getItem("registriran_uporabnik"))==null){
    document.getElementById("uporabnik").hidden=true
    console.log("dela")
}
else{
    document.getElementById("uporabnik").hidden=false
    console.log(JSON.parse(sessionStorage.getItem("registriran_uporabnik")))
}
    }catch(err){
        console.log("ne dela")
    }
}
