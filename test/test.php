<div class="container">
    <h1 class="text-center mt-5">Event Registration</h1>
    <div class="row mt-5">
        <!-- Event 1 -->
        <div class="col-md-4">
            <div class="card event-card">
                <div class="card-body">
                    <h5 class="card-title">Event 1</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="event1" data-price="100" onchange="updateTotal()">
                        <label class="form-check-label" for="event1">Add to Cart</label>
                    </div>
                    <div class="form-group">
                        <label for="event1-amount">Registration Amount: $100</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event 2 -->
        <div class="col-md-4">
            <div class="card event-card">
                <div class="card-body">
                    <h5 class="card-title">Event 2</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="event2" data-price="150" onchange="updateTotal()">
                        <label class="form-check-label" for="event2">Add to Cart</label>
                    </div>
                    <div class="form-group">
                        <label for="event2-amount">Registration Amount: $150</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Display Total -->
        <div class="col-md-4">
            <div class="card event-card">
                <div class="card-body">
                    <h5 class="card-title">Total</h5>
                    <div class="form-group">
                        <label for="total-amount">Total Amount: <span id="total-amount">$0</span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateTotal() {
        var checkboxes = document.querySelectorAll('.form-check-input:checked');
        var total = 0;
        var count = 0;
        checkboxes.forEach(function(checkbox) {
            total += parseInt(checkbox.getAttribute('data-price'));
            count++;
        });
        if (count > 2) {
            alert("You can select only two events.");
            checkbox.checked = false;
            total -= parseInt(checkbox.getAttribute('data-price'));
        }
        document.getElementById('total-amount').textContent = '$' + total;
    }
</script>
