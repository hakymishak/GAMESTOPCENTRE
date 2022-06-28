localStorage.clear();
var arr=new Array();
var str = localStorage.getItem("localData");
    if (str!= null)                
    {arr = JSON.parse(str);}
    var addItemId = 0; 
    
    function addtocart(item){
        addItemId += 1;
        var selectedItem = document.createElement('div');
        selectedItem.classList.add('cartImg'); 
        selectedItem.setAttribute('id', addItemId);
        var img = document.createElement('img');
        img.setAttribute('src',item.children[0].currentSrc);
        var title = document.createElement('div');
        title.innerText=item.children[1].innerText;
        var name=item.children[1].innerText;
        var price = document.createElement('div');
        price.innerText=item.children[2].innerText;
        var pr=item.children[2].innerText;
        var label = document.createElement('div');
        label.innerText=item.children[3].children[0].innerText;
        var select = document.createElement('span');
        select.innerText=item.children[3].children[1].value;
        var condition=item.children[3].children[1].value;
        label.append(select);
        var cartItems = document.getElementById('title');
        selectedItem.append(img);
        selectedItem.append(title);                
        selectedItem.append(price);
        selectedItem.append(label);
        cartItems.append(selectedItem);    
        save(name, condition, pr);         
        }
        
    function save(name, condition, pr){  
        arr.push(
            {
                title:name,
                condition:condition,
                price:pr
            }
            );
            localStorage.setItem("localData", JSON.stringify(arr));
            }

    function checkout() {
        if(localStorage.getItem("localData")==null){
            alert('Please select a game');
        }
        else{
            window.location.href="checking.html";
        }
    }
