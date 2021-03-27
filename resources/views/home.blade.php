<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta name="viewport" content="width=device-width"/>

    <title>Kenkuboard</title>

    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet"/>
</head>
<body class="dark-mode" data-dm-shortcut-enabled="true" data-set-preferred-mode-onload="true">
<div class="page-wrapper">
    <div class="content-wrapper">
        <div class="container">
            <div class="row mt-20 justify-content-center">
                <div class="col-8">
                    <div class="row justify-content-center">
                        <form action="/" method="get">
                            <label for="search">Search</label>
                            <input type="text" name="search" id="search" class="form-control" value="{{ request('search') }}">
                        </form>
                    </div>
                    <div class="row mt-10">
                        @foreach($sounds as $sound)
                            <div class="col-3 p-5">
                                <audio src="{{ $sound['url'] }}"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="{{ $sound['name'] }}">
                                    {{ $sound['name'] }}
                                </button>
                            </div>
                        @endforeach
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                            <div class="col-3 p-5">
                                <audio src="/"></audio>
                                <button class="sound-btn btn btn-primary mw-full text-truncate" title="Yeet">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content wrapper end -->

</div>
<!-- Page wrapper end -->

<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('.sound-btn').on('click', function () {
        $(this).siblings('audio')[0].play();
    });
</script>
</body>
</html>
