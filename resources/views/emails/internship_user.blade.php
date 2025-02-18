<!DOCTYPE html>
<html>
<head>
    <title>Internship Application Received</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 5px solid #007BFF;
        }
        .logo img {
            max-width: 140px;
            margin-bottom: 15px;
        }
        h2 {
            color: #333;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .footer {
            margin-top: 25px;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
        .social-icons {
            margin-top: 15px;
        }
        .social-icons a {
            margin: 0 8px;
            display: inline-block;
        }
        .social-icons img {
            width: 26px;
            transition: transform 0.3s ease;
        }
        .social-icons img:hover {
            transform: scale(1.1);
        }
        .address {
            margin-top: 10px;
            font-size: 14px;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="logo">
            <img src="{{ $message->embed(public_path('img/Tecnozard v1.png')) }}" alt="Company Logo">
        </div>
        <h2>Dear {{ $internship->full_name }}</h2>
        <p>Thank you for applying for the internship position.</p>
        <p>Our team will carefully review your application and contact you soon.</p>
        <p>We appreciate your interest in joining <strong>Tecnozard Private Limited</strong>.</p>
        <div class="footer">
            <p><strong>Best Regards,</strong></p>
            <p><strong>Tecnozard Private Limited</strong></p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/company/tecnozard-private-limited/posts/?feedView=all" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn">
                </a>
                <a href="https://www.instagram.com/tecnozard_pvt_ltd" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                </a>
            </div>
            <div class="address">
                <p>Email: <a href="mailto:contact@tecnozard.com">contact@tecnozard.com</a> | Phone: <a href="tel:+919600641464">+91 9600641464</a></p>
                <p>No-25, Kamalam Nagar, Thirupapuliyur, Cuddalore, Pincode: 607002</p>
            </div>
        </div>
    </div>
</body>
</html>
