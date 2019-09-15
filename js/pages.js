function checkamount(){
    var amount=parseInt(document.getElementById('amount').value);
    var ok=true;
    if(amount<=500){
        alert("The amount must be 500 and above");
        document.getElementById("amount").style.borderColor = "#E34234";
        ok=false;
    }
    else{
        
    }
    return ok;
}
