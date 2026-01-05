function successfull(){
    alert("form submitted SUCCESSFULL");
}
let username;
document.getElementById("mysubmitt").onclick=function(){
      username=document.getElementById("mytext").value;
      document.getElementById("myyh3").innerHTML=`Thankyou ${username}`; 
    
}
let cart = {
    items: [],
    totalPrice: 0,
    totalItems: 0
};
let product = {
    name: "Saree",
    price: 2999
};
function addToCART(){ 
    alert("Product is added to the cart");
    cart.items.push(product);
    cart.totalItems += 1;
    cart.totalPrice += product.price;  
    document.getElementById("itemCount").innerText = cart.totalItems;
    document.getElementById("totalPrice").innerText = cart.totalPrice;
    console.log("Cart Object:", cart);
}

