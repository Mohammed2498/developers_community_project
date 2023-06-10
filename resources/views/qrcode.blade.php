<h1>User Profile</h1>

<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<img src="{{ $qrCodeImageUrl }}" alt="QR Code">
