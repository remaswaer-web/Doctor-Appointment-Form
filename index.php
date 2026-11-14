<?php
$success_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointment_date = htmlspecialchars($_POST['appointment_date'] ?? '');
    $appointment_time = htmlspecialchars($_POST['appointment_time'] ?? '');
    $first_name       = htmlspecialchars($_POST['first_name'] ?? '');
    $last_name        = htmlspecialchars($_POST['last_name'] ?? '');
    $gender           = htmlspecialchars($_POST['gender'] ?? '');
    $phone            = htmlspecialchars($_POST['phone'] ?? '');
    $city             = htmlspecialchars($_POST['city'] ?? '');
    $state            = htmlspecialchars($_POST['state'] ?? '');
    $query            = htmlspecialchars($_POST['query'] ?? '');
    $appointment_type = $_POST['appointment_type'] ?? [];

    $success_message = "Appointment submitted successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #ffffff;
            font-family: "Times New Roman", Times, serif;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            max-width: 960px;
            width: 100%;
            gap: 25px;
        }
        .image-section {
            flex: 0 0 42%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }
        .image-section img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        .form-section {
            flex: 1;
            padding-bottom: 10px;
        }
        .form-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }
        .divider {
            border: none;
            border-top: 2px solid #c94a4a;
            margin-bottom: 22px;
        }
        .form-row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 14px;
        }
        .form-label {
            width: 130px;
            font-size: 14px;
            line-height: 1.25;
            padding-top: 3px;
            flex-shrink: 0;
        }
        .form-input-group {
            flex: 1;
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }
        input[type="text"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        textarea {
            border: 1px solid #8e8e8e;
            padding: 3px 6px;
            font-family: "Times New Roman", Times, serif;
            font-size: 13px;
            color: #000;
            border-radius: 2px;
            outline: none;
        }
        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        input[type="time"]:focus,
        textarea:focus {
            border-color: #4a90e2;
        }
        .input-date {
            width: 145px;
        }
        .input-time {
            width: 115px;
        }
        .input-half {
            width: 175px;
        }
        .input-phone {
            width: 175px;
        }
        textarea {
            width: 362px;
            height: 62px;
            resize: vertical;
        }
        .radio-group {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            padding-top: 2px;
        }
        .radio-group label {
            display: inline-flex;
            align-items: center;
            gap: 3px;
            cursor: pointer;
        }
        .checkbox-container {
            display: flex;
            flex-direction: column;
            font-size: 14px;
            line-height: 1.45;
        }
        .checkbox-container p {
            margin-bottom: 3px;
        }
        .checkbox-container label {
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }
        .submit-row {
            margin-top: 14px;
            padding-left: 130px;
        }
        button[type="submit"] {
            background-color: #efefef;
            border: 1px solid #767676;
            border-radius: 2px;
            padding: 2px 10px;
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #000;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #e2e2e2;
        }
        .alert-success {
            background-color: #e6f4ea;
            color: #137333;
            border: 1px solid #ceead6;
            padding: 8px 12px;
            margin-bottom: 15px;
            font-size: 14px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="image-section">
        <img src="image11.png" alt="Doctor">
    </div>

    <div class="form-section">
        <h2 class="form-title">Doctor Appointment Form</h2>
        <hr class="divider">

        <?php if (!empty($success_message)): ?>
            <div class="alert-success"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-row">
                <label class="form-label">Appointment<br>Date</label>
                <div class="form-input-group">
                    <input type="date" name="appointment_date" class="input-date">
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Appointment<br>Time</label>
                <div class="form-input-group">
                    <input type="time" name="appointment_time" class="input-time">
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Name</label>
                <div class="form-input-group">
                    <input type="text" name="first_name" placeholder="First" class="input-half">
                    <input type="text" name="last_name" placeholder="Last" class="input-half">
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Gender</label>
                <div class="form-input-group radio-group">
                    <label>Male <input type="radio" name="gender" value="Male"></label>
                    <label>Female <input type="radio" name="gender" value="Female" checked></label>
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Phone</label>
                <div class="form-input-group">
                    <input type="tel" name="phone" placeholder="####" class="input-phone">
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Address</label>
                <div class="form-input-group">
                    <input type="text" name="city" placeholder="city" class="input-half">
                    <input type="text" name="state" placeholder="state" class="input-half">
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Your Query</label>
                <div class="form-input-group">
                    <textarea name="query"></textarea>
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Appointment<br>Type</label>
                <div class="checkbox-container">
                    <p>Select which appointment type(s) you require</p>
                    <label><input type="checkbox" name="appointment_type[]" value="Cervix checkup" checked> Cervix checkup</label>
                    <label><input type="checkbox" name="appointment_type[]" value="Heart checkup" checked> Heart checkup</label>
                    <label><input type="checkbox" name="appointment_type[]" value="Eye check-up"> Eye check-up</label>
                    <label><input type="checkbox" name="appointment_type[]" value="Hearing Test"> Hearing Test</label>
                </div>
            </div>

            <div class="submit-row">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>