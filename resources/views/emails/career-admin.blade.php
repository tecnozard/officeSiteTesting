<!DOCTYPE html>
<html>
<head>
    <title>New Career Application</title>
</head>
<body>


<div class="email-container">
        <!-- Logo Section -->
        <div class="logo">
            <img src="{{ $message->embed(public_path('img/Tecnozard v1.png')) }}" alt="Company Logo">
        </div>

        <h2>New Career Application Received</h2>
    <p>A new career application has been submitted. Below are the details:</p>
    <ul>
        <li><strong>Name:</strong> {{ $career['name'] }}</li>
        <li><strong>Email:</strong> {{ $career['email'] }}</li>
        <li><strong>Position:</strong> {{ $career['position'] }}</li>
        <li><strong>Experience:</strong> {{ $career['experience'] }} years</li>
    </ul>
    <p><strong>Resume Link:</strong> <a href="{{ asset($career['resume']) }}" target="_blank">Download Resume</a></p>
    <br>

        <!-- Footer -->
        <p class="footer">Best Regards,<br><strong>Tecnozard Private Limited</strong></p>
    </div>


</body>
</html>
