@if(Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "iconClass": "text-white",
            "iconClasses": {
                "error": "toast-error toastr-error",
                "info": "toast-info toastr-info",
                "success": "toast-success toastr-success",
                "warning": "toast-warning toastr-warning",
            },
        };

        toastr.success("{{ Session::get('success') }}", "Success");
    </script>
@endif

@if(Session::has('warning'))
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "iconClass": "text-white",
            "iconClasses": {
                "error": "toast-error toastr-error",
                "info": "toast-info toastr-info",
                "success": "toast-success toastr-success",
                "warning": "toast-warning toastr-warning",
            },
        };

        toastr.warning("{{ Session::get('warning') }}", "Warning");
    </script>
@endif

<script>
    window.addEventListener('toastr', function(e) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "iconClass": "text-white",
                "iconClasses": {
                    "error": "toast-error toastr-error",
                    "info": "toast-info toastr-info",
                    "success": "toast-success toastr-success",
                    "warning": "toast-warning toastr-warning",
                },
            };

            toastr.success(e.detail.message, "Success");
        });
</script>

@if(Session::has('success_swal'))
    <script>
        Swal.fire("Success", "{{ Session::get('success_swal') }}", 'success');
    </script>
@endif
@if(Session::has('info_swal'))
    <script>
        Swal.fire("Info", "{{ Session::get('info_swal') }}", 'info');
    </script>
@endif
@if(Session::has('error'))
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toastr-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "iconClass": "text-white",
        "iconClasses": {
            "error": "toast-error toastr-error",
            "info": "toast-info toastr-info",
            "success": "toast-success toastr-success",
            "warning": "toast-warning toastr-warning",
        },
    };

    toastr.error("{{ Session::get('error') }}", "Error");
</script>
@endif
@if ($errors->any())
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "iconClass": "text-white",
            "iconClasses": {
                "error": "toast-error toastr-error",
                "info": "toast-info toastr-info",
                "success": "toast-success toastr-success",
                "warning": "toast-warning toastr-warning",
            },
        };

        toastr.error("@foreach($errors->all() as $error) {{ $error }} <br> @endforeach", "Error");
    </script>
@endif

<script>
    function toastrSuccess(message)
    {
        toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "iconClass": "text-white",
                "iconClasses": {
                    "error": "toast-error toastr-error",
                    "info": "toast-info toastr-info",
                    "success": "toast-success toastr-success",
                    "warning": "toast-warning toastr-warning",
                },
            };

            toastr.success(message, "Success");
    }
</script>
