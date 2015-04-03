<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>New event</title>
        <style>
            
        </style>
</head>
        
<body>
    Creating a new event
                <form id="formContact" action="process.php" method="POST">
                <!--Get or Post-->
                <ul>
                    <li><label>Company<br> <input type="text" name="company" id="company"></label></li>
                    <li><label>Name<br> <input type="text" name="name" id="name"></label></li>
                    <li><label>Email *<br> <input type="text" name="email" id="email"></label></li>
                    <li><label>Confirm email *<br> <input type="text" name="email_confirm" id="email_confirm" title="emails don't match, please try again"></label></li>
                    <li><label>Message *<br> <textarea name="feedback" id="feedback"></textarea></label></li>
                    <li style="text-align: right;"><input type="submit" value="Send message" name="submit" id="submit"></li>
                    <li>* Mandatory fields</li>
                    <!--onfocus="this.value = ''--> 
                </ul>
            </form>
    <!--Lista: Kategori
    Textruta: namn
    Kalender: datum
    Tid:
    Textruta: plats
    Textruta: adress(valfritt)
    Textarea: vägbeskrivning (valfritt)
    Lista: Max antal platser-->
</body>
</html>