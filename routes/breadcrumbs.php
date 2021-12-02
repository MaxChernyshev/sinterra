<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\JobType;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('mainPage'));
});


Breadcrumbs::for('jobtypes', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Виды работ', route('jobtypes.index'));
});


Breadcrumbs::for('jobtype', function (BreadcrumbTrail $trail, JobType $jobType) {
    $trail->parent('jobtypes');
    $trail->push($jobType->title, route('jobtypes.show', $jobType));
});

