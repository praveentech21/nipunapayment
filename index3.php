<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 2px rgba(56, 56, 56, 0.1);
            color: hsl(0, 7%, 11%);
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                text-indent: -100%;
            }

            100% {
                text-indent: 100%;
            }
        }

        .form-container,
        .event-container {
            background-color: #eeeeee;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .event-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .event-card {
            width: 300px;
            background-color: #eeeeee;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group label,
        .event-card h5 {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .form-check-label {
            cursor: pointer;
        }

        .payment-container {
            background-color: #eeeeee;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .payment-button {
            background-color: #007bff;
            color: #d4cece;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .my-4 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Student Registration</h1>
    <div class="container form-container">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="regno">Registration Number:</label>
                <input type="text" class="form-control" id="regno" name="regno" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="College">College:</label>
                <input type="text" class="form-control" id="College" name="College" required>
            </div>
            <div class="form-group">
                <label for="Year">Year:</label>
                <input type="text" class="form-control" id="Year" name="Year" required>
            </div>
            <div class="form-group">
                <label for="Course">Course:</label>
                <input type="text" class="form-control" id="Course" name="Course" required>
            </div>
            <div class="form-group">
                <label for="Location">Location:</label>
                <input type="text" class="form-control" id="Location" name="Location" required>
            </div>
        </form>
    </div>
    <div class="container">
        <h1 class="text-center mt-5">Event Registration</h1>
        <div class="col-md-4">
            <div class="card event-card">

                <div class="card-body">
                    <h5 class="card-title">Full Registration</h5>
                    <!-- <p class="card-text">Description of Event 1</p> -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="event1" data-price="400" onchange="updateTotal()">
                        <label class="form-check-label" for="event1">Add to Cart</label>
                    </div>
                    <div class="form-group">
                        <label for="event1-amount">Registration Amount: 400/-</label>
                        <input type="text" class="form-control" id="event1-amount" value="$400" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- Event 1 -->
            <div class="col-md-4">
                <div class="card event-card">

                    <div class="card-body">
                        <h5 class="card-title">Combo 1</h5>
                        <!-- <p class="card-text">Description of Event 1</p> -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="combo1" data-price="150" onchange="updateTotal()">
                            <label class="form-check-label" for="combo1">Add to Cart</label>
                        </div>
                        <div class="form-group">
                            <label for="combo1-amount">Registration Amount: 150/-</label>
                            <input type="text" class="form-control" id="combo1-amount" value="$150" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="card-body">
                        <h5 class="card-title">combo 2</h5>
                        <!-- <p class="card-text">Description of Event 2</p> -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="combo2" data-price="150" onchange="updateTotal()">
                            <label class="form-check-label" for="combo2">Add to Cart</label>
                        </div>
                        <div class="form-group">
                            <label for="combo2-amount">Registration Amount: 150/-</label>
                            <input type="text" class="form-control" id="combo2-amount" value="$150" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="card-body">
                        <h5 class="card-title">combo 3</h5>
                        <!-- <p class="card-text">Description of Event 2</p> -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="combo3" data-price="150" onchange="updateTotal()">
                            <label class="form-check-label" for="combo3">Add to Cart</label>
                        </div>
                        <div class="form-group">
                            <label for="combo3-amount">Registration Amount: 150/-</label>
                            <input type="text" class="form-control" id="combo3-amount" value="$150" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <!-- Event 1 -->
                    <div class="col-md-4">
                        <div class="card event-card">

                            <div class="card-body">
                                <h5 class="card-title">Code Combat</h5>
                                <!-- <p class="card-text">Description of Event 1</p> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="codecombat" data-price="60" onchange="updateTotal()">
                                    <label class="form-check-label" for="codecombat">Add to Cart</label>
                                </div>
                                <div class="form-group">
                                    <label for="codecombat-amount">Registration Amount: 60/-</label>
                                    <input type="text" class="form-control" id="codecombat-amount" value="60" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Event 2 -->
                    <div class="col-md-4">
                        <div class="card event-card">
                            <div class="card-body">
                                <h5 class="card-title">Mechonica</h5>
                                <!-- <p class="card-text">Description of Event 2</p> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="mechonica" data-price="60" onchange="updateTotal()">
                                    <label class="form-check-label" for="mechonica">Add to Cart</label>
                                </div>
                                <div class="form-group">
                                    <label for="mechonica-amount">Registration Amount: 60/-</label>
                                    <input type="text" class="form-control" id="mechonica-amount" value="60" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card event-card">
                            <div class="card-body">
                                <h5 class="card-title">Struqta</h5>
                                <!-- <p class="card-text">Description of Event 2</p> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="struqta" data-price="60" onchange="updateTotal()">
                                    <label class="form-check-label" for="struqta">Add to Cart</label>
                                </div>
                                <div class="form-group">
                                    <label for="struqta-amount">Registration Amount: 60/-</label>
                                    <input type="text" class="form-control" id="struqta-amount" value="60" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mt-5">
                            <!-- Event 1 -->
                            <div class="col-md-4">
                                <div class="card event-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Electrolance</h5>
                                        <!-- <p class="card-text">Description of Event 1</p> -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="electrolance" data-price="60" onchange="updateTotal()">
                                            <label class="form-check-label" for="electrolance">Add to Cart</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="electrolance-amount">Registration Amount: 60/-</label>
                                            <input type="text" class="form-control" id="electrolance-amount" value="60" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Event 2 -->
                            <div class="col-md-4">
                                <div class="card event-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Presencia</h5>
                                        <!-- <p class="card-text">Description of Event 2</p> -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="presencia" data-price="60" onchange="updateTotal()">
                                            <label class="form-check-label" for="presencia">Add to Cart</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="presencia-amount">Registration Amount: 60/-</label>
                                            <input type="text" class="form-control" id="presencia-amount" value="60" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card event-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Poster Arena</h5>
                                        <!-- <p class="card-text">Description of Event 2</p> -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="poster-arena" data-price="60" onchange="updateTotal()">
                                            <label class="form-check-label" for="poster-arena">Add to Cart</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="poster-arena-amount">Registration Amount: 60/-</label>
                                            <input type="text" class="form-control" id="poster-arena-amount" value="60" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row mt-5">
                                    <!-- Event 1 -->
                                    <div class="col-md-4">
                                        <div class="card event-card">

                                            <div class="card-body">
                                                <h5 class="card-title">Model Marathon</h5>
                                                <!-- <p class="card-text">Description of Event 1</p> -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="model-marathon" data-price="60" onchange="updateTotal()">
                                                    <label class="form-check-label" for="model-marathon">Add to Cart</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="model-marathon-amount">Registration Amount: 60/-</label>
                                                    <input type="text" class="form-control" id="model-marathon-amount" value="60" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Event 2 -->
                                    <div class="col-md-4">
                                        <div class="card event-card">
                                            <div class="card-body">
                                                <h5 class="card-title">Model United Nations</h5>
                                                <!-- <p class="card-text">Description of Event 2</p> -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="model-united-nations" data-price="60" onchange="updateTotal()">
                                                    <label class="form-check-label" for="model-united-nations">Add to Cart</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="model-united-nations-amount">Registration Amount: 60/-</label>
                                                    <input type="text" class="form-control" id="model-united-nations-amount" value="60" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card event-card">
                                            <div class="card-body">
                                                <h5 class="card-title">Word Sphere</h5>
                                                <!-- <p class="card-text">Description of Event 2</p> -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="word-sphere" data-price="60" onchange="updateTotal()">
                                                    <label class="form-check-label" for="word-sphere">Add to Cart</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="word-sphere-amount">Registration Amount: 60/-</label>
                                                    <input type="text" class="form-control" id="word-sphere-amount" value="60" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">

                                        <div class="row mt-5">
                                            <!-- Event 1 -->
                                            <div class="col-md-4">
                                                <div class="card event-card">

                                                    <div class="card-body">
                                                        <h5 class="card-title">IPL Auction</h5>
                                                        <!-- <p class="card-text">Description of Event 1</p> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="ipl-auction" data-price="60" onchange="updateTotal()">
                                                            <label class="form-check-label" for="ipl-auction">Add to
                                                                Cart</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ipl-auction-amount">Registration Amount: 60/-</label>
                                                            <input type="text" class="form-control" id="ipl-auction-amount" value="60" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Event 2 -->
                                            <div class="col-md-4">
                                                <div class="card event-card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mind Quest</h5>
                                                        <!-- <p class="card-text">Description of Event 2</p> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="mindquest" data-price="60" onchange="updateTotal()">
                                                            <label class="form-check-label" for="mindquest">Add to
                                                                Cart</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mindquest-amount">Registration Amount: 60/-</label>
                                                            <input type="text" class="form-control" id="mindquest-amount" value="60" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card event-card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Business Capital</h5>
                                                        <!-- <p class="card-text">Description of Event 2</p> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="businesscapital" data-price="60" onchange="updateTotal()">
                                                            <label class="form-check-label" for="businesscapital">Add to
                                                                Cart</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="businesscapital-amount">Registration Amount: 60/-</label>
                                                            <input type="text" class="form-control" id="businesscapital-amount" value="60" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">

                                                <div class="row mt-5">
                                                    <!-- Event 1 -->
                                                    <div class="col-md-4">
                                                        <div class="card event-card">

                                                            <div class="card-body">
                                                                <h5 class="card-title">Mystery Mansion</h5>
                                                                <!-- <p class="card-text">Description of Event 1</p> -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="mysterymansion" data-price="60" onchange="updateTotal()">
                                                                    <label class="form-check-label" for="mysterymansion">Add to
                                                                        Cart</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="mysterymansion-amount">Registration
                                                                        Amount: 60/-</label>
                                                                    <input type="text" class="form-control" id="mysterymansion-amount" value="60" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Event 2 -->
                                                    <div class="col-md-4">
                                                        <div class="card event-card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Uniqus</h5>
                                                                <!-- <p class="card-text">Description of Event 2</p> -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="uniqus" data-price="60" onchange="updateTotal()">
                                                                    <label class="form-check-label" for="uniqus">Add to
                                                                        Cart</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="uniqus-amount">Registration
                                                                        Amount: 60/-</label>
                                                                    <input type="text" class="form-control" id="uniqus-amount" value="60" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card event-card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Art Space</h5>
                                                                <!-- <p class="card-text">Description of Event 2</p> -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="artspace" data-price="60" onchange="updateTotal()">
                                                                    <label class="form-check-label" for="artspace">Add to
                                                                        Cart</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="artspace-amount">Registration
                                                                        Amount: 60/-</label>
                                                                    <input type="text" class="form-control" id="artspace-amount" value="60" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card event-card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Genesis</h5>
                                                                <!-- <p class="card-text">Description of Event 2</p> -->
                                                                <div class="form-check">
                                                                    <input type="hidden" id="selectedevent0">
                                                                    <input type="hidden" id="selectedevent1">

                                                                    <input class="form-check-input" type="checkbox" id="genesis" data-price="60" onchange="updateTotal()">
                                                                    <label class="form-check-label" for="genesis">Add to
                                                                        Cart</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="genesis-amount">Registration
                                                                        Amount: 60/-</label>
                                                                    <input type="text" class="form-control" id="genesis-amount" value="60" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="container payment-container">
                                                        <h2>Payment</h2>
                                                        <div class="form-group">
                                                            <label for="cart-total-price">Cart Total:</label>
                                                            <span id="cart-total-price">$0</span>
                                                        </div>
                                                        <button type="button" class="payment-button" onclick="submitPayment()">Pay</button>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>



    <script>
        function updateTotal() {
            var checkboxes = document.querySelectorAll('.form-check-input:checked');
            var total = 0;
            var count = 0;
            checkboxes.forEach(function(checkbox) {
                total += parseInt(checkbox.getAttribute('data-price'));
                if (count == 0) document.getElementById('selectedevent0').value = checkbox.id;
                else if (count == 1) document.getElementById('selectedevent1').value = checkbox.id;
                count++;

                if (count > 2) {
                    alert("You can select only two events.");
                    checkbox.checked = false;
                    total -= parseInt(checkbox.getAttribute('data-price'));
                }
            });

            document.getElementById('cart-total-price').textContent = '$' + total;
            document.getElementById('cart-total-price').value = total;
        }

        function submitPayment() {
            var cartTotalPrice = document.getElementById('cart-total-price').value;
            var name = document.getElementById('name').value;
            var regno = document.getElementById('regno').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var College = document.getElementById('College').value;
            var Year = document.getElementById('Year').value;
            var Course = document.getElementById('Course').value;
            var Location = document.getElementById('Location').value;
            var selectedevent0 = document.getElementById('selectedevent0').value;
            var selectedevent1 = document.getElementById('selectedevent1').value;


            if (cartTotalPrice <= 0) {
                alert('Please select at least one event to register');
                return;
            }

            var cart_amount = cartTotalPrice * 100;

            var options = {
                "key": "rzp_live_2D4bAGktbYxm16",
                "amount": 100, // Amount in paise
                "currency": "INR",
                "name": "NIPUNA 2K24",
                "description": regno,
                "image": "https://nipuna24.srkriste.in/Images/nipunalogo.png",
                "callback_url": "http://saipraveen.free.nf/nipuna/index3.php",
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "handler": function(response) {
                    console.log(response.razorpay_payment_id);
                    if (response.razorpay_payment_id != '') {
                        // alert("Payment Successful");
                        console.log(response.razorpay_payment_id);
                        $.ajax({
                            url: 'registration1.php',
                            type: 'post',
                            data: {
                                "registration": "registration",
                                'price': cartTotalPrice,
                                "name": name,
                                "regno": regno,
                                "email": email,
                                "mobileNumber": phone,
                                "College": College,
                                "Year": Year,
                                "Course": Course,
                                "Location": Location,
                                "selectedevent0": selectedevent0,
                                "selectedevent1": selectedevent1,
                                "payment_id": response.razorpay_payment_id
                            },
                            success: function(response) {
                                $data = JSON.parse(response);
                                if ($data.success) {
                                    alert($data.message);
                                    console.log($data.orderId);
                                } else {
                                    alert($data.message);
                                }

                            }
                        });
                    } else {
                        alert("Payment Failed");
                    }
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },
                "theme": {
                    "color": "#1e86f5"
                }
            };
            var rzp = new Razorpay(options);

            rzp.open();

            rzp.on('payment.failed', function(response) {
                alert(response.error.code);
                alert(response.error.description);
                alert(response.error.source);
                alert(response.error.step);
                alert(response.error.reason);
                alert(response.error.metadata.order_id);
                alert(response.error.metadata.payment_id);
                console.log(response.error.code);
                console.log(response.error.description);
                console.log(response.error.source);
                console.log(response.error.step);
                console.log(response.error.reason);
                console.log(response.error.metadata.order_id);
                console.log(response.error.metadata.payment_id);

            });

        }
    </script>
</body>

</html>