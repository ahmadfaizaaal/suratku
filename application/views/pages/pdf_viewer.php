<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= BASE_THEME; ?>images/suratku-icon.png" type="image/x-icon">
</head>
<body>
    <iframe src="<?= base_url("v2/get-file/$action?file=" . urlencode($fileName)) . '#zoom=page-fit&navpanes=0'; ?>" style="width: 100%; height: 95vh; border: none;"></iframe>
    <!-- <iframe src="<?= $file; ?>" style="width: 100%; height: 95vh; border: none;"></iframe> -->
    <!-- <script>
        window.location.href = "<?= base_url("v2/get-file/$action?file=" . urlencode($fileName)); ?>";
    </script> -->
</body>
</html>
