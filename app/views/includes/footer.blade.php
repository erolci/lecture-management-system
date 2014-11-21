<script src="{{ asset('bower_components/flat-ui/dist/js/flat-ui.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-indicator/indicator.js') }}"></script>
<script src="{{ asset('bower_components/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('components/RestfulizerJs/jquery.restfulizer.js') }}"></script>

<script>
// restfulizer
$(".rest").restfulizer();

// input masks
$(".mask-time").mask("99:99");
$(".mask-date").mask("99/99/9999");
</script>
