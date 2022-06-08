$(document).ready(function () {
    $(".inputs").on("input", function (e) {
        let inputVal = $(this).val();
        let regex = (/^(?:[1-9][0-9]*w (?:2[0-3]|1[0-9]|[1-9])d (?:[1-5][0-9]|[1-9])h|[1-9][0-9]*w (?:(?:2[0-3]|1[0-9]|[1-9])d|(?:[1-5][0-9]|[1-9])h)|(?:2[0-3]|1[0-9]|[1-9])d (?:[1-5][0-9]|[1-9])h|[1-9][0-9]*w|(?:2[0-3]|1[0-9]|[1-9])d|(?:[1-5][0-9]|[1-9])h)$/);
        if (regex.test(inputVal)) {
            console.log("allowed");
            return true;            
        } else {
            console.log("not allowed");
            // e.preventDefault();
            return false;
        }
    });
});