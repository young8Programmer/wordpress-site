<?php
/**
 * Theme Fix Script
 * Bu script database'da theme'ni hello-elementor ga o'zgartiradi
 */

// WordPress yuklash
require_once('wp-load.php');

global $wpdb;

// Database'da theme'ni o'zgartirish
$result = $wpdb->update(
    $wpdb->options,
    array('option_value' => 'hello-elementor'),
    array('option_name' => 'stylesheet')
);

$result2 = $wpdb->update(
    $wpdb->options,
    array('option_value' => 'hello-elementor'),
    array('option_name' => 'template')
);

if ($result !== false || $result2 !== false) {
    echo "✅ Theme muvaffaqiyatli o'zgardi: hello-elementor\n";
    echo "🔗 Endi saytni yangilang: <a href='" . home_url() . "'>" . home_url() . "</a>\n";
} else {
    echo "❌ Xato: Theme o'zgartirilmadi. Qo'lda qiling:\n";
    echo "SQL query:\n";
    echo "UPDATE {$wpdb->options} SET option_value = 'hello-elementor' WHERE option_name = 'stylesheet';\n";
    echo "UPDATE {$wpdb->options} SET option_value = 'hello-elementor' WHERE option_name = 'template';\n";
}

// Cache'ni tozalash
if (function_exists('wp_cache_flush')) {
    wp_cache_flush();
    echo "✅ Cache tozalandi\n";
}

