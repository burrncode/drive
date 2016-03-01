<?php (defined('BASEPATH')) OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $page_title.' | '.$Settings->site_name; ?></title>
    <link rel="shortcut icon" href="<?= $assets ?>images/icon.png"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?= $assets ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>plugins/iCheck/square/green.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>plugins/redactor/redactor.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>dist/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>dist/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?= $assets ?>dist/css/home.css" rel="stylesheet" type="text/css" />
    <script src="<?= $assets ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
</head>
<body class="skin-purple-light fixed sidebar-mini">
<div class="wrapper">

    <section class="intro">
        <div class="intro-wrapper"><div class="container"><div class="intro-text"><h1 class="ng-binding">Travel <type-effect strings="cheaper|together|safer|easier|faster" class="ng-isolate-scope"><span class="typed"></span><span class="typed-cursor">|</span></type-effect></h1><p class="ng-binding">Carpool with Tripda</p></div><div class="search-offer"><form class="box ng-pristine ng-invalid ng-invalid-required"><input type="text" id="origin-place" placeholder="From: e.g. Mumbai" required="" ng-model="originPlaceField" place-detail="departureDetails" g-places-autocomplete="" min-length="3" tooltip-content="'general.place.autocomplete.tooltip' | translate" class="ng-isolate-scope ng-pristine ng-invalid ng-invalid-required" autocomplete="off"> <input type="text" id="destination-place" placeholder="To: e.g. Pune" ng-model="destinationPlaceField" place-detail="destinationDetails" g-places-autocomplete="" min-length="3" tooltip-content="'general.place.autocomplete.tooltip' | translate" class="ng-isolate-scope ng-pristine ng-valid" autocomplete="off"><div ng-switch="" on="isTouch" class="date-wrapper"><!-- ngSwitchWhen: false --><input type="text" ng-switch-when="false" class="block-level mySelectCalendar border-none ng-scope ng-pristine ng-valid hasDatepicker" id="searchDate" ng-model="searchDate.date" ui-date="departureDateOptions" placeholder="DD/MM/YYYY"><!-- ngSwitchWhen: false --><div class="icon-calendar2 ng-scope" type="text" ng-switch-when="false"></div><!-- ngSwitchWhen: true --></div><button type="button" class="search disabled" ng-class="{disabled: !isValidSearch(originPlace.address, destinationPlace.address, originPlace.lat, destinationPlace.lat, originPlace.lng, destinationPlace.lng)}" ng-disabled="!isValidSearch(originPlace.address, destinationPlace.address, originPlace.lat, destinationPlace.lat, originPlace.lng, destinationPlace.lng)" ng-click="goToSearch()" disabled="disabled"><span class="icon-search sprite-block"></span><h2 class="ng-binding">Search</h2></button> <a ng-href="/why-to-book-a-ride" ng-click="onWhyBookClick()" target="_BLANK" class="ng-binding" href="/why-to-book-a-ride">Why should I book a ride?</a></form><div class="box"><a ng-href="/offer-seats" class="button offer" href="/offer-seats"><span class="icon-offer sprite-block"></span><h2 class="ng-binding">Offer a ride</h2></a> <a ng-href="/why-to-offer-a-ride" ng-click="onWhyOfferClick()" target="_BLANK" class="ng-binding" href="/why-to-offer-a-ride">Here are some good reasons to offer a ride, for free!</a></div></div></div></div>

        <header class="main-header">
            <a href="<?= site_url(); ?>" class="logo">
                <span class="logo-mini">POS</span>
                <span class="logo-lg"><?= $Settings->site_name == 'SimplePOS' ? 'Simple<b>POS</b>' : '<img src="'.base_url('assets/uplaods/'.$Settings->logo).'" alt="'.$Settings->site_name.'" />'; ?></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <ul class="nav navbar-nav pull-left">
                    <li class="dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= $assets; ?>images/<?= $Settings->language; ?>.png" alt="<?= $Settings->language; ?>"></a>
                        <ul class="dropdown-menu">
                            <?php $scanned_lang_dir = array_map(function ($path) {
                                return basename($path);
                            }, glob(APPPATH . 'language/*', GLOB_ONLYDIR));
                            foreach ($scanned_lang_dir as $entry) { ?>
                                <li><a href="<?= site_url('pos/language/' . $entry); ?>"><img
                                            src="<?= $assets; ?>images/<?= $entry; ?>.png"
                                            class="language-img"> &nbsp;&nbsp;<?= ucwords($entry); ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="hidden-xs hidden-sm"><a href="#" class="clock"></a></li>
                        <li class="hidden-xs"><a href="<?= site_url('works'); ?>">How it works</a></li>
                        <?php if($Admin) { ?>
                        <li class="hidden-xs"><a href="<?= site_url('settings'); ?>">Login</a></li>
                        <?php } ?>
                        <li><a href="<?= site_url('login'); ?>">Login</a></li>
                        <li><a href="<?= site_url('pos'); ?>"><i class="fa fa-th"></i></a></li>

                        <?php if($loggedIn) { ?>
                        <li class="dropdown user user-menu" style="padding-right:5px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('uploads/avatars/thumbs/'.($this->session->userdata('avatar') ? $this->session->userdata('avatar') : $this->session->userdata('gender').'.png')) ?>" class="user-image" alt="Avatar" />
                                <span class="hidden-xs"><?= $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?></span>
                            </a>
                            <ul class="dropdown-menu" style="padding-right:3px;">
                                <li class="user-header">
                                    <img src="<?= base_url('uploads/avatars/'.($this->session->userdata('avatar') ? $this->session->userdata('avatar') : $this->session->userdata('gender').'.png')) ?>" class="img-circle" alt="Avatar" />
                                    <p>
                                        <?= $this->session->userdata('email'); ?>
                                        <small><?= lang('member_since').' '.$this->session->userdata('created_on'); ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= site_url('users/profile/'.$this->session->userdata('user_id')); ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </header>
    </section>

    <div class="container min-height">
        <section class="content-header">
            <h1><?= $page_title; ?></h1>
            <ol class="breadcrumb">
                <li><a href="<?= site_url(); ?>"><i class="fa fa-dashboard"></i> <?= lang('home'); ?></a></li>
                <?php
                if (isset($bc)) {
                    foreach ($bc as $b) {
                        if ($b['link'] === '#') {
                            echo '<li class="active">' . $b['page'] . '</li>';
                        } else {
                            echo '<li><a href="' . $b['link'] . '">' . $b['page'] . '</a></li>';
                        }
                    }
                }
                ?>
            </ol>
        </section>

        