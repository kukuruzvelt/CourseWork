@extends('parent')
@section('title', trans('messages.services_title'))

@section('head-content')
<style>
    .headline{
        margin-top: 6%;
        margin-bottom: 3%;
    }
    .block{
        justify-content: space-around;
        margin-bottom: 0%;
    }
    .grid{
        margin-bottom: 0%;
    }
    .grid_block {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: none;
    }
    .center_grid_block{
        justify-content: center;
        display: flex;
        flex-direction: column;
        background: none;
        border-left: 1px solid black;
        border-right: 1px solid black;
        margin-right: 0%;
        margin-left: 0%;
    }
    .grid_block img {
        margin-top: 4%;
        margin-bottom: 4%;
        margin-left: 5%;
        margin-left: 13%;
        max-height: 550px;
        max-width: 400px;
    }

    .center_grid_block img {
        margin-top: 4%;
        margin-bottom: 4%;
        margin-left: 13%;
        max-height: 550px;
        max-width: 400px;
    }
</style>
@endsection

@section('body-content')
    <div class="headline">
        <?php echo trans('messages.services_headline')?>
    </div>

    <div class="block">
        <img src="<?= asset('images/block4.png') ?>" class="left_img">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.services_handmade')?>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="grid_block">
            <img src="<?= asset('images/block1.png') ?>" class="left_img">
            <div class="inside_headline">
                <?php echo trans('messages.formal')?>
            </div>
        </div>
        <div class="center_grid_block" >
            <img src="<?= asset('images/block2.png') ?>" class="left_img">
            <div class="inside_headline">
                <?php echo trans('messages.casual')?>
            </div>
        </div>
        <div class="grid_block">
            <img src="<?= asset('images/block3.png') ?>" class="left_img">
            <div class="inside_headline">
                <?php echo trans('messages.services_accessories')?>
            </div>
        </div>
    </div>

    <div class="block">
        <img src="<?= asset('images/block4.png') ?>" class="left_img">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.repair_headline')?>
            </div>
        </div>
    </div>
@endsection
