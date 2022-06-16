@extends('parent')
@section('title', trans('messages.main_title'))

@section('body-content')
@parent
<div class="text_on_img">
    <div>
        <?php echo trans('messages.suits')?>
    </div>
    <img src="<?= asset('images/start_img.png') ?>">
</div>

<div class="start_text">
    <?php echo trans('messages.start_text')?>
</div>

<div class="headline">
    <?php echo trans('messages.sewing_process')?>
</div>

<div class="grid">
    <div class="grid_block">
        <div class="inside_headline">
            <?php echo trans('messages.suit_order')?>
        </div>
        <div class="inside_text">
            <?php echo trans('messages.suit_order_text')?>
        </div>
    </div>
    <div class="center_grid_block">
        <div class="inside_headline">
            <?php echo trans('messages.fitting')?>
        </div>
        <div class="inside_text">
            <?php echo trans('messages.fitting_text')?>
        </div>
    </div>
    <div class="grid_block">
        <div class="inside_headline">
            <?php echo trans('messages.suit_ready')?>
        </div>
        <div class="inside_text">
            <?php echo trans('messages.suit_ready_text')?>
        </div>
    </div>
</div>

<div class="headline">
    <?php echo trans('messages.why')?>
</div>

<div class="block">
    <img src="<?= asset('images/block1.png') ?>" class="left_img">
    <div>
        <div class="inside_headline">
            <?php echo trans('messages.block1')?>
        </div>
        <div class="inside_text">
            <?php echo trans('messages.block1_text')?>
        </div>
    </div>
</div>

<div class="block">
    <div>
        <div class="inside_headline">
            <?php echo trans('messages.block2')?>
        </div>
        <div class="inside_text">
            <?php echo trans('messages.block2_text')?>
        </div>
    </div>
    <img src="<?= asset('images/block2.png') ?>" class="right_img">
</div>

<div class="block">
    <img src="<?= asset('images/block3.png') ?>" class="left_img">
    <div>
        <div class="inside_headline">
            <?php echo trans('messages.block3')?>
        </div>
        <div class="inside_text">
            <?php echo trans('messages.block3_text')?>
        </div>
    </div>
</div>

@endsection
