$(document).ready(() => {
    
    var hyper = new Hyperbot({ timeOut: 5000, runCallBacks: true });
  
    hyper.log(`
  ┏━━━┳┓╋╋╋╋╋╋╋┏┓╋╋╋╋╋╋╋┏━━┓╋╋╋╋╋┏━━┓
  ┃┏━┓┃┃╋╋╋╋╋╋╋┃┃╋╋╋╋╋╋╋┃┏┓┃╋╋╋╋╋┃┏┓┃
  ┃┃╋┗┫┗━┳━━┳━━┫┃┏┳━━┳━┓┃┗┛┗┳┓╋┏┓┃┗┛┗┳┳━━┳┓┏┓┏┳━━┓
  ┃┃╋┏┫┏┓┃┃━┫┏━┫┗┛┫┃━┫┏┛┃┏━┓┃┃╋┃┃┃┏━┓┣┫━━┫┗┛┗┛┃┏┓┃
  ┃┗━┛┃┃┃┃┃━┫┗━┫┏┓┫┃━┫┃╋┃┗━┛┃┗━┛┃┃┗━┛┃┣━━┣┓┏┓┏┫┏┓┃
  ┗━━━┻┛┗┻━━┻━━┻┛┗┻━━┻┛╋┗━━━┻━┓┏┛┗━━━┻┻━━┛┗┛┗┛┗┛┗┛
  ╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋┏━┛┃
  ╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋┗━━┛
    `);
    console.log("checker.js loaded");
    var hyperCCSList = $("#message");
    var ccnList = $("#ccnList");
    var cvvList = $("#cvvList");
    var deadList = $("#deadList");
    var amount = $("#amount");
    var showCvv = $("#showCvv");
    var showCcn = $("#showCcn");
    var showDead = $("#showDead");
    var progressBar = $("#hyper_progress");
// progressBar.hide();
    var saveCvv = $("#saveCvv");
    var saveCcn = $("#saveCcn");
    saveCvv.hide();
    saveCcn.hide();

    var lista_container = $("#lista_con");
    var lista_leb = $("#lista_leb");
    var amount_container = $("#amount_container");
    cvvList.hide();
    ccnList.hide();
    deadList.hide();
    showCvv.click(()=>{
        cvvList.slideToggle();
    });
    showCcn.click(()=>{
        ccnList.slideToggle();
    });
    showDead.click(()=>{
        deadList.slideToggle();
    });

    var startbtn = $("#startbtn");
    var stopbtn = $("#stopbtn");
    stopbtn.hide();
  
    startbtn.click(() => {
      startbtn.html("Please wait...");
      start_hyper();
    });

    async function start_hyper(timeOut = 500) {
      var getAmount = !amount.val() ? 0.8 : amount.val();
      var skkey = $("#skkey").val();
      var linha = hyperCCSList.val();
      var linhastart = linha.split("\n");
      var total = linhastart.length;
      
      var getsk = !skkey ? "nonsk" : skkey;
      var ap = 0;
      var ed = 0;
      var rp = 0;
      
void 0 === Array.prototype.sameAs && (Array.prototype.sameAs = function () {
  for (let s = 1; s < this.length; s++)
      if (this[s].startsWith(this[0].slice(0, 6))) return !0;
  return !1
});
const is_generated = s => null !== s ? s.sameAs() : null;
var getccList = linha.match(/(\d{16,18})[\/\s:|]*?(\d\d)[\/\s|]*?(\d{2,4})[\/\s|-]*?(\d{3,4})/gm);
const json= {is_generated:is_generated(getccList), bin_found:getccList[0].slice(0, 6)};
const is_gen =is_generated(getccList);

      if (!total) {
        notify.error("Please add a cc!", "", { duration: 5000 });
      }else if(total <= 2000){
        // if(is_gen === true){
        //   window.location.replace("./checker?is_generated=true&recheck=true")
        // }
      linhastart.forEach(function (value, index) {
        setTimeout(function () {
          $.ajax({
            url:
              "../api/non.php?lista=" +
              value +
              "&amount=" +
              getAmount +
              "&skkey=" +
              getsk,
            type: "GET",
            async: true,
            success: function (resultado) {
               if (resultado.match("#CVV")) {
                removelinha();
                ap++;
                aprovadas(resultado + "");
                notify.success(resultado, "", { duration: 3000 });
              } else if (resultado.match("#CCN")) {
                removelinha();
                ed++;
                edrovadas(resultado + "");
              } else {
                removelinha();
                rp++;
                reprovadas(resultado + "");

              }
  
              $("#totalCount").html(total);
              var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
              $("#cvvCount").html(ap);
              $("#ccnCount").html(ed);
              $("#deadCount").html(rp);
              $("#totalChecked").html(fila);
              $("#cLive2").html(ap);
              $("#cWarn2").html(ed);
              $("#cDie2").html(rp);
  
              var progress = (fila / total) * 100;
  
              if (parseInt(ap) !== 0 && progress === 100) {
                saveCvv.show();
  
                saveCvv.click(async () => {
                  
                    var chargedData = $("#cvvList").text();
                    return hyper.saveFile({
                      fileName: "x" + ap + "_KING_cvv",
                      fileExten: "txt",
                      fileData: [
                        "Powered by Realm's Checker\n--------------\n" +chargedData.replaceAll("-", "\n"),
                      ],
                      saveData: true,
                    });
                  
                });
              }
  
              if (parseInt(ed) !==0 && progress === 100) {
                saveCcn.show();
  
                saveCcn.click(async () => {
                
                    var ccnData = $("#ccnList").text();
  
                    return hyper.saveFile({
                      fileName: "x" + ed + "_KING_ccn",
                      fileExten: "txt",
                      fileData: [
                        "Powered by Realm's Checker\n--------------\n" + ccnData.replaceAll("-", "\n"),
                      ],
                      saveData: true,
                    });
                  
                });
              }

              progressBar.css({"width":`${progress.toFixed(0)+"%"}`, height:"3px"});
              progressBar.addClass("animate__animated animate__lightSpeedInLeft")
              var process =
                "Processing..." +
                progress.toFixed(0) +
                "%";
              startbtn.html(process);
              startbtn.addClass(" animate__animated animate__flip ");
              if (progress === 100) {
                startbtn.css({ color: "#0d8f3b", background: "#0eab450d" });
                startbtn.html("Checking completed!");
               setTimeout(()=>{
                startbtn.html("Loading...");
               }, 1500);
               setTimeout(()=>{
                   startbtn.hide();
                   stopbtn.show();
                   stopbtn.html("Reload checker");
               }, 5500);
               stopbtn.click(()=>{
                window.location.reload();
            });
                // $("h2.hyper_title").addClass(
                //   " animate__animated animate__flip animate__delay-2s "
                // );
               
                
              }
            },
          });
        }, timeOut * index);
      });
    }else{
      window.location.replace("./checker?limit=reached&recheck=true");
    }
    }
    
    function aprovadas(str) {
      cvvList.append(str + "<br>");
    }
    function reprovadas(str) {
      deadList.append(str + "<br>");
    }
    function edrovadas(str) {
      ccnList.append(str + "<br>");
    }
    function removelinha() {
      var lines = hyperCCSList.val().split("\n");
      lines.splice(0, 1);
      hyperCCSList.val(lines.join("\n"));
    }
  });