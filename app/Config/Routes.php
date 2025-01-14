<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->get('/logout', 'Home::logout');
$routes->post('/storeAkun', 'Home::storeAkun');
$routes->get('/dashboardPekerja', 'DashboardController::indexx');
$routes->post('/storeBpjskes', 'BPJSKesController::storeBpjskes');
$routes->post('/storeAktivasi', 'BPJSKesController::storeAktivasi');
$routes->post('/storeBpjskesOrtu', 'BPJSKesController::storeBpjskesOrtu');
$routes->post('/storeResetJKN', 'BPJSKesController::storeResetJKN');
$routes->post('/storekoreksiBpjskes', 'BPJSKesController::storekoreksiBpjskes');
$routes->post('/storenonaktifBpjs', 'BPJSKesController::storenonaktifBpjs');
$routes->post('/storekoreksiBpjstk', 'BPJSKesController::storekoreksiBpjstk');
$routes->post('/storegabungSaldo', 'BPJSKesController::storegabungSaldo');
$routes->post('/storeResetJMO', 'BPJSKesController::storeResetJMO');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/report', 'ReportController::index');
    $routes->get('/account', 'UserController::index');
    $routes->add('/updateAkun/(:segment)', 'UserController::updateAkun/$1');
    $routes->get('/hapusAkun/(:segment)', 'UserController::hapusAkun/$1');

    $routes->get('/detailReqKes/(:num)', 'BPJSKesController::detailReqKes/$1');
    $routes->post('/approveBpjsKes/(:segment)', 'BPJSKesController::approveBpjsKes/$1');
    $routes->post('/rejectBpjsKes/(:segment)', 'BPJSKesController::rejectBpjsKes/$1');
    
    $routes->get('/pengajuan', 'PengajuanController::index');
    $routes->get('/download-report', 'ReportController::downloadExcel');
    
    $routes->get('/pengajuanStmb', 'STMBController::index');
    $routes->post('/storeSTMB', 'STMBController::storeSTMB');
    $routes->get('/requestSTMB/(:num)', 'STMBController::requestSTMB/$1');
    $routes->get('/requestUpah/(:num)', 'STMBController::requestUpah/$1');
    $routes->post('/approveSTMB/(:segment)', 'STMBController::approveSTMB/$1');
    $routes->post('/approveHrbp/(:segment)', 'STMBController::approveHrbp/$1');
    $routes->post('/approveKlinik/(:segment)', 'STMBController::approveKlinik/$1');
    $routes->post('/approveAtasan/(:segment)', 'STMBController::approveAtasan/$1');
    $routes->post('/upahSTMB/(:segment)', 'STMBController::upahSTMB/$1');
    $routes->get('/reportSTMB', 'STMBController::reportSTMB');
    $routes->get('/dokumenSTMB/(:num)', 'STMBController::dokumenSTMB/$1');
    $routes->get('/download-report-stmb', 'STMBController::downloadExcel');
});
