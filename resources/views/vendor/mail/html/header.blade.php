@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- {{ $slot }} --}}
<img src="{{ asset('assets/images/logo-3.png') }}" class="logo" alt="CeA Contábil Logo">
@endif
</a>
</td>
</tr>
