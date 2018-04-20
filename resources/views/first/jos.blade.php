<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>
        <script src="my_jquery_functions.js"></script>
    </head>

    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$('p').click(function () {--}}
               {{--$(this).hide();--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}

    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$("#hide").click(function(){--}}
                {{--$("p").hide(1000);--}}
            {{--});--}}
            {{--$("#show").click(function(){--}}
                {{--$("p").show(500);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$('p').click(function () {--}}
                {{--$('.test').hide(1000);//the hide action has a speed of 1000--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}
    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$('button').click(function () {--}}
                {{--$('p').toggle(1000);//the hide and show action has a speed of 1000--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}
    {{--fade-in & out for boxes ,their speed... --}}
 <script>
     $(document).ready(function(){
       $('button').click(function () {
           $('#div1').fadeIn();
           $('#div2').fadeOut();
       });
     });
 </script>
</head>
<body>
<h1>We are here</h1>
  {{--<p>Click me</p>--}}
  {{--<p>Nah</p>--}}
  {{--<p>You got me!</p>--}}
<p class="test">click me!!</p>
<p>If you click on the "Hide" button, I will disappear.</p>
<button>Toggle between hiding and showing the paragraphs</button>

{{--<button id="hide">Hide</button>--}}
{{--<button id="show">Show</button>--}}

<div id="div1"
    style="width:80px;height:80px;display:none;background-color:#242aff;">

</div>
<div id="div2"
    style="background-color: #080808;width: 80px;height: 80px;display: none">
</div>
</body>
</html>