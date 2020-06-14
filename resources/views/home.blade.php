@extends('admin.app')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/helper.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css"
    integrity="sha256-sEGfrwMkIjbgTBwGLVK38BG/XwIiNC/EAG9Rzsfda6A=" crossorigin="anonymous" />

<style>
    ul {
        list-style-type: none;
    }

    li {
        display: inline-block;
    }
</style>
@endsection
@section('content')
<div class="container">

    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="container">

            <div class="page-header">
                <h1><i class="fa fa-image" aria-hidden="true"></i> Generate Meme</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-card">

                                        @if (\Session::has('success'))
                                        <div class="alert alert-success">

                                            {!! \Session::get('success') !!}

                                        </div>
                                        @elseif(\Session::has('error'))
                                        <div class="alert alert-danger">

                                            {!! \Session::get('error') !!}

                                        </div>
                                        @endif
                                        <h2 class="fs-title">Select base image for meme or upload
                                            {!! Form::open(array('url' => route('upload-image'),'files'=>'true' )) !!}
                                            {!! Form::file('images[]',['multiple']) !!}
                                            {!! Form::submit('Upload Image',['class'=>'btn btn-primary']) !!}
                                            {!! Form::close() !!}
                                          
                                        {!! Form::open(array('url' => '#','id'=>'select_image' )) !!}
                                        <ul class="mt-5">
                                            @php
                                            $pictures = App\Models\Pictures::where('type', 2)->get();
                                            @endphp
                                            @foreach ($pictures as $picture)
                                            <li>
                                                <label for='cb{{$picture->id}}'>
                                                    <input type='radio' value='{{$picture->id}}' name='image'
                                                        id='cb{{$picture->id}}' />
                                                    <img src="{{$picture->path}}" width="200px"
                                                        class="img-thumbnail rounded" /></label>
                                            </li>
                                            @endforeach
                                        </ul>
                                        {!! Form::close() !!}
                                        {{-- @for($i=1; $i < 20; $i++) <img src="uploads/base_images/{{$i}}.jpg"
                                        width="200px" height="200px" alt="..." class="img-thumbnail rounded">

                                        @endfor --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- BEGIN: Canvas rendering of generated Meme -->
                    <canvas id="meme" class="img-thumbnail img-fluid">
                        Unfortunately your browser does not support canvas.
                    </canvas>
                    <!-- END: Canvas rendering of generated Meme -->
                    <a href="javascript:;" class="btn btn-primary btn-block" id="file_name">
                        <i class="fa fa-download" aria-hidden="true"></i> Download

                        <input type="file" id="file" style="display: none" />
                        <input type="hidden" id="file_name" />

                    </a>

                    <img id="start-image" src="image.jpg" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mb-3">
                            <i class="fa fa-cogs" aria-hidden="true"></i> Build your meme
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <!--input type="text" class="form-control form-control-lg" value="Have you expected this to be" id="text_top" /-->
                                        <input type="text" id="text_top" class="form-control input-default "
                                            placeholder="Text One" stylr="border-radiour:4px;">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-3" for="text_top_offset">Offset from
                                                top:</label>
                                            <div class="col-md-7">
                                                <input style="width:100%" id="text_top_offset" type="range" min="0"
                                                    max="500" value="50" />
                                            </div>
                                            <div class="col-md-2 setting-value">
                                                <span id="text_top_offset__val">50</span>px
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <!--input type="text" class="form-control form-control-lg" value="funny?" id="text_bottom" /-->
                                        <input type="text" id="text_bottom" class="form-control input-default "
                                            placeholder="Text Two" stylr="border-radiour:4px;">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-3" for="text_bottom_offset">Offset from
                                                top:</label>
                                            <div class="col-md-7">
                                                <input style="width:100%" id="text_bottom_offset" type="range" min="0"
                                                    max="500" value="450" />
                                            </div>
                                            <div class="col-md-2 setting-value">
                                                <span id="text_bottom_offset__val">450</span>px
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-3" for="canvas_size">Meme size:</label>
                                            <div class="col-md-7">
                                                <input style="width:100%" id="canvas_size" type="range" min="0"
                                                    max="1000" value="500" />
                                            </div>
                                            <div class="col-md-2 setting-value">
                                                <span id="canvas_size__val">500</span>px
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-3" for="text_font_size">Font
                                                size:</label>
                                            <div class="col-md-7">
                                                <input style="width:100%" id="text_font_size" type="range" min="0"
                                                    max="72" value="28" />
                                            </div>
                                            <div class="col-md-2 setting-value">
                                                <span id="text_font_size__val">28</span>pt
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="control-label col-md-3" for="text_line_height">Line
                                                height:</label>
                                            <div class="col-md-7">
                                                <input style="width:100%" id="text_line_height" type="range" min="0"
                                                    max="100" value="15" />
                                            </div>
                                            <div class="col-md-2 setting-value">
                                                <span id="text_line_height__val">15</span>pt
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- End PAge Content -->
    </div>



    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Our Memes</h1>
                </div>
                <div class="card-body">
                    @php
                    $pictures = App\Models\Pictures::where('type', 1)->get();
                    @endphp
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach($pictures as $picture) <img src="{{$picture->path}}" width="200px" height="200px" alt="..."
                        class="img-thumbnail rounded">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"
    integrity="sha256-1OxYPHYEAB+HIz0f4AdsvZCfFaX4xrTD9d2BtGLXnTI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
    integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});



});

var canvas = document.getElementById("meme");
    ctx = canvas.getContext("2d");

    // core drawing function
    var drawMeme = function() {
        var img = document.getElementById("start-image");

        var fontSize = parseInt($("#text_font_size").val());

        var memeSize = parseInt($("#canvas_size").val());

        

        // set form field properties
        $("#text_top_offset").attr("max", memeSize);
        $("#text_bottom_offset").attr("max", memeSize);

        // initialize canvas element with desired dimensions
        canvas.width = memeSize;
        canvas.height = memeSize;

        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // calculate minimum cropping dimension
        var croppingDimension = img.height;
        if (img.width < croppingDimension) {
            croppingDimension = img.width;
        }

        ctx.drawImage(
            img,
            0,
            0,
            croppingDimension,
            croppingDimension,
            0,
            0,
            memeSize,
            memeSize
        );

        ctx.lineWidth = parseInt($("#text_stroke_width").val());
        ctx.font = fontSize + "pt sans-serif";
        ctx.strokeStyle = "black";
        ctx.fillStyle = "white";
        ctx.textAlign = "center";
        ctx.textBaseline = "top";

        var text1 = $("#text_top").val();
        text1 = text1.toUpperCase();
        x = memeSize / 2;
        y = parseInt($("#text_top_offset").val());

        var lineHeight = fontSize + parseInt($("#text_line_height").val());
        var maxTextAreaWidth = memeSize * 0.85;

        wrapText(ctx, text1, x, y, maxTextAreaWidth, lineHeight, false);

        ctx.textBaseline = "bottom";
        var text2 = $("#text_bottom").val();
        text2 = text2.toUpperCase();
        y = parseInt($("#text_bottom_offset").val());

        wrapText(ctx, text2, x, y, maxTextAreaWidth, lineHeight, true);
    };

    // build inner container for wrapping text inside
    var wrapText = function(
        context,
        text,
        x,
        y,
        maxWidth,
        lineHeight,
        fromBottom
    ) {
        var pushMethod = fromBottom ? "unshift" : "push";

        lineHeight = fromBottom ? -lineHeight : lineHeight;

        var lines = [];
        var y = y;
        var line = "";
        var words = text.split(" ");

        for (var n = 0; n < words.length; n++) {
            var testLine = line + " " + words[n];
            var metrics = context.measureText(testLine);
            var testWidth = metrics.width;

            if (testWidth > maxWidth) {
                lines[pushMethod](line);
                line = words[n] + " ";
            } else {
                line = testLine;
            }
        }
        lines[pushMethod](line);

        for (var k in lines) {
            context.strokeText(lines[k], x, y + lineHeight * k);
            context.fillText(lines[k], x, y + lineHeight * k);
        }
    };

    // read selected input image from upload field and display it in browser
    $("#imgInp").change(function() {
        var input = this;

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#start-image").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }

        window.setTimeout(function() {
            drawMeme();
            $("#image_credit").hide();
        }, 500);
    });

    // register event listeners

    $(document).on("change keydown keyup", "#text_top", function() {
        drawMeme();
    });

    $(document).on("change keydown keyup", "#text_bottom", function() {
        drawMeme();
    });

    $(document).on("input change", "#text_top_offset", function() {
        $("#text_top_offset__val").text($(this).val());
        drawMeme();
    });

    $(document).on("input change", "#text_bottom_offset", function() {
        $("#text_bottom_offset__val").text($(this).val());
        drawMeme();
    });

    $(document).on("input change", "#text_font_size", function() {
        $("#text_font_size__val").text($(this).val());
        drawMeme();
    });

    $(document).on("input change", "#text_line_height", function() {
        $("#text_line_height__val").text($(this).val());
        drawMeme();
    });

    $(document).on("input change", "#text_stroke_width", function() {
        $("#text_stroke_width__val").text($(this).val());
        drawMeme();
    });

    $(document).on("input change", "#canvas_size", function() {
        $("#canvas_size__val").text($(this).val());
        drawMeme();
    });

    var date = new Date("2016-07-27T07:45:00Z");
    var timestamp = date.getTime();

    // TODO: replace this with a server-side processing method
    $("#file_name").click(function(e) {
        $(this).attr("href", canvas.toDataURL());
        $(this).attr("download", "meme" + timestamp + ".png");
    });

    // init at startup
    window.setTimeout(function() {
        drawMeme();
    }, 100);

$('input:radio').change(function () {
    if($(this).is(':checked')) {
     //   alert($(this).siblings('.img-thumbnail').attr('src'));
      image =  $(this).siblings('.img-thumbnail').attr('src');
     $('#img-meme-bg').attr("src", image);
     $('#start-image').attr("src", image);
     $('#preview_image').attr('src', image);   
            drawMeme();
        
    }
});


$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

}); 
</script>


<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.min.js')}}"></script>
{{-- <script type="text/javascript" src="{{URL::asset('js/app1.js')}}"></script> --}}
<!-- Bootstrap tether Core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<!-- slimscrollbar scrollbar JavaScript -->
<!--Menu sidebar -->
<!--stickey kit -->
<!--Custom JavaScript -->

<script>
    function changeProfile() {
            $('#file').click();
        }
        $('#file').change(function () {
            if ($(this).val() != '') {
                upload(this);
    
            }
        });
        function upload(img) {
            var form_data = new FormData();
            form_data.append('file', img.files[0]);
            form_data.append('_token', '{{csrf_token()}}');
            $('#loading').css('display', 'block');
            $.ajax({
                url: "{{url('ajax-image-upload')}}",
                data: form_data,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.fail) {
                        $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
                        alert(data.errors['file']);
                    }
                    else {
                        $('#file_name').val(data);
                        $('#preview_image').attr('src', '{{asset('uploads')}}/' + data);
                    }
                    $('#loading').css('display', 'none');
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);
                    $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
                }
            });
        }
        
</script>

@endsection