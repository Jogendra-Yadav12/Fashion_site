<!-- reset_password_email.blade.php -->

<p>Hello,</p>

<p>You are receiving this email because we received a password reset request for your account.</p>

<p>
    Click the following link to reset your password:
    <a href="{{ route('password.reset.form', $token) }}">Reset Password</a>
</p>

<p>If you did not request a password reset, no further action is required.</p>

<p>Thank you.</p>