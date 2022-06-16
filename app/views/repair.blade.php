@extends('parent')
@section('title', trans('messages.repair'))

@section('head-content')
    <style>
        .block{
            justify-content: space-around;
        }
    </style>
@endsection

@section('body-content')
    <div class="start_text">
        <?php echo trans('messages.repair_start_text')?>
    </div>

    <div class="block">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.repair_we')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.repair_list')?>
            </div>
        </div>
        <img src="<?= asset('images/repair.png') ?>" class="right_img">
    </div>

    <div class="block">
        <img src="<?= asset('images/terms.png') ?>" class="left_img">
        <div>
            <div class="inside_headline">
                <?php echo trans('messages.terms')?>
            </div>
            <div class="inside_text">
                <?php echo trans('messages.terms_text')?>
            </div>
        </div>
    </div>
@endsection
