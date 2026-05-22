<?php
// Include config if not already included
if (!defined('ROOT_PATH')) {
    require_once dirname(__DIR__) . '/config.php';
}

// Default meta tags (can be overridden by individual pages)
$default_meta = [
    'title' => SITE_NAME . ' - Manage WhatsApp Groups at Scale',
    'meta_title' => SITE_NAME . ' - Manage WhatsApp Groups at Scale',
    'description' => 'Manage WhatsApp Groups at Scale for Modern Businesses',
    'og_title' => SITE_NAME . ' - Manage WhatsApp Groups at Scale',
    'og_description' => 'Manage WhatsApp Groups at Scale for Modern Businesses',
    'og_image' => BASE_URL . '/assets/images/og-image.jpg',
    'og_url' => BASE_URL,
    'twitter_title' => SITE_NAME . ' - Manage WhatsApp Groups at Scale',
    'twitter_description' => 'Manage WhatsApp Groups at Scale for Modern Businesses',
    'twitter_image' => BASE_URL . '/assets/images/twitter-image.jpg',
    'canonical' => BASE_URL
];

// Merge page-specific meta with defaults
$meta = array_merge($default_meta, $page_meta ?? []);
$json_ld = $page_json_ld ?? null;
$gtag_id = $page_gtag_id ?? 'G-Q64SDSY0Y4'; // Default GTAG ID
$extra_scripts = $page_extra_scripts ?? [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($meta['title']); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($meta['meta_title']); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <?php if (!empty($meta['canonical'])): ?>
        <link rel="canonical" href="<?php echo htmlspecialchars($meta['canonical']); ?>">
    <?php endif; ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($meta['og_url']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($meta['og_title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta['og_description']); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($meta['og_image']); ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($meta['og_url']); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($meta['twitter_title']); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta['twitter_description']); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($meta['twitter_image']); ?>">

    <?php if ($json_ld): ?>
        <!-- JSON-LD Structured Data -->
        <script type="application/ld+json">
                                        <?php echo json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
                                        </script>
    <?php endif; ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($gtag_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($gtag_id); ?>');
    </script>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/icons/favicon.png" type="image/png">

    <!-- Fonts & Styles -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons-font@v11/font/simple-icons.min.css">
    <!-- All Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/variables.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/navbar.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/mobile-menu.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/buttons.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/hero.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/features.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/why-choose.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/faq.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/security.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/automation.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/cta.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/utility.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/responsive.css">

    <!-- Page-specific extra scripts/styles -->
    <?php foreach ($extra_scripts as $script): ?>
        <?php if ($script['type'] === 'css'): ?>
            <link rel="stylesheet" href="<?php echo htmlspecialchars($script['src']); ?>">
        <?php elseif ($script['type'] === 'js'): ?>
            <script src="<?php echo htmlspecialchars($script['src']); ?>" <?php echo isset($script['async']) ? 'async' : ''; ?>
                <?php echo isset($script['defer']) ? 'defer' : ''; ?>></script>
        <?php elseif ($script['type'] === 'inline'): ?>
            <?php echo $script['content']; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</head>

<body>