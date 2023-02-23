$(document).ready(()=>{
    console.log("dash.js loaded.");
    var showCvv = $("#showCvv");
    var showCcn = $("#showCcn");
    var ccnList = $("#ccnList");
    var cvvList = $("#cvvList");
    showCvv.click(()=>{
        cvvList.slideToggle();
    });
    showCcn.click(()=>{
        ccnList.slideToggle();
    });
})