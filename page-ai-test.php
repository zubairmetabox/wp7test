<?php
/*
Template Name: AI Test Landing Page
Template Post Type: page
*/
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Custom Landing Page Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans">

    <section class="relative overflow-hidden pt-24 pb-20 lg:pt-32 lg:pb-28">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <span class="inline-flex items-center gap-2 rounded-full bg-blue-500/10 px-4 py-1.5 text-sm font-medium text-blue-400 ring-1 ring-inset ring-blue-500/20 mb-6">
                Deployment Pipeline Active 🚀
            </span>
            <h1 class="mx-auto max-w-4xl text-5xl font-extrabold tracking-tight text-white sm:text-7xl bg-clip-text text-transparent bg-gradient-to-r from-white via-slate-200 to-blue-400">
                Automated Git-to-cPanel Deployment Workspace
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-400">
                If you are reading this on your live site, your setup is officially complete. You can now prompt AI tools locally, push code to GitHub, and watch your changes deploy instantly.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 transition-all focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                    Explore Dashboard
                </a>
                <a href="#" class="text-sm font-semibold leading-6 text-white hover:text-slate-300 transition-all">
                    View Documentation <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <hr class="border-slate-800 max-w-7xl mx-auto px-6">

    <section class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-blue-400">Deploy Faster</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Everything you need to build custom structures</p>
            </div>
            
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col bg-slate-800/40 rounded-2xl p-8 border border-slate-800 hover:border-slate-700 transition-all">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <span class="text-2xl">🤖</span> Local AI Generation
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-slate-400">
                            <p class="flex-auto">Write clean layouts, custom widgets, or advanced functions right from your local editor interface seamlessly.</p>
                        </dd>
                    </div>
                    <div class="flex flex-col bg-slate-800/40 rounded-2xl p-8 border border-slate-800 hover:border-slate-700 transition-all">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <span class="text-2xl">📦</span> Version Control Tracking
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-slate-400">
                            <p class="flex-auto">GitHub tracks all your system histories cleanly. Revert files, review code, or collaborate safely without breaking production environments.</p>
                        </dd>
                    </div>
                    <div class="flex flex-col bg-slate-800/40 rounded-2xl p-8 border border-slate-800 hover:border-slate-700 transition-all">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <span class="text-2xl">⚡</span> Automated Syncing
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-slate-400">
                            <p class="flex-auto">cPanel's background engine catches hooks cleanly, meaning code updates execute dynamically without breaking server workflows.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

</body>
</html>

<?php
get_footer();
?>