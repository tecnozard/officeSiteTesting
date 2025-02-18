<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo img {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>


<div class="email-container">
        <!-- Logo Section -->
        <div class="logo">
            <img src="{{ $message->embed(public_path('img/Tecnozard v1.png')) }}" alt="Company Logo">
        </div>

        <h3>New Contact Request</h3>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
    
    <br>

        <!-- Footer -->
        <p class="footer">Best Regards,<br><strong>Tecnozard Private Limited</strong></p>
    </div>

</body>
</html>
