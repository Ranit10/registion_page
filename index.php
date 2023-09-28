<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background1.jpg'); 
            margin: 0;
            padding: 0;
        }

        h1 {
			color  : white;
            text-align: center;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <div class="container">
        <form id="registration-form" onsubmit="return validateForm()" method="post" action="register.php" autocomplete="off">
            <div class="form-group">
                <label for="first-name">First Name:<sup style="color:red">*</sup></label>
                <input type="text" id="first-name" name="first_name" placeholder="Enter First Name" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="middle-name">Middle Name:</label>
                <input type="text" id="middle-name" name="middle_name" placeholder="Enter Middle Name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="last-name">Last Name:<sup style="color:red">*</sup></label>
                <input type="text" id="last-name" name="last_name"placeholder="Enter Last Name " required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email:<sup style="color:red">*</sup></label>
                <input type="email" id="email" name="email" placeholder="Enter Email"  required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number:<sup style="color:red">*</sup></label>
                <input type="tel" id="phone-number" name="phone_number" placeholder="Enter Phone Number" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password:<sup style="color:red">*</sup></label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:<sup style="color:red">*</sup></label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Enter Confirm Password"  required autocomplete="off">
                <p class="error-message" id="password-error"></p>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
            <span class="from-group">
                Already registered?
                <a href="login.php">Login</a>
            </span>
        </form>
    </div>

    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const passwordError = document.getElementById('password-error');

            if (password !== confirmPassword) {
                passwordError.textContent = 'Passwords do not match.';
                return false;
            }
        }
    </script>

</body>

</html>
