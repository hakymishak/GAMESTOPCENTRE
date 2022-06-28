<!DOCTYPE html>
<html lang="en">
  </html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="gamestopcenter.css">
  <script defer src="games.js"></script>
</head>


<body style="background-color: rgb(232, 227, 244);">
  <style>
    h3{text-align: center;}
    h5{text-align: center;}
    h2{text-align: center;}

    #myBtnContainer{
      display: flex;
      width: auto;
      justify-content: center; 
    }
  </style>
 <div><center><img src="gamespic/logo.png"</center></div>

<h5 style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(113, 76, 76);">Here are categories of games you get to purchase</h5>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nin')"> Nintendo</button>
  <button class="btn" onclick="filterSelection('ps')"> Playstation</button>
  <button class="btn" onclick="filterSelection('xb')"> Xbox </button>
</div>

<div class="container">

  <div class="card" id="item1"><img src="gamespic/ninxeno.jpg"
    style="width: 200px;height: 300px;">
    <div class="title">Xenoblade 2</div>
  <div class="price">250.00</div>
  <div>
    <label>Condition:</label>
      <select>
        <option value="1">DIGITAL</option>
        <option value="0">PHYSICAL</option>
      </select>
   
  </div>
  <button onclick="addtocart(item1)">Add To Cart</button></div>

  <div class="card" id="item2"><img src="gamespic/xboxforza.jpg"
    style="width: 200px;height: 300px;">
    <div class="title">Forza Horizon</div>
  <div class="price">300.00</div>
  <div>
    <label>Condition: </label>
      <select>
        <option value="1">DIGITAL</option>
        <option value="0">PHYSICAL</option>
      </select>
 
  </div>
  <button onclick="addtocart(item2)">Add To Cart</button></div>


  <div class="card" id="item3"><img src="gamespic/cod.jpg"
    style="width: 200px;height: 300px;">
    <div class="title">Call of Duty MW</div>
  <div class="price">180.00</div>
  <div>
    <label>Condition:  </label>
      <select>
        <option value="1">DIGITAL</option>
        <option value="0">PHYSICAL</option>
      </select>
  </div>
  <button onclick="addtocart(item3)">Add To Cart</button></div>

  <div class="card" id="item4"><img src="gamespic/ft.jpg"
    style="width: 200px;height: 300px;">
    <div class="title">Fornite Endgame</div>
  <div class="price">20.00</div>
  <div>
    <label>Condition: </label>
      <select>
        <option value="1">DIGITAL</option>
        <option value="0">PHYSICAL</option>
      </select>
  </div>
  <button onclick="addtocart(item4)">Add To Cart</button></div>

  <div class="card" id="item5"><img src="gamespic/psspider.jpg"
    style="width: 200px;height: 300px;">
    <div class="title">Spider-man</div>
  <div class="price">250.00</div>
  <div>
    <label>Condition: </label>
      <select>
        <option value="1">DIGITAL</option>
        <option value="0">PHYSICAL</option>
      </select>
  </div>
  <button onclick="addtocart(item5)">Add To Cart</button></div>

</div>

<div class="cart" id="cart">
  <div class="title">CART</div>
  <div id="title">                
  </div>
  <br/><button onclick="checkout()">Checkout</button>            
</div>

</body>
</html>