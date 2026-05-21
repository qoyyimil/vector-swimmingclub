<?php

// ====================================================================
// 1. STRUKTUR HALAMAN DEPAN (PUBLIC - TANPA LOGIN)
// ====================================================================
$publicPages = [
    // Format: ['NamaController', 'URL-nya']
    ['Dashboard', ''],
    ['Kategori', 'kategori'],
    ['Venue', 'venue'],
    ['Galeri', 'galeri'],
    ['TrackRecord', 'track-record'],
    ['Contact', 'contact']
];

foreach ($publicPages as $page) {
    $f = "\App\Controllers\\" . $page[0];
    $routes->get('/' . $page[1], "$f::index");
}


// ====================================================================
// 2. STRUKTUR HALAMAN ADMIN (MANAGEMENT DATA - MANAGEMENT CENTRALIZED)
// ====================================================================
$adminFeatures = [
    // Format: ['NamaGrup', 'PrefixURL/', [ ['NamaFitur', 'URLFitur'] ]]
    ['Konten', 'admin/', [
        ['ManageKategori', 'kategori'],
        ['ManageVenue', 'venue'],
        ['ManageGaleri', 'galeri'],
        ['ManageTrackRecord', 'track-record']
    ]]
];

foreach ($adminFeatures as $feature) {
    $feature_group = "\App\Controllers\Admin\\$feature[0]";    
    $prefix        = $feature[1];
    $feature_names = $feature[2];
    
    foreach ($feature_names as $feature_name) {
        $f = "$feature_group\\$feature_name[0]";
        
        $routes->group($prefix . $feature_name[1], function ($routes) use ($f) {
            $routes->get('data',                 "$f::index");         // List data untuk admin
            $routes->get('tambah',               "$f::create_page");   // Form tambah data
            $routes->post('submittambah',        "$f::create");        // Eksekusi simpan
            $routes->get('edit/(:segment)',      "$f::update_page/$1"); // Form edit data
            $routes->post('submitedit/(:segment)', "$f::update/$1");    // Eksekusi update
            $routes->delete('hapus/(:segment)',  "$f::delete/$1");     // Eksekusi hapus
        });
    }
}