<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
    @vite(['resources/css/app.css'])
</head>

<body class="font-sans antialiased " x-data="{hide: true}" >
    <div class="bg-gray-50">
        <div class="w-full flex items-center justify-center ">
            <div class="relative w-full">
                <header class="sticky top-0 z-10 ">
                    <div class=" font-sans w-full m-0">
                        <div class="bg-white drop-shadow">
                            <div class="px-4 relative overflow-hidden">
                                <div class="flex items-center justify-between relative h-[100%]">
                                    <a class="" href="/">
                                        <img src="Logo.jpg" alt="" class="w-auto h-24 object-cover">
                                    </a>
                                    {{-- <div></div> --}}

                                    <div class="hidden sm:flex sm:items-center">
                                        <a href="#"
                                            class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8]">Home</a>
                                        <a href="/#services"
                                            class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8]">Services</a>
                                        <a href="/#explore_plan"
                                            class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8]">Explore Plan</a>
                                        <a href="/#booking_flight"
                                            class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8]">Booking Flight</a>
                                        <a href="/#transportation"
                                            class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8]">Transportation</a>
                                        <a href="/#recomendation"
                                            class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8]">Overall Recommendations</a>
                                        <a href="/#aboutus"
                                            class="text-gray-800 text-sm font-semibold hover:text-white p-8 hover:bg-[#38bdf8]">About
                                            Us</a>
                                    </div>

                                    <div class="hidden sm:flex sm:items-center ">
                                        @auth
                                            <a href="{{ route('system.user.home') }}">
                                                <h1 class="text-md font-2xl hover:text-white hover:bg-slate-400 px-4 py-2">
                                                    Dashboad
                                                </h1>
                                            </a>
                                        @else
                                            <a href="/login"
                                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign
                                                in</a>
                                            <a href="/register"
                                                class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign
                                                up</a>
                                        @endauth

                                    </div>

                                    <div class="sm:hidden cursor-pointer" x-on:click="hide=!hide" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600"
                                            viewBox="0 0 24 24">
                                            <path fill="black"
                                                d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="block bg-white border-t-2 py-2 " x-show="!hide">
                                    <div class="flex flex-col gap-4">
                                        <a href="#"
                                            class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Home</a>
                                        <a href="#services"
                                            class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Services</a>
                                        <a href="#explore_plan" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Explore Plan</a>
                                        <a href="#booking_flight" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Booking Flight</a>
                                        <a href="#transportation"
                                            class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Transportation</a>
                                        <a href="#recomendation"
                                            class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Overall Recommendations</a>
                                        <a href="#aboutus"
                                            class="text-gray-800 text-sm font-semibold hover:text-purple-600">About
                                            Us</a>
                                        <div class="flex justify-between items-center border-t-2 pt-2">
                                            <a href="/login"
                                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign
                                                in</a>
                                            <a href="/register"
                                                class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign
                                                up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <main class="mt-0">
                    <div class="hidden" style="height: 100px;" id="home"></div>
                    <x-carousel></x-carousel>

                    <br />
                    <div style="height: 20px;" id="plans"></div>
                    <div class="mt-[10rem]" id="services">
                        <div class="lg:flex lg:justify-center lg:items-center">
                            <div class="mx-8">

                                <div class="mb-8">
                                    <h3 class="text-center font-black text-2xl font-serif lg:text-4xl">Explore, Experience, and
                                        Enjoy Cambodia</h3>
                                </div>

                                {{-- <div class="inline-block h-[120px] min-h-[1em] w-[3px] mx-8 self-stretch  bg-black">
                                </div> --}}
                                <blockquote class="text-center font-serif text-slate-600">"Your journey starts
                                    here—plan, explore, and connect with the best of Cambodia through trusted guides,
                                    transport options, and real feedback."</blockquote>
                            </div>
                        </div>
                        <div class="mt-20 ">
                            <div class="mx-8">

                                <div class="mb-8">
                                    <h3 class="text-center font-black text-2xl font-serif">OUR SERVICES</h3>
                                </div>
                            </div>
                            <div class="flex justify-evenly flex-wrap flex-col lg:flex-row lg:gap-4">

                                <div class="w-full flex items-center p-8 gap-6 border shadow lg:w-1/4">
                                    <img src="location.png" alt="" class="w-14 h-14 mb-2">
                                    <div class="flex flex-col">
                                        <h1 class="font-black mb-4">Destination Recommendations</h1>
                                        <p class="text-slate-600 text-sm">Discover the top places to visit across
                                            Cambodia’s
                                            25 provinces. From bustling cities to serene countryside, we provide curated
                                            recommendations to enhance your travel experience.</p>
                                    </div>
                                </div>

                                <div class="w-full flex items-center p-8 gap-6 border shadow lg:w-1/4">
                                    <img src="hotel.png" alt="" class="w-14 h-14 mb-2">
                                    <div class="flex flex-col">
                                        <h1 class="font-black mb-4">Hotel Listings</h1>
                                        <p class="text-slate-600 text-sm">Find the perfect accommodation for your stay.
                                            Our detailed hotel listings include ......</p>
                                    </div>
                                </div>
                                <div class="w-full flex items-center p-8 gap-6 border shadow lg:w-1/4">
                                    <img src="restaurent.jpg" alt="" class="w-14 h-14 mb-2">
                                    <div class="flex flex-col">
                                        <h1 class="font-black mb-4">Restaurant Guides</h1>
                                        <p class="text-slate-600 text-sm">Savor the best dining experiences with our
                                            curated rest......</p>
                                    </div>
                                </div>
                                <div class="w-full flex items-center p-8 gap-6 border shadow lg:w-1/4">
                                    <img src="film.png" alt="" class="w-14 h-14 mb-2">
                                    <div class="flex flex-col">
                                        <h1 class="font-black mb-4">Video Tours</h1>
                                        <p class="text-slate-600 text-sm">Immerse yourself in Cambodia’s beauty with
                                            our
                                            exclusive video tours. Each destination, hotel, and restaurant comes with a
                                            video to give you a preview before you go.</p>
                                    </div>
                                </div>

                                <div class="w-full flex items-center p-8 gap-6 border shadow lg:w-1/4">
                                    <img src="ratings.png" alt="" class="w-14 h-14 mb-2">
                                    <div class="flex flex-col">
                                        <h1 class="font-black mb-4">Feedback & Reviews</h1>
                                        <p class="text-slate-600 text-sm">Share your experiences and help others make
                                            informed decisions. Our feedback option allows you to leave reviews and
                                            ratings
                                            for the places you’ve visited.</p>
                                    </div>
                                </div>

                                <div class="w-full flex items-center p-8 gap-6 border shadow lg:w-1/4">
                                    <img src="lamp.png" alt="" class="w-14 h-14 mb-2">
                                    <div class="flex flex-col">
                                        <h1 class="font-black mb-4">Travel Tips & Advice</h1>
                                        <p class="text-slate-600 text-sm">Access helpful travel tips and advice to make
                                            your journey smoother and more enjoyable. From local customs to travel
                                            safety,
                                            we provide essential information for a successful trip.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- <div style="height: 10px;" id="guides"></div> --}}
                    {{-- <div class="mt-[12rem]">
                        <div class="flex justify-center">
                            <div class="w-1/2 flex items-center justify-center flex-col">
                                <div class="relative w-full flex justify-center items-center mb-4">
                                    <h3 class="text-center font-black text-2xl font-serif">Choose your best Guide</h3>
                                </div>
                                <p class="text-center font-serif text-start text-slate-600 tracking-wide">Travel stress
                                    - free with fast, affordable, and trusted local rides</p>
                            </div>
                        </div>
                        <div class="flex justify-evenly items-center mt-20 mx-[20rem]">
                            <div>
                                <img src="profile.jpg" alt="" class="w-32 h-auto rounded-2xl">
                                <h1 class="text-center font-bold mt-2">Ra vei</h1>
                            </div>
                            <div>
                                <img src="profile.jpg" alt="" class="w-32 h-auto rounded-2xl">
                                <h1 class="text-center font-bold mt-2">RA</h1>
                            </div>
                            <div>
                                <img src="profile.jpg" alt="" class="w-32 h-auto rounded-2xl">
                                <h1 class="text-center font-bold mt-2">TY</h1>
                            </div>
                        </div>
                        <div class="flex justify-evenly items-center mt-20 mx-[20rem]">
                            <div>
                                <img src="profile.jpg" alt="" class="w-32 h-auto rounded-2xl">
                                <h1 class="text-center font-bold mt-2">JOJO</h1>
                            </div>
                            <div>
                                <img src="profile.jpg" alt="" class="w-32 h-auto rounded-2xl">
                                <h1 class="text-center font-bold mt-2">PI</h1>
                            </div>
                            <div>
                                <img src="profile.jpg" alt="" class="w-32 h-auto rounded-2xl">
                                <h1 class="text-center font-bold mt-2">NY</h1>
                            </div>
                        </div>

                    </div> --}}


                    <div style="height: 10px;" id="explore_plan"></div>
                    <div class="mt-[12rem]">
                        <div class="flex justify-center">
                            <div class="flex items-center justify-center flex-col mx-8">
                                <div class="relative w-full flex justify-center items-center mb-6">
                                    <h3 class="text-center font-black text-2xl font-serif">Explore-Plan</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center flex-col lg:flex-row lg:gap-4">
                            <div class="flex gap-4 p-4   rounded w-full justify-evenly border shadow lg:w-1/4">
                                <img src="/generate_plans.jpg" alt="" class="w-24 h-24 rounded-2xl">
                                <div class="flex flex-col items-start justify-evenly">
                                    <h1 class="font-bold">Plan Generate</h1>
                                    <button
                                        class="font-semibold border px-4 py-1 rounded hover:shadow-md flex items-center">
                                        QuickPlan
                                        <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex gap-4 p-4   rounded w-full justify-evenly border shadow lg:w-1/4">
                                <img src="/photography.png" alt="" class="w-24 h-24 rounded-2xl">
                                <div class="flex flex-col items-start justify-evenly">
                                    <h1 class="font-bold">Tourist Guide</h1>
                                    <button
                                        class="font-semibold border px-4 py-1 rounded hover:shadow-md flex items-center">
                                        Review
                                        <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div></div>
                        </div>
                    </div>

                    <div style="height: 10px;" id="booking_flight"></div>
                    <div class="mt-[12rem]">
                        <div class="flex justify-center">
                            <div class="flex items-center justify-center flex-col mx-8">
                                <div class="relative w-full flex justify-center items-center mb-6">
                                    <h3 class="text-center font-black text-2xl font-serif">Booking flight</h3>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 lg:flex-col lg:gap-4 lg:justify-center lg:items-center lg:flex">
                            <div class="lg:w-1/4">
                                <label for="member_amount"
                                    class="block mb-2 text-sm font-bold text-gray-900 ">From</label>
                                <div class="relative">
                                    <input type="text" name="member_amount"
                                        class="pl-10 border-b-2 text-gray-900 bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-none"
                                        placeholder="Name of city" required />
                                    <svg class="absolute inset-0 top-1  h-8 w-8 text-red-500" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="11" r="3" />
                                        <path
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-3 lg:w-1/4">
                                <label for="member_amount"
                                    class="block mb-2 text-sm font-bold text-gray-900 ">To</label>
                                <div class="relative">
                                    <input type="text" name="member_amount"
                                        class="pl-10 border-b-2 text-gray-900 bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-none"
                                        placeholder="Name of city" required />
                                    <svg class="absolute inset-0 top-1  h-8 w-8 text-red-500" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="11" r="3" />
                                        <path
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-3 lg:w-1/4">
                                <label for="member_amount" class="block mb-2 text-sm font-bold text-gray-900 ">Start
                                    date</label>
                                <div class="relative">
                                    <input type="date" name="member_amount"
                                        class="pl-10 border-b-2 text-gray-900 bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-none"
                                        placeholder="Name of city" required />
                                    <svg class="h-8 w-8 text-red-500 absolute inset-0 top-1" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="5" width="16" height="16" rx="2" />
                                        <line x1="16" y1="3" x2="16" y2="7" />
                                        <line x1="8" y1="3" x2="8" y2="7" />
                                        <line x1="4" y1="11" x2="20" y2="11" />
                                        <line x1="10" y1="16" x2="14" y2="16" />
                                        <line x1="12" y1="14" x2="12" y2="18" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-3 lg:w-1/4">
                                <label for="member_amount" class="block mb-2 text-sm font-bold text-gray-900 ">End
                                    date</label>
                                <div class="relative">
                                    <input type="date" name="member_amount"
                                        class="pl-10 border-b-2 text-gray-900 bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-none"
                                        placeholder="Name of city" required />
                                    <svg class="h-8 w-8 text-red-500 absolute inset-0 top-1" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="5" width="16" height="16" rx="2" />
                                        <line x1="16" y1="3" x2="16" y2="7" />
                                        <line x1="8" y1="3" x2="8" y2="7" />
                                        <line x1="4" y1="11" x2="20" y2="11" />
                                        <line x1="10" y1="16" x2="14" y2="16" />
                                        <line x1="12" y1="14" x2="12" y2="18" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-3 lg:w-1/4">
                                <label for="member_amount"
                                    class="block mb-2 text-sm font-bold text-gray-900 ">Adults</label>
                                <div class="relative">
                                    <input type="number" name="member_amount"
                                        class="pl-10 border-b-2 text-gray-900 bg-gray-50 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-none"
                                        placeholder="3" required />
                                </div>
                            </div>
                            <div class="mt-3 flex justify-end">
                                <button
                                    class="font-semibold border px-4 py-2 rounded hover:shadow-md flex items-center bg-green-500 text-white">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div style="height: 10px;" id="transportation"></div>
                        <div class="mt-[12rem]">
                            <div class="flex justify-center">
                                <div class="flex items-center justify-center flex-col mx-8">
                                    <div class="relative w-full flex justify-center items-center mb-4">
                                        <h3 class="text-center font-black text-2xl font-serif">Transportation</h3>
                                    </div>
                                    <p class="text-center font-serif text-start text-slate-600 tracking-wide">Travel
                                        stress
                                        - free with fast, affordable, and trusted local rides</p>
                                </div>
                            </div>
                            <div class="flex justify-center items-center mt-12 flex-wrap gap-4 lg:flex-row lg:gap-16">
                                <div>
                                    <img src="grab.jpg" alt="" class="w-24 h-24">
                                    <h1 class="text-center text-xs font-bold mt-2 ">GRAB</h1>
                                </div>
                                <div>
                                    <img src="passapp.jpg" alt="" class="w-24 h-24 rounded-2xl">
                                    <h1 class="text-center text-xs font-bold mt-2">PASSAPP</h1>
                                </div>
                                <div>
                                    <img src="lmcard.jpg" alt="" class="w-24 h-24 rounded-2xl">
                                    <h1 class="text-center text-xs font-bold mt-2">LMCAR</h1>
                                </div>
                                <div>
                                    <img src="tada.png" alt="" class="w-24 h-24 rounded-2xl">
                                    <h1 class="text-center text-xs font-bold mt-2">TADA</h1>
                                </div>
                                <div>
                                    <img src="larita.jpg" alt="" class="w-24 h-24 rounded-2xl">
                                    <h1 class="text-center text-xs font-bold mt-2">LARITA</h1>
                                </div>
                                <div>
                                    <img src="varakbuntham.jpg" alt="" class="w-24 h-24 rounded-2xl">
                                    <h1 class="text-center text-xs font-bold mt-2">VIRAK BUNTHAM</h1>
                                </div>
                            </div>
                        </div>

                        <div style="height: 10px;" id="recomendation"></div>
                        <div class="mt-[12rem]">
                            <div class="flex justify-center">
                                <div class="flex items-center justify-center flex-col mx-8">
                                    <div class="relative w-full flex justify-center items-center mb-4">
                                        <h3 class="text-center font-black text-2xl font-serif">Overall Recommendations
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:flex lg:justify-center lg:gap-8">
                                <div class="grid grid-cols-2 items-center justify-evenly flex-col border shadow lg:w-1/6 lg:p-8 lg:flex lg:justify-center lg:items-center ">
                                    <div class="flex gap-4 p-4  rounded w-full justify-evenly">
                                        <img src="/culture.jpg" alt=""
                                            class="w-24 h-24 object-cover rounded-2xl">
                                        <div class="flex flex-col items-start justify-evenly lg:hidden">
                                        </div>
                                    </div>
                                    <h1 class="font-bold text-xl font-serif">Culture</h1>
                                </div>
                                <div class="grid grid-cols-2 items-center justify-evenly flex-col border shadow lg:w-1/6 lg:p-8 lg:flex lg:justify-center lg:items-center">
                                    <div class="flex gap-4 p-4   rounded w-full justify-evenly">
                                        <img src="/dresscode.jpg" alt=""
                                            class="w-24 h-24 object-cover rounded-2xl">
                                        <div class="flex flex-col items-start justify-evenly lg:hidden">
                                        </div>
                                    </div>
                                    <h1 class="font-bold text-xl font-serif">Dress code</h1>
                                </div>
                                <div class="grid grid-cols-2 items-center justify-evenly flex-col border shadow lg:w-1/6 lg:p-8 lg:flex lg:justify-center lg:items-center">
                                    <div class="flex gap-4 p-4   rounded w-full justify-evenly">
                                        <img src="/passport.jpg" alt=""
                                            class="w-24 h-24 object-cover rounded-2xl">
                                        <div class="flex flex-col items-start justify-evenly lg:hidden">
                                        </div>
                                    </div>
                                    <h1 class="font-bold text-xl font-serif">Visa requirment</h1>
                                </div>
                            </div>
                        </div>

                        <div style="height: 10px;" id="aboutus"></div>
                        <div class="mt-[12rem]">
                            <div class="flex justify-center">
                                <div class="flex items-center justify-center flex-col mx-8">
                                    <div class="relative w-full flex justify-center items-center mb-4">
                                        <h3 class="text-center font-black text-2xl font-serif">About us</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-black rounded font-mono p-8 lg:flex lg:justify-around">
                                <div class="lg:flex lg:justify-center lg:w-[60%]">
                                    <p class="text-white text-gray-400 text-sm lg:text-lg">
                                        <span class="mb-3 inline-block">
                                            Welcome to Jenh Domner, where every journey becomes a memorable experience. We
                                            are dedicated to providing you with seamless, convenient, and enjoyable travel
                                            options, whether you’re exploring your city or traveling across the country.
                                        </span>
                                        <span class="mb-3 inline-block">
                                            Our mission is to connect people to the places they love while ensuring comfort,
                                            safety, and satisfaction every step of the way. We believe that getting there
                                            should be as enjoyable as the destination itself.
                                        </span>
                                        <br/>

                                        <span class="mb-3 inline-block">
                                            At Jenh Domner, we value community, trust, and innovation. That’s why we
                                            continuously work to enhance our services, listening closely to your needs and
                                            always striving to exceed your expectations. Your stories and feedback drive our
                                            commitment to improving and evolving.
                                        </span>
                                        <br/>
                                    </p>
                                </div>
                                <hr><br>
                                <div>
                                    <div class="text-white text-gray-400 text-sm">
                                        <p class="text-lg font-bold lg:text-3xl">Contact us</p>
                                        <ul class="lg:text-md">
                                            <li>Phone: +855 96 698 5122</li>
                                            <li>Email: Jenhdomner@gmail.com</li>
                                            <li>Address: st. 5 Phnom Penh, Cambodia </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="text-white text-gray-400 text-sm mb-3">
                                        <p class="text-lg font-bold lg:text-3xl">Follow Us</p>
                                        <ul class="lg:text-md">
                                            <li>Facebook: facebook.com/JenhDomner</li>
                                            <li>Instagram: instagram.com/JenhDomner</li>
                                            <li>Twitter: twitter.com/JenhDomner</li>
                                            <li>LinkedIn: linkedin.com/company/JenhDomner</li>
                                        </ul>
                                    </div>
                                    <hr class="lg:hidden"><br>
                                </div>

                                <div class="text-white text-gray-400 text-sm mb-3">
                                    <p class="text-lg font-bold mb-3 lg:text-3xl">Quick Links</p>
                                    <ul class="lg:text-md">
                                        <li>Home</li>
                                        <li>About Us</li>
                                        <li>Services</li>
                                        <li>Products</li>
                                        <li>Blog</li>
                                        <li>FAQs</li>
                                        <li>Contact Us</li>
                                        <li>Feedback</li>
                                    </ul>
                                    <p class="mt-3 lg:text-lg">Copyright Notice</p>
                                    <p>&copy; 2024 Jenh Domner. All rights reserved.</p>
                                </div>
                            </div>
                        </div>

                </main>

                {{-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                </footer> --}}
            </div>
        </div>
    </div>
</body>

</html>
