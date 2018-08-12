resources/views/auth/emails/verification.blade.php
Klik link berikut untuk melakukan aktivasi akun Larapus:
<a href="{{ $link = url('auth/verify', $token).'?email='.urlencode($user->email) }}"> {{ $link }} </a>