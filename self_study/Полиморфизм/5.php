<?php 
class Order {
    function calculateTotal(){

    }
}
class OnlineOrder extends Order {
    function calculateTotal(){
        print("при заказе онлайн с кидка 1%");
    }
}
class StoreOrder extends Order {

    function calculateTotal(){
        print("в магазине скидка 2%");
    }
}
class TelephoneOrder extends Order {
    function calculateTotal(){
        print("по телефону скидка 3%");
    }
}