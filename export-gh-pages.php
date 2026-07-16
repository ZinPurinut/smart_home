<?php
/**
 * Export Laravel pages to static HTML for GitHub Pages.
 * Usage: php export-gh-pages.php
 */

define('LARAVEL_START', microtime(true));
require __DIR__ . '/vendor/autoload.php';

$ghBase  = 'https://zinpurinut.github.io/smart_home';
$ghPath  = '/smart_home';

// Set before app boots (ASSET_URL controls Vite asset paths)
putenv("ASSET_URL={$ghBase}");
$_ENV['ASSET_URL'] = $ghBase;

$app    = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$pages = [
    '/'         => 'index.html',
    '/company'  => 'company/index.html',
    '/dealer'   => 'dealer/index.html',
    '/training' => 'training/index.html',
];

// Shell pages ของทุกProduct
foreach (array_keys(require __DIR__ . '/config/categories.php') as $slug) {
    $pages["/products/{$slug}"] = "products/{$slug}/index.html";
}

$docsDir = __DIR__ . '/docs';

foreach ($pages as $url => $outFile) {
    $request  = Illuminate\Http\Request::create($url, 'GET');
    $response = $kernel->handle($request);
    $html     = $response->getContent();

    // Fix all internal links: replace localhost origin with GitHub Pages base
    // e.g. https://localhost/company → https://zinpurinut.github.io/smart_home/company
    $html = str_replace(
        ['https://localhost', 'http://localhost'],
        $ghBase,
        $html
    );

    // Fix any remaining root-relative hrefs that are ours (not external)
    // e.g. href="/" → href="/smart_home/" and href="/images/" → href="/smart_home/images/"
    $html = preg_replace(
        '~(href|src)="/((?!smart_home|smart_home|http)[^"]*)"~',
        '$1="' . $ghPath . '/$2"',
        $html
    );

    $out = $docsDir . '/' . $outFile;
    if (!is_dir(dirname($out))) {
        mkdir(dirname($out), 0755, true);
    }
    file_put_contents($out, $html);
    echo "  OK  docs/{$outFile}\n";

    $kernel->terminate($request, $response);
}

echo "\nDone!\n";
