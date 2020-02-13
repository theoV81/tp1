let els = document.getElementsByClassName("trigger");
Array.from(els).forEach(elements => {
  elements.addEventListener('click',makeRequest)
})


let xhr = new XMLHttpRequest();

function makeRequest(event) {
  event.preventDefault();


  var id = event.path[3].id.replace("id_","")

  let url = "update/" + id;



  xhr.onreadystatechange = updateDisplay;
  xhr.open('POST',url);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("closed=1");

  function updateDisplay(){

    if(xhr.readyState === XMLHttpRequest.DONE){

      console.log(xhr.responseText);

      let checkb = document.getElementsByClassName("trigger");
      let img = document.getElementById("td_"+ id);
      console.log(id + "test");
      img.innerHTML ="<center><img src='valider.png' border='0' class='imgstatus' height='30px' width='30px' /></center>";
      checkb.onclick = "";
      checkb.cursor = "preventDefault";
    }


  }



}
