<?php include __DIR__ . '/../src/headers/pro-helpers/button-free-pro.tpl'; ?>
<section id="buttons">
    <h2><strong>Buttons</strong></h2>
    <!--Title-->
    <h3 class="section-heading">
        Basic MDB buttons
    </h3>

    <!-- Description -->
    <p>
        MDB includes 7 predefined button styles, each serving its own semantic purpose.
    </p>

    <!--Section: Live preview-->
    <section class="section-preview">

        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>

        <!-- Default button -->
        <button type="button" class="btn btn-default waves-effect waves-light">Default</button>

        <!-- Secondary button -->
        <button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>

        <!-- Indicates a successful or positive action -->
        <button type="button" class="btn btn-success waves-effect waves-light">Success</button>

        <!-- Contextual button for informational alert messages -->
        <button type="button" class="btn btn-info waves-effect waves-light">Info</button>

        <!-- Indicates caution should be taken with this action -->
        <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>

        <!-- Indicates a dangerous or potentially negative action -->
        <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>

    </section>
    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token comment">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Primary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>

<span class="token comment">&lt;!-- Default button --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-default<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Default<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>

<span class="token comment">&lt;!-- Secondary button --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Secondary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>

<span class="token comment">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Success<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>

<span class="token comment">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Info<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>

<span class="token comment">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-warning<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Warning<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>

<span class="token comment">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-danger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Danger<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->

    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Gradient buttons
    </h3>

    <!--Section: Live preview-->
    <section class="section-preview">
        <button class="btn peach-gradient">Peach</button>
        <button class="btn purple-gradient">Purple</button>
        <button class="btn blue-gradient">Blue</button>
        <button class="btn aqua-gradient">Aqua</button>
    </section>
    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn peach-gradient<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Peach<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn purple-gradient<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Purple<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn blue-gradient<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Blue<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn aqua-gradient<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Aqua<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->




    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Outline buttons
    </h3>

    <!-- Description -->
    <p class="description">In need of a button, but not the hefty background colors they bring? Replace the default
        modifier classes with the
        <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>


    <!--Section: Live preview-->
    <section class="section-preview">

        <button type="button" class="btn btn-outline-primary waves-effect">Primary</button>
        <button type="button" class="btn btn-outline-default waves-effect">Default</button>
        <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
        <button type="button" class="btn btn-outline-success waves-effect">Success</button>
        <button type="button" class="btn btn-outline-info waves-effect">Info</button>
        <button type="button" class="btn btn-outline-warning waves-effect">Warning</button>
        <button type="button" class="btn btn-outline-danger waves-effect">Danger</button>


    </section>        <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-primary waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Primary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-default waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Default<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-secondary waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Secondary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-success waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Success<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-info waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Info<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-warning waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Warning<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-danger waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Danger<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->

    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Rounded buttons
    </h3>

    <!-- Description -->
    <p class="description">Pro version is tricked with css
        <a href="https://mdbootstrap.com/products/jquery-ui-kit/" target="_blank" class="btn btn-danger btn-sm waves-effect waves-light" role="button">MDB Pro component
            <i class="far fa-gem ml-1"></i>
        </a>
    </p>


    <!--Section: Live preview-->
    <section class="section-preview">

        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
        <button type="button" class="btn btn-default btn-rounded waves-effect waves-light">Default</button>
        <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">Secondary</button>
        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>
        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
        <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button>

    </section>
    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-primary btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Primary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-default btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Default<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Secondary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Success<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Info<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-warning btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Warning<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-danger btn-rounded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Danger<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->


    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Rounded outline buttons
    </h3>

    <!-- Description -->
    <p class="description">Pro version is tricked with css.
        <a href="https://mdbootstrap.com/products/jquery-ui-kit/" target="_blank" class="btn btn-danger btn-sm waves-effect waves-light" role="button">MDB Pro component
            <i class="far fa-gem ml-1"></i>
        </a></p>


    <!--Section: Live preview-->
    <section class="section-preview">

        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
        <button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
        <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
        <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
        <button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
        <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>

    </section>
    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-primary btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Primary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-default btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Default<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-secondary btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Secondary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-success btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Success<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-info btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Info<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-warning btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Warning<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-danger btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Danger<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->


    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Floating buttons
    </h3>

    <!-- Description -->
    <p class="description">Pro version is tricked with css.<a href="https://mdbootstrap.com/products/jquery-ui-kit/" target="_blank" class="btn btn-danger btn-sm waves-effect waves-light" role="button">MDB Pro component
            <i class="far fa-gem ml-1"></i>
        </a></p>


    <!--Section: Live preview-->
    <section class="section-preview">

        <a class="btn-floating btn-lg btn-default waves-effect waves-light"><i class="fas fa-bolt"></i></a>
        <a class="btn-floating btn-primary waves-effect waves-light"><i class="fas fa-leaf"></i></a>
        <a class="btn-floating btn-sm btn-secondary waves-effect waves-light"><i class="fas fa-star"></i></a>

    </section>
    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-primary btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Primary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-default btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Default<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-secondary btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Secondary<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-success btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Success<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-info btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Info<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-warning btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Warning<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-outline-danger btn-rounded waves-effect<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Danger<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->

    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Fixed buttons
    </h3>

    <!-- Description -->
    <p class="description">See the live example of a fixed button in the bottom right corner of this page.<br/>Pro version is tricked with css and js. <a href="https://mdbootstrap.com/products/jquery-ui-kit/" target="_blank" class="btn btn-danger btn-sm waves-effect waves-light" role="button">MDB Pro component
            <i class="far fa-gem ml-1"></i>
        </a></p>

    <!--Section: Live preview-->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px; position: fixed;">
        <a class="btn-floating btn-lg red">
            <i class="fas fa-pencil-alt"></i>
        </a>

        <ul class="list-unstyled">
            <li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
            <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
            <li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fixed-action-btn<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">bottom</span><span class="token punctuation">:</span> 45px<span class="token punctuation">;</span> <span class="token property">right</span><span class="token punctuation">:</span> 24px<span class="token punctuation">;</span></span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-floating btn-lg red<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-pencil-alt<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>

  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>list-unstyled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-floating red<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-star<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-floating yellow darken-1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-user<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-floating green<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-envelope<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-floating blue<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-shopping-cart<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->


    <div class="break-session"></div>
    <!--Title-->
    <h3 class="section-heading">
        Flat button
    </h3>

    <!-- Description -->
    <p class="description">Pro version is tricked with css<a href="https://mdbootstrap.com/products/jquery-ui-kit/" target="_blank" class="btn btn-danger btn-sm waves-effect waves-light" role="button">MDB Pro component
            <i class="far fa-gem ml-1"></i>
        </a></p>


    <!--Section: Live preview-->
    <section class="section-preview">
        <button type="button" class="btn btn-flat">Click me</button>
    </section>

    <!--Section: Live preview-->

    <!--Section: Code-->
    <section>
        <!-- mdbsnippet -->
        <div class="code-toolbar">
            <pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-flat btn-lg<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Click me<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre>
        </div>
    </section>
    <!--Section: Code-->
</section>
