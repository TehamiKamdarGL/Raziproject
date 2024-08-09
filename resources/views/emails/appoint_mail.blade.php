<!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>
    <p>Name: {{ $appointment['name'] }}</p>
    <p>Phone: {{ $appointment['phone'] }}</p>
    <p>Date: {{ $appointment['date'] }}</p>
    <p>Time: {{ $appointment['time'] }}</p>
    <p>Stylist: {{ $appointment['stylist'] }}</p>
    <p>Message: {{ $appointment['message'] }}</p>
</body>
</html>
