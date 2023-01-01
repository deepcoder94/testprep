//alert(new Date().getTime() + 5);

var dt = new Date();
dt.setSeconds(dt.getSeconds() + 11702);

var countDownDate = dt.getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    //document.write( dt );


    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = hours + "" + "h" + ":" + minutes + "" + "m" + ":" + seconds + "" + "s";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        if (confirm('Your time expired. Would you like to resume the session!!')) {
        } else
            window.location.reload();
        document.getElementById("demo").innerHTML = "EXPIRED";
    } else if(distance > 0) {
        window.onbeforeunload = function () {
            return "Data will be lost if you leave the page, are you sure?";
        };
    }
}, 1000);