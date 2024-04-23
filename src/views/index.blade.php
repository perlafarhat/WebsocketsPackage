<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusher Test</title>
    <!-- Include Pusher library -->
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // Enable logging to console
        Pusher.logToConsole = true;

        var pusher = new Pusher('2c6b69d935daddf91a11', {
            cluster: 'ap2',
            encrypted: true
        });

        // Subscribe to the channel
        var channel = pusher.subscribe('export-progress');

        // Bind to the event
        channel.bind('CsvExportProgressEventt', function(data) {
    console.log('Received event:', data);
});

    </script>
</head>
<body>
    <h1>Pusher Test</h1>
    <!-- Content -->
</body>
</html>
