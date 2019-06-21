/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function myFunction(name){
    if(name==''){
        alert("Please Fill");
    }
    else{
    
//    $.ajax({
//            url:"http://127.0.0.1/testHost/serverSide.php", //the page containing php script
//            type: "post", //request type,
//            dataType: 'json',
//           data: {registration: "success", name: "xyz", email: "abc@gmail.com"},
//            success:function(result){
//
//             console.log(result.abc);
//           }
//         });


//       var xhttp = new XMLHttpRequest();
//       xhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//            //      console.log(typeof this.responseText);
//            }
//        };
//       xhttp.open("GET", "http://127.0.0.1/testHost/serverSide.php?name="+name, true);
//       xhttp.send();

    $.ajax({
//        type: 'POST',url: "http://localhost/testhost/serverSide.php?f=insertData",data: {name: name},success: function(data1){ 
        type: 'POST',url: "http://localhost/testhost/serverSide.php",data: {name: name},success: function(data1){ 
       alert(data1);
       location.reload();


        } 
    }); 
   }
}
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "http://127.0.0.1/testHost/serverSide.php", true);
  xhttp.send();
  }


//window.location.href = "http://127.0.0.1/testHost/serverSide.php?testFunc()";

