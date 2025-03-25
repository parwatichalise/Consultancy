<script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('plugins/nprogress/nprogress.js') }}"></script>
<!-- jQuery custom content scroller -->
<script src="{{ asset('plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('dist/js/custom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#logOutBtn').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{ route('logout') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}' // Include CSRF token
                },
                success: function() {
                    window.location.href = '/'; // Redirect to home or login page
                },
                error: function(xhr) {
                    alert('Logout failed: ' + xhr.responseJSON.message);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#alert').fadeOut();
        }, 5000);
        $('.close').on('click', function() {
            $('#alert').fadeOut();
        });
    });
</script>