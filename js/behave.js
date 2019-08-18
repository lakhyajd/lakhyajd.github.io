var number = Math.floor(Math.random() * 10 + 1);

var totAttempts = 4;
var actAttempts = 1;

function process() {
    var userNumber = document.getElementById("inputbox").value;
    if (userNumber < 11) {

        if (totAttempts != actAttempts) {
            if (userNumber == number) {

                document.getElementById("outbox").innerHTML = "Horrray. Thats a match! You did in " + actAttempts + " attempts";
            } else {
                document.getElementById("outbox").innerHTML = "Oops. Incorrect guess. Try again! " + (totAttempts - actAttempts) + " attempts left.";
                actAttempts++;

            }
        } else {
            document.getElementById("outbox").innerHTML = "All attempts are over. Please refresg this page and try again.";
        }
    } else {
        document.getElementById("outbox").innerHTML = "Please enter a number between 1 and 10 only."
    }
}