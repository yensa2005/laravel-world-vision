<script>
    $("#selectAll").click(function() {
        $("input[type=checkbox]").prop("checked", $(this).prop("checked"));
    });

    $("input[type=checkbox]").click(function() {
        if (!$(this).prop("checked")) {
            $("#selectAll").prop("checked", false);
        }
    });

    jackHarnerSig();
</script>
<script src="./assets/libs/js/vendor.bundle.base.js"></script>
<script src="./assets/js/demo.js"></script>
{{-- <script src="./assets/libs/ckeditor/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
