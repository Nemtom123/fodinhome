/**
 * Created by tom on 2017.10.14..
 */
<script>
function myFunction() {
    swal({
        title: '',
        text: 'Sikeres Rögzítés!!!!',
        timer: 5000,
        onOpen: function () {
            swal.showLoading()
        }
    }).then(
        function () {},
        // handling the promise rejection
        function (dismiss) {
            if (dismiss === 'timer') {
                console.log('I was closed by the timer')
            }
        }
    )
}
</script>