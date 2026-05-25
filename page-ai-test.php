<?php
/*
Plugin Name: AI Test Landing Page Deployer
Description: Instantly deploys our AI landing page test.
Version: 1.0
Author: AI Assistant
*/

// 1. Register the template inside the WordPress Page Editor dropdown
add_filter('theme_page_templates', function($templates) {
    $templates['ai-test-plugin-template'] = 'AI Test Landing Page';
    return $templates;
});

// 2. Load the custom HTML layout when this template is selected
add_filter('template_include', function($template) {
    global $post;
    if (isset($post) && get_post_meta($post->ID, '_wp_page_template', true) == 'ai-test-plugin-template') {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>AI Custom Landing Page</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-900 text-white antialiased">
            <div class="max-w-4xl mx-auto text-center py-20 px-4">
                <h1 class="text-5xl font-black tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400 mb-6">
                    Deployment Pipeline: SUCCESS!
                </h1>
                <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                    Your automated Git-to-cPanel system is fully functional. This page layout was built completely via AI and pushed seamlessly from GitHub.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition">Get Started</a>
                    <a href="#" class="border border-gray-700 hover:border-gray-600 text-gray-300 font-bold py-3 px-6 rounded-lg transition">Documentation</a>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit; // Stop WordPress from loading the rest of the theme
    }
    return $template;
});