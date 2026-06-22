<?php
function read_json_file(string $path, $default = []) {
    if (!file_exists($path)) {
        return $default;
    }

    $json = file_get_contents($path);
    $data = json_decode($json, true);

    return json_last_error() === JSON_ERROR_NONE ? $data : $default;
}

function e(?string $value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function asset_url(string $path): string {
    return $path;
}