# XSS-FInder
Payloads Array:

Defines an array $payloads containing example XSS payloads:
<script>alert("XSS")</script>
<img src="x" onerror="alert('XSS')">
<body onload="alert('XSS')">
Loop through Payloads:

Uses a foreach loop to iterate over each element ($payload) in the $payloads array.
Sanitization:

Uses htmlspecialchars() function to convert special HTML characters in the $payload string to their respective HTML entities.
This prevents the browser from interpreting the HTML tags and attributes as code, thereby neutralizing the XSS attack.
Output:

Prints each sanitized payload using echo.
Concatenates "Generated payload: " with the sanitized payload and <br> for line break in HTML output.
