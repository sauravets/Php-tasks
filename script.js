$(document).ready(function () {
    $(".inputs").on("input", function (e) {
        let inputVal = $(this).val();
        let regex = (/^(?:[1-9][0-9]*w (?:2[0-3]|1[0-9]|[1-9])d (?:[1-5][0-9]|[1-9])h|[1-9][0-9]*w (?:(?:2[0-3]|1[0-9]|[1-9])d|(?:[1-5][0-9]|[1-9])h)|(?:2[0-3]|1[0-9]|[1-9])d (?:[1-5][0-9]|[1-9])h|[1-9][0-9]*w|(?:2[0-3]|1[0-9]|[1-9])d|(?:[1-5][0-9]|[1-9])h)$/);      
        if (regex.test(inputVal)) {
            $("#result_btn").prop("disabled",false);
            return true;            
        } else {
            return false;
        }        
    });
    //prevent form to enter
    $('#myForm').on('keyup keypress', function(e) {
        if (e.key === 'Enter') { 
          e.preventDefault();
          return false;
        }
      });
});