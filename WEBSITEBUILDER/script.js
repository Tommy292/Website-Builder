var select = document.getElementById("service"); 
var options = ["None", "Car's", "Hotel Booking", "Truck Delivery", "Car Inspection"]; 
for(let i=0;i<options.length;i++){
    var opt = options[i];
var el = document.createElement("option");
el.textContent = opt;
el.value = opt;
select.appendChild(el);
}
function getSubject(){
    var subjectTextBox = document.getElementById("subject");
f=localStorage.getItem("subject")
subjectTextBox.value=f

}

function Func(){
    var dropdown = document.getElementById("service");
    var selection = dropdown.value;
    var subjectTextBox = document.getElementById("subject");
    subjectTextBox.value = selection;
  }

function validation(){
var re = /\S+@\S+\.\S+/;
if(!re.test(myForm.Email.value)){
alert("You have entered wrong Email");
return false;
}
var phoneno = /^\d{10}$/;
if(!phoneno.test(myForm.PhoneNumber.value)){
    alert("You have entered wrong phone number");
    return false;
}

    }

function product(prdct){
    localStorage.setItem("subject",prdct);
}
