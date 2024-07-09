<?php
$payloads = [
    '<script>alert("XSS")</script>',
    '<img src="x" onerror="alert(\'XSS\')">',
    '<body onload="alert(\'XSS\')">',
];

foreach ($payloads as $payload) {
    echo "Generated payload: " . htmlspecialchars($payload) . "<br>";
}
?>
