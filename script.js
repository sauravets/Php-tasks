$(document).ready(function(){    
    $("#input1").on("input",function(){
        let inputVal = $("#input1").val();
        let regex = (/^(?:[1-9][0-9]*d (?:2[0-3]|1[0-9]|[1-9])h (?:[1-5][0-9]|[1-9])m|[1-9][0-9]*d (?:(?:2[0-3]|1[0-9]|[1-9])h|(?:[1-5][0-9]|[1-9])m)|(?:2[0-3]|1[0-9]|[1-9])h (?:[1-5][0-9]|[1-9])m|[1-9][0-9]*d|(?:2[0-3]|1[0-9]|[1-9])h|(?:[1-5][0-9]|[1-9])m) $/);
        
        if(regex.test(inputVal)){
            return true;           
        } else{
            console.log("not allowed");
            return false;
        }
    });
});