<x-mail::message>
<!-- Bagian Logo -->
<div style="text-align: center; margin-bottom: 30px; padding: 20px; background: #f8f9fa; border-radius: 10px;">
    <img src="{{ asset('favicon.ico') }}" alt="Amanah Voice" style="max-width: 150px; height: auto;">
</div>

<!-- Salam -->
# Halo!

<!-- Pesan -->
Anda menerima email ini karena kami menerima permintaan reset password untuk akun Anda.

<!-- Tombol Reset Password -->
<div style="text-align: center; margin: 25px 0;">
    <x-mail::button :url="$actionUrl" color="primary" style="background-color: #007bff;">
    Reset Password
    </x-mail::button>
</div>

<!-- Info Kedaluwarsa -->
Tautan reset password ini akan kedaluwarsa dalam 60 menit.

<!-- Peringatan Keamanan -->
<div style="background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 5px; padding: 15px; margin: 20px 0;">
    <strong>⚠️ Penting:</strong> Jika Anda tidak meminta reset password, <strong>abaikan email ini</strong>. Akun Anda tetap aman.
</div>

<!-- Salam Penutup -->
<div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
    Salam,<br>
    <strong>Tim Amanah Voice</strong>
</div>

<!-- Subcopy -->
<x-slot:subcopy>
<div style="margin-top: 20px; padding: 15px; background: #f7fafc; border-radius: 5px; font-size: 14px;">
    <strong>Jika tombol tidak berfungsi:</strong><br>
    Salin dan tempel URL berikut ke browser Anda:<br>
    <a href="{{ $actionUrl }}" style="color: #007bff; word-break: break-all;">{{ $displayableActionUrl }}</a>
</div>
</x-slot:subcopy>
</x-mail::message>