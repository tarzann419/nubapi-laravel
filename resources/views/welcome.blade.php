<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form with Live Validation</title>
    <!-- Include CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Input Form with Live Validation</h2>
                <form id="inputForm" method="get" action="{{ url('/get-input') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputText" class="form-label">ACCOUNT NUMBER</label>
                        <input type="text" class="form-control" min="10" max="10" id="inputText" name="acc_no">
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="inputText" class="form-label">SELECT YOUR BANK</label>
                        <input type="text" class="form-control" id="inputText" name="bank_code">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Live validation using jQuery
            $('#inputText').on('input', function() {
                var inputText = $(this).val();
                if (inputText.length < 5) {
                    $(this).addClass('is-invalid');
                    $('#textValidationMessage').text('Input must be at least 5 characters long.');
                } else {
                    $(this).removeClass('is-invalid');
                    $('#textValidationMessage').text('');
                }
            });
        });
    </script>
</body>
</html>
