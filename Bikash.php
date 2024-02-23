<?php
namespace All;

interface Bikash{
     function login($email , $password);

     function Confirm();

     function SendInvoice();
};

interface Nogod{
    function Nogodlogin($email , $password);

    function NogodConfirm();

    function NogodSendInvoice();
};

class Payment implements Bikash,Nogod {

     function login($email , $password){
        echo "Login";
     }
     function Confirm(){
        echo "Confirm order";
     }
     function SendInvoice(){
        echo "Send Invoice";
     }

     function Nogodlogin($email , $password){

     }

     function NogodConfirm(){

     }
 
     function NogodSendInvoice(){

     }
}



?>