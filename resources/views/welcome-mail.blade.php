<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$subject}}</title>
</head>
<body>
    <h2> {{ $subject }} </h2>
    <p> {{ $mailmessage }}</p>
    <p>Dear sir/madam,</p>

<p><p>Thank you for choosing Cable TV. To ensure the security of your account, we require you to verify your identity using a One-Time Password (OTP).</p>
<p>Your OTP is: {{ $otp }}</p>
<p>Please enter this OTP within the designated field on the website/app to complete the verification process. Please note that this OTP is valid for 5mins, after which it will expire.</p>
<p>If you did not request this OTP or suspect any unauthorized activity on your account, please contact our support team immediately at cableservice05@gmail.com .</p>
<p>Thank you for your cooperation in keeping your account secure.</p>
<p>Best regards,</p>
<p>Cable</p>
 </p>
</body>
</html>