<?php

// Home
Breadcrumbs::register('home.index', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home.index'));
});

Breadcrumbs::register('snippets.index', function($breadcrumbs) {
    $breadcrumbs->parent('home.index');
    $breadcrumbs->push('Snippets', route('snippets.index'));
});

Breadcrumbs::register('snippets.create', function($breadcrumbs) {
    $breadcrumbs->parent('snippets.index');
    $breadcrumbs->push('New', route('snippets.create'));
});

Breadcrumbs::register('snippets.show', function($breadcrumbs, $snippet) {
    $breadcrumbs->parent('snippets.index');
    $breadcrumbs->push($snippet->title, route('snippets.show', $snippet->id));
});

Breadcrumbs::register('snippets.edit', function($breadcrumbs, $snippet) {
    $breadcrumbs->parent('snippets.show', $snippet);
    $breadcrumbs->push('Edit', route('snippets.edit', $snippet->id));
});

Breadcrumbs::register('snippets.history', function($breadcrumbs, $snippet) {
    $breadcrumbs->parent('snippets.edit', $snippet);
    $breadcrumbs->push('History', route('snippets.edit', $snippet->id));
});

Breadcrumbs::register('output.index', function($breadcrumbs) {
    $breadcrumbs->parent('home.index');
    $breadcrumbs->push('Lastest Output', route('output.index'));
});

Breadcrumbs::register('profile.index', function($breadcrumbs) {
    $breadcrumbs->parent('home.index');
    $breadcrumbs->push('Profile', route('profile.index'));
});

// Auth
Breadcrumbs::register('login', function($breadcrumbs) {
    $breadcrumbs->parent('home.index');
    $breadcrumbs->push('Login', route('login'));
});

Breadcrumbs::register('register', function($breadcrumbs) {
    $breadcrumbs->parent('home.index');
    $breadcrumbs->push('Register', route('register'));
});