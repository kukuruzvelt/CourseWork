<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('css/style.css') ?>">
    @section('head-content')
    @show
</head>
<body>
<div class="header">
    <div class="menu">
        <input type="checkbox" id="hmt" class="hidden-menu-ticker">
        <label class="btn-menu" for="hmt">
            <?php echo trans('messages.menu')?>
        </label>
        <ul class="hidden-menu">
            <label class="btn-menu" for="hmt">
                🠔<?php echo trans('messages.hide')?>
            </label>
            <li><a href="<?php echo '/main/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_suits')?></a>
            </li>
            <li>
                <a href="<?php echo '/formal/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_formal')?></a>
            </li>
            <li>
                <a href="<?php echo '/casual/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_casual')?></a>
            </li>
            <li>
                <a href="<?php echo '/accessories/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_accessories')?></a>
            </li>
            <li>
                <a href="<?php echo '/repair/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_repair')?></a>
            </li>
            <li>
                <a href="<?php echo '/services/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_services')?></a>
            </li>
            <li><a href=""><?php echo trans('messages.menu_projects')?></a></li>
            <li><a href=""><?php echo trans('messages.menu_shop')?></a></li>
            <li><a href=""><?php echo trans('messages.menu_contacts')?></a></li>
            <li><a href=""><?php echo trans('messages.menu_about')?></a></li>
        </ul>

        <a href="<?php echo '/services/'.substr(Request::url(), -2)?>"
           class="disappearing"><?php echo trans('messages.services')?></a>
        <a href="ru" class="disappearing">ru</a>
        <a href="en" class="disappearing">en</a>
        <a href="uk" class="disappearing">uk</a>
    </div>

    <div>
        <a href="<?php echo '/main/'.substr(Request::url(), -2)?>" class="logo">MS</a>
    </div>

    <div class="menu">
        <a href="" class="disappearing">+806293058610</a>
        <a href="#openModal"><?php echo trans('messages.enroll')?></a>
    </div>
</div>

@section('body-content')
@show

<div class="buy">
    <div class="inside_headline">
        <?php echo trans('messages.fitting_title')?>
    </div>
    <div class="inside_text">
        <?php echo trans('messages.fitting_title_text')?>
    </div>
    <div>
        <a href="#openModal" class="apply"><?php echo trans('messages.enroll')?></a>
    </div>
</div>

<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo trans('messages.record')?></h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo '/register/'.substr(Request::url(), -2)?>">
                    <input type="text" name="email" placeholder="<?php echo trans('messages.your_email')?>">
                    <br/>
                    <input type="text" name="name" placeholder="<?php echo trans('messages.your_name')?>">
                    <br/>
                    <input type="submit" value=<?php echo trans('messages.enroll')?>>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="success" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo trans('messages.success')?></h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <div class="success">
                    <?php echo trans('messages.success_text')?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="error" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo trans('messages.error')?></h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <div class="error">
                    <?php echo trans('messages.error_text')?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="menu">
        <a href="<?php echo '/main/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_suits')?></a>
        <a href="<?php echo '/formal/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_formal')?></a>
        <a href="<?php echo '/casual/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_casual')?></a>
        <a href="<?php echo '/accessories/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_accessories')?></a>
        <a href="<?php echo '/repair/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_repair')?></a>
    </div>

    <div class="menu">
        <a href="<?php echo '/services/'.substr(Request::url(), -2)?>"><?php echo trans('messages.menu_services')?></a>
        <a href=""><?php echo trans('messages.menu_projects')?></a>
        <a href=""><?php echo trans('messages.menu_shop')?></a>
        <a href=""><?php echo trans('messages.menu_contacts')?></a>
        <a href=""><?php echo trans('messages.menu_about')?></a>
    </div>
</div>
</body>
</html>

