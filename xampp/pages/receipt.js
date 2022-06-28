    var arr1 = JSON.parse(localStorage.getItem("localData"))
    console.log(arr1)

    var total=0;

    for(i = 0; i < arr1.length; i++){        
        var r = tbl.insertRow();
        var cell1 = r.insertCell();
        var cell2 = r.insertCell();
        var cell3 = r.insertCell();

        cell1.innerHTML = arr1[i].title;
        cell2.innerHTML = arr1[i].condition;
        cell3.innerHTML = arr1[i].price;
        total=total+parseFloat(arr1[i].price);
    }

    if(arr1.length>10)
    {total*=0.85;
        smy.innerHTML = "<br/>Discount = 15%";
    }
    else if(arr1.length>=5 && arr1.length<=10)
    {total*=0.95;
        smy.innerHTML = "<br/>Discount = 5%";
    }
    else
    {
        smy.innerHTML = "<br/>Discount = 0%";
    }
    
    if(total<=100)
    {total+=10
        smy.innerHTML += "<br/>Delivery Fee = RM 10";
    }
    else
    {        
        smy.innerHTML += "<br/>Delivery Fee = RM 0";
    }
    
   smy.innerHTML += "<br/>Total Price : RM "+total.toFixed(2);