!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>

    <div>
        <h2>Email Verification</h2>

        @if (session('status') == 'verification-link-sent')
            <p>A new verification link has been sent to your email address.</p>
        @endif

        @if (session('status') == 'verified')
            <p>Your email has been successfully verified. You can now log in.</p>
        @else
            <p>If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.</p>
        @endif
    </div>

</body>
</html>
