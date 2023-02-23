$(document).ready(()=>{
    console.log("checker.js loaded");
    var ccnList = $("#ccnList");
    var cvvList = $("#cvvList");
    var deadList = $("#deadList");
    var showCvv = $("#showCvv");
    var lista_container = $("#lista_con");
    var lista_leb = $("#lista_leb");
    var amount_container = $("#amount_container");
    cvvList.hide();
    ccnList.hide();
    deadList.hide();
    

    var startbtn = $("#startbtn");
    var stopbtn = $("#stopbtn");
stopbtn.hide();
startbtn.click(()=>{
    startbtn.text("Wait checking...");
    setTimeout(()=>{
        startbtn.text("now ready for checking...");
    }, 1500);
    setTimeout(()=>{
        lista_leb.html("checking...");
        amount_container.css({visibility:"hidden", height:"1px"});
        // lista_container.css({visibility:"hidden", height:"1px"});
    startbtn.hide();
    stopbtn.show();
    stopbtn.text("stop checking...");
    }, 3000);
    
})

    showCvv.click(()=>{
        cvvList.slideToggle();
    })

    
})