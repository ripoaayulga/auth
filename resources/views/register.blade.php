<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: 0;
            background-color: #45a049;
            color: #f5f6f7;
        }

        label {
            display: block;
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form>
        <fieldset>
            <label>Enter Your Username:</label>
            <input type="text" name="username" required />
            <label>Enter Your Email:</label>
            <input type="email" name="email" required />
            <label>Create a New Password:</label>
            <input type="password" name="password" required />
            <label>Confirm Your Password:</label>
            <input type="password" name="confirm-password" required />
        </fieldset>
        <fieldset>
            <label for="terms-and-conditions">I agree to the terms and conditions:</label>
            <input id="terms-and-conditions" type="checkbox" required />
        </fieldset>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>