@extends('parent')
@section('title', trans('messages.accessories_title'))

@section('head-content')
    <style>
        .block{
            justify-content: space-around;
        }
    </style>
@endsection

@section('body-content')
    <div class="start_text">
        <?php echo trans('messages.accessories_start_text')?>
    </div>

    <div class="block">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.certificates')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.certificates_text')?>
            </div>
        </div>
        <img src="<?= asset('images/certificate.png') ?>" class="right_img">
    </div>

    <div class="block">
        <img src="<?= asset('images/futures.png') ?>" class="left_img">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.futures')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.futures_text')?>
            </div>
        </div>
    </div>

    <div class="block">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.accessories')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.accessories_text')?>
            </div>
        </div>
        <img src="<?= asset('images/accessories.png') ?>" class="right_img">
    </div>
@endsection