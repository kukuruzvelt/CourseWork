@extends('parent')
@section('title', trans('messages.casual'))

@section('head-content')
    @parent
    <style>
        .headline {
            margin-top: 6%;
        }
        .block {
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
        <?php echo trans('messages.casual')?>
    </div>

    <div class="start_text">
        <?php echo trans('messages.casual_start_text')?>
    </div>

    <div class="block">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.casual')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.casual_text')?>
            </div>
        </div>
        <img src="<?= asset('images/block2.png') ?>" class="right_img">
    </div>

    <div class="block">
        <img src="<?= asset('images/block3.png') ?>" class="left_img">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.price')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.casual_price_text')?>
            </div>
        </div>
    </div>
@endsection