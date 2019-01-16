<?php
    
   switch($_GET['Rfunction'])
     {
      case 'add':
        add();
        break;
      case 'minus':
        minus();
        break;
      case 'divide':
        divide();
        break;
      case 'multiply':
        multiply();
        break;
      default;
      
     }

   function add(){
          echo $_GET[number1] + $_GET[number2];
        }
   function minus(){
           echo $_GET[number1] - $_GET[number2];
        }
   function divide(){
           echo $_GET[number1] / $_GET[number2];
        }
   function multiply(){
           echo $_GET[number1] * $_GET[number2];
        }
?>