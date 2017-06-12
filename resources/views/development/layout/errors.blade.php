<script type="text/javascript">
    $(document).ready(function(){
    @if (count($errors) > 0)
            @foreach ($errors-> all() as $error)
            $.toast({
            heading: 'Error',
                    text: '{{$error}}',
                    icon: 'error',
                    loader: true, // Change it to false to disable loader
                    position: 'top-right',
                    showHideTransition: 'slide',
                    hideAfter: 10000,
                    allowToastClose:true,
                    loaderBg: '#DB6C0F'  // To change the background
            });
    @endforeach
            @endif
    });
    @if (session('status'))
            $.toast({
            heading: 'Success',
                    text: '{{session('status')}}',
                    icon: 'success',
                    loader: true, // Change it to false to disable loader
                    position: 'top-right',
                    showHideTransition: 'slide',
                    hideAfter: 10000,
                    allowToastClose:true,
                    loaderBg: '#DB6C0F'  // To change the background
            });
    @endif
        @if (session('info'))
            $.toast({
            heading: 'info',
                    text: '{{session('info')}}',
                    icon: 'info',
                    loader: true, // Change it to false to disable loader
                    position: 'top-right',
                    showHideTransition: 'slide',
                    hideAfter: 10000,
                    allowToastClose:true,
                    loaderBg: '#DB6C0F'  // To change the background
            });
    @endif
</script>