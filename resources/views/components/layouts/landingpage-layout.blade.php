<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RepCollect - Share Links & Track Payments</title>
    <meta name="description" content="Create custom payment links, share them anywhere, and track every payment in real-time with powerful analytics." />
    <meta name="author" content="RepCollect" />

    <meta property="og:title" content="RepCollect - Share Links & Track Payments" />
    <meta property="og:description" content="Create custom payment links, share them anywhere, and track every payment in real-time with powerful analytics." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@repcollect" />
    <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
</head>

<body>
    <livewire:ui.nav />
    {{$slot}}
</body>
</html>
