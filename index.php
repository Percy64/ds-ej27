<?php

require_once 'modelo/proveedor.php';
require_once 'modelo/producto.php';

$pv1=new proveedor();
$pv1->id=1;
$pv1->nombre='juan';
$pv1->cuil=11;
$pv1->direccion='messi';
$pv1->telefono=111;

$pv2=new proveedor();
$pv2->id=2;
$pv2->nombre='pedro';
$pv2->cuil=22;
$pv2->direccion='paraguay';
$pv2->telefono=222;

$pv3=new proveedor();
$pv3->id=3;
$pv3->nombre='luis';
$pv3->cuil=33;
$pv3->direccion='dorrego';
$pv3->telefono=333;

$p=new producto();
$p->id=201;
$p->nombre='celular';
$p->codigo=201;
$p->precio=250000;
$p->marca='apple';

$p->proveedor[]=$pv1;
$p->proveedor[]=$pv2;
$p->proveedor[]=$pv3;
$p->mostrardatos();