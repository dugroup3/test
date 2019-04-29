var employeeid;
var id;
//Staff-review function
$(document).ready(function () {
    $(".staff-review").on('click', function (e) {
        //the button got clicked
        console.log(this.id);
        employeeid = this.id;

        $.ajax({
            url: "../Assignment/ajax-showReview.php",
            type: 'post',
            data: {'id': this.id},
            success: got_review_data,
            fail: not_got_review_data,
            dataType: "json"

        });
    });
});

function got_review_data(review_data) {
    // console.log('#review' + review_data[0].employeeNumber);
    // console.log(review_data.length);
    //output = "This Employee ID is " + review_data[0].employeeNumber + " and the comment is " + review_data[0].comment;
    //$('#review' + review_data[0].employeeNumber).html(output);


    num = review_data.length;
    output = " The number of review are" + num;
    if (num == 0) {
        output = " This Employee does not have review";
        $('#review' + employeeid).html(output);
    } else {
        for (var i = 0; i < review_data.length; i++) {
            output += "<p>" + "This Review ID is " + review_data[i].reviewId + " , the comment is " + review_data[i].comment +
                " and the date of review is " + review_data[i].dateOfReview + "</p>";
        }

        $('#review' + review_data[0].employeeNumber).html(output);
    }
}

function not_got_review_data() {
    $('#review' + employeeid).html("NETWORK PROBLEM");
}

//add Review function
$(document).ready(function () {
    $(".add-review").hide();
    $(".add-review").on('submit', function (e) {
        e.preventDefault();
        //the button got clicked
        console.log(this.id);
        employeeid = this.id;
        $.ajax({
            url: "../Assignment/ajax-addreview.php",
            type: 'post',
            data: $('#'+employeeid).serialize(),
            success: send_the_message,
            fail: not_got_review_data,

        });
    });
});

function send_the_message(msg) {
    alert(msg);
    if(msg=="The New Review Has been saved!!"){
        $('#add'+id).fadeOut();
        $('#btn'+id).fadeIn();
    }
}

//add review button function
$(document).ready(function () {

    $(".addReview-btn").on('click',function (e) {
        //the button got click.
       // console.log(this.id);
        employeeid=this.id;
        id = employeeid.substring(3);

        $('#add'+id).fadeIn();
        $('#btn'+id).fadeOut();

    })
})

