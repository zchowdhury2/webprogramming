
//part A

function getPay() {
   var i = 0;
    
     var rate = 15;
     var pay = [];
     var standardpay;
     var overtimepay;


var hours =[];

 
 while (true){ 
    var hour = prompt("Please enter the number of hours worked this week for employee #" + (i) + ":");
    hours[i] = hour;
        if (hours[i]>= 40)
    
    {

    standardpay = (rate * 40);
    overtimepay = ((rate * 1.5) * (hours[i] - 40));
    pay[i] = (standardpay + overtimepay);
   
    
    }
    
    else if (hours[i] <= 40 && hours[i] >= 0)
    {
    standardpay = (rate * hours[i]);
    pay[i] = standardpay;
 
    }
    else {
        break;
    }

    i++;
 }

document.write("<table border=1>");
document.write("<tr>");
document.write("<td>Employee # </td>");
document.write("<td>Hours worked </td>");
document.write("<td>Pay </td>");
document.write("</tr>");
for(g=0; g<=pay.length;g++)
{
    document.write("<tr>");
    document.write("<td>"+g+"</td>");
    document.write("<td>"+ hours[g]+"</td>");
    document.write("<td>"+pay[g].toFixed(2)+"</td>");
    document.write("</tr>");
}
document.write("</table>");
 

}
//part B



//part C
var usedLocation=[]; //array to store the used location to place the image
var usedLocationCounter=0;
var clicked=null;
var clickedId=null;
var correct=[];
var correctLen=0;

function start(){
/*hide the instruction field and get values*/
$("#instructions").hide();
gridSize=$("#gridSize").val();
revealTime=$("#revealTime").val()*1000; //taken in ms
/*place random image according to grid selected*/

if(gridSize=="lvl1"){
        Size=8;
        gameOverTime=120000+revealTime;

        for(i=1;i<5;i++){
                var rand=getNumber([1,2,3,4,5,6,7,8]); //function to get the location to place image. Parameter tells the maximum number
                var rand1=getNumber([1,2,3,4,5,6,7,8]);

                /*alert(rand+"and"+rand1);*/
                $("#"+gridSize).find("td#"+rand).find("img").attr("src",i+".jpg");
                $("#"+gridSize).find("td#"+rand).find("img").attr("name",i);
                $("#"+gridSize).find("td#"+rand1).find("img").attr("src",i+".jpg");
                $("#"+gridSize).find("td#"+rand1).find("img").attr("name",i);

        }

        /*hide image after waiting specified time*/

        setTimeout(function(){
                for(i=1;i<9;i++){
                        $("#"+gridSize).find("td#"+i).find("img").attr("src","q.jpg");
                        $("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");
                }
        }, revealTime);

}else if (gridSize=="lvl2") {
        Size=10;
        gameOverTime=150000+revealTime;

        for(i=1;i<6;i++){
                var rand=getNumber([1,2,3,4,5,6,7,8,9,10]); //function to get the location to place image. Parameter tells the maximum number
                var rand1=getNumber([1,2,3,4,5,6,7,8,9,10]);

                /*alert(rand+"and"+rand1);*/
                $("#"+gridSize).find("td#"+rand).find("img").attr("src",i+".jpg");
                $("#"+gridSize).find("td#"+rand).find("img").attr("name",i);
                $("#"+gridSize).find("td#"+rand1).find("img").attr("src",i+".jpg");
                $("#"+gridSize).find("td#"+rand1).find("img").attr("name",i);
}

/*hide image after waiting specified time*/

        setTimeout(function(){

        for(i=1;i<11;i++){
                $("#"+gridSize).find("td#"+i).find("img").attr("src","q.jpg");
                $("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");
                }
        }, revealTime);

}else if (gridSize=="lvl3") {

        Size=12;
        gameOverTime=180000+revealTime;

        for(i=1;i<7;i++){
                var rand=getNumber([1,2,3,4,5,6,7,8,9,10,11,12]); //function to get the location to place image. Parameter tells the maximum number
                var rand1=getNumber([1,2,3,4,5,6,7,8,9,10,11,12]);

                /*alert(rand+"and"+rand1);*/
                $("#"+gridSize).find("td#"+rand).find("img").attr("src",i+".jpg");
                $("#"+gridSize).find("td#"+rand).find("img").attr("name",i);
                $("#"+gridSize).find("td#"+rand1).find("img").attr("src",i+".jpg");
                $("#"+gridSize).find("td#"+rand1).find("img").attr("name",i);
        }

/*hide image after waiting specified time*/

        setTimeout(function(){

                for(i=1;i<13;i++){
                        $("#"+gridSize).find("td#"+i).find("img").attr("src","q.jpg");
                        $("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");
                }
        }, revealTime);
}

/*show the appropriate game grid*/

$("#"+gridSize).show();
/* the timer */
var startTime = new Date().getTime();
var interval = setInterval(function(){
                if(new Date().getTime() - startTime > gameOverTime){
                        clearInterval(interval);
                        alert("Time over!");
                        location.reload(); //resets the game
                        return;
                }
        }, 1000); 
}

function getNumber(set){
        var rndm = Math.floor(Math.random() * set.length);
        while(jQuery.inArray(set[rndm],usedLocation)!=-1){
        rndm = Math.floor(Math.random() * set.length);
}

usedLocation[usedLocationCounter]=set[rndm];
usedLocationCounter++;
return set[rndm];
}

function check(e){
        $(e).attr("src",$(e).attr("name")+".jpg"); //to reveal the image
        $(e).attr("onclick",""); //prevents clicking an already clicked option
        if(clicked==null){
                clicked=$(e).attr("name");
                clickedId=$(e).attr("id");
        } else {

        if(clicked==$(e).attr("name")){

                //alert("ok");
                correct[correctLen]=clickedId;
                correctLen++;
                correct[correctLen]=$(e).attr("id");
                correctLen++;
                //check if game is finished

                if(correct.length==Size){
                        $("#win").show();
                } else{
                        //alert("not");
                        clicked=null;
                }

                for(i=0;i<Size+1;i++){
                        if(jQuery.inArray(""+i,correct)!=-1){
                                //alert("i is "+i);
                                continue;
                        }

                        //alert(i);
                        $("#"+gridSize).find("td#"+i).find("img").attr("src","q.jpg");
                        $("#"+gridSize).find("td#"+i).find("img").attr("onclick","check(this)");
                        }
                }
        }
}