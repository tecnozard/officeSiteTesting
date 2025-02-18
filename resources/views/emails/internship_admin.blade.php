<!DOCTYPE html>
<html>
<head>
    <title>New Internship Application</title>
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
            text-align: left;
            border-top: 5px solid #007BFF;
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
            margin-bottom: 10px;
        }
        .details {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .details p {
            margin: 5px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>New Internship Application Received</h2>
        <p>Dear Admin,</p>
        <p>A new internship application has been submitted. Below are the details:</p>

        <div class="details">
            <p><strong>Full Name:</strong> {{ $internship->full_name }}</p>
            <p><strong>Email:</strong> {{ $internship->email }}</p>
            <p><strong>Phone:</strong> {{ $internship->phone }}</p>
            <p><strong>Alternative Phone:</strong> {{ $internship->alt_phone ?? 'N/A' }}</p>
            <p><strong>Date of Birth:</strong> {{ $internship->dob }}</p>
            <p><strong>Gender:</strong> {{ $internship->gender }}</p>
            <p><strong>College:</strong> {{ $internship->college }}</p>
            <p><strong>Degree:</strong> {{ $internship->degree }}</p>
            <p><strong>Graduation Year:</strong> {{ $internship->graduation_year }}</p>
            <p><strong>Internship Type:</strong> {{ $internship->internship_type }}</p>
            <p><strong>Experience:</strong> {{ $internship->experience }}</p>
            <p><strong>Start Date:</strong> {{ $internship->start_date }}</p>
            <p><strong>Current Address:</strong> {{ $internship->current_address }}</p>
            <p><strong>Permanent Address:</strong> {{ $internship->permanent_address ?? 'N/A' }}</p>
        </div>

        <p><strong>Attached Documents:</strong></p>
        <ul>
    @if($internship->resume)
        <li><a href="{{ asset($internship->resume) }}" target="_blank">Resume</a></li>
    @endif
    @if($internship->payment_proof)
        <li><a href="{{ asset($internship->payment_proof) }}" target="_blank">Payment Proof</a></li>
    @endif
    @if($internship->id_proof)
        <li><a href="{{ asset($internship->id_proof) }}" target="_blank">ID Proof</a></li>
    @endif
</ul>


        <p>Please review the application and proceed accordingly.</p>

        <div class="footer">
            <p><strong>Tecnozard Private Limited</strong></p>
            <p>Email: <a href="mailto:contact@tecnozard.com">contact@tecnozard.com</a></p>
            <p>Phone: <a href="tel:+919600641464">+91 9600641464</a></p>
        </div>
    </div>
</body>
</html>
