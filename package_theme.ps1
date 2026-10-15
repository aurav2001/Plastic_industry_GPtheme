# Script to package clean, production-ready WordPress Theme ZIP
$sourceDir = $PSScriptRoot
$zipOutputPath = Join-Path $sourceDir "gp-theme.zip"

Write-Host "Creating clean WordPress theme package..." -ForegroundColor Cyan

# Prepare temporary staging directory
$tempBase = Join-Path ([System.IO.Path]::GetTempPath()) "gp_theme_staging"
if (Test-Path $tempBase) {
    Remove-Item -Path $tempBase -Recurse -Force
}
$themeFolder = Join-Path $tempBase "gp-theme"
New-Item -ItemType Directory -Path $themeFolder -Force | Out-Null

# Define core WordPress theme files to copy
$filesToCopy = @(
    "style.css",
    "screenshot.png",
    "index.php",
    "functions.php",
    "header.php",
    "footer.php",
    "front-page.php",
    "page.php",
    "single.php",
    "single-gp_product.php",
    "archive.php",
    "archive-gp_product.php",
    "taxonomy-gp_product_cat.php",
    "sidebar.php",
    "search.php",
    "comments.php",
    "404.php",
    "README.md",
    "favicon.svg"
)

foreach ($file in $filesToCopy) {
    $src = Join-Path $sourceDir $file
    if (Test-Path $src) {
        Copy-Item -Path $src -Destination $themeFolder -Force
        Write-Host "  + Copied $file" -ForegroundColor Gray
    }
}

# Copy directories
$dirsToCopy = @("assets", "inc", "page-templates")
foreach ($dir in $dirsToCopy) {
    $srcDir = Join-Path $sourceDir $dir
    if (Test-Path $srcDir) {
        Copy-Item -Path $srcDir -Destination $themeFolder -Recurse -Force
        Write-Host "  + Copied directory $dir/" -ForegroundColor Gray
    }
}

# Remove existing zip if present
if (Test-Path $zipOutputPath) {
    Remove-Item -Path $zipOutputPath -Force
}

# Compress into gp-theme.zip with optimal compression and standard forward slashes (required for WordPress)
Write-Host "Compressing to $zipOutputPath (WordPress-compliant forward-slash format)..." -ForegroundColor Cyan

Add-Type -AssemblyName System.IO.Compression.FileSystem
Add-Type -AssemblyName System.IO.Compression

$zipFile = [System.IO.Compression.ZipFile]::Open($zipOutputPath, [System.IO.Compression.ZipArchiveMode]::Create)
$allFiles = Get-ChildItem -Path $themeFolder -Recurse -File
$prefixLen = $tempBase.Length

foreach ($f in $allFiles) {
    $relPath = $f.FullName.Substring($prefixLen).TrimStart('\', '/')
    $entryName = $relPath.Replace('\', '/')
    [System.IO.Compression.ZipFileExtensions]::CreateEntryFromFile($zipFile, $f.FullName, $entryName, [System.IO.Compression.CompressionLevel]::Optimal) | Out-Null
}

$zipFile.Dispose()

# Clean up temporary staging directory
Remove-Item -Path $tempBase -Recurse -Force

# Verify ZIP contents
Add-Type -AssemblyName System.IO.Compression.FileSystem
$zip = [System.IO.Compression.ZipFile]::OpenRead($zipOutputPath)
$entryCount = $zip.Entries.Count
$firstFew = $zip.Entries | Select-Object -First 8 | ForEach-Object { $_.FullName }
$zip.Dispose()

$zipSizeMB = [math]::Round(((Get-Item $zipOutputPath).Length / 1MB), 2)
Write-Host "Success! Theme zip created: $zipOutputPath ($zipSizeMB MB, $entryCount files)" -ForegroundColor Green
Write-Host "Sample Entries:" -ForegroundColor Yellow
$firstFew | ForEach-Object { Write-Host "  $_" -ForegroundColor Gray }
