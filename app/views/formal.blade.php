@extends('parent')
@section('title', trans('messages.formal'))

@section('head-content')
    <style>
        .headline{
            margin-top: 6%;
        }
        .block{
            justify-content: space-around;
        }
        .start_text {
            margin-bottom: 10%;
            margin-top: 0%;
        }
    </style>
@endsection

@section('body-content')
    <div class="headline">
        <?php echo trans('messages.formal')?>
    </div>

    <div class="start_text">
        <?php echo trans('messages.formal_start_text')?>
    </div>

    <div class="block">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.smoking')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.smoking_text')?>
            </div>
        </div>
        <img src="<?= asset('images/smoking.png') ?>" class="right_img">
    </div>

    <div class="block">
        <img src="<?= asset('images/wedding.png') ?>" class="left_img">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.wedding')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.wedding_text')?>
            </div>
        </div>
    </div>

    <div class="block">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.price')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.formal_price')?>
            </div>
        </div>
        <img src="<?= asset('images/tailcoat.png') ?>" class="right_img">
    </div>
@endsection