@section('main')
<script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $res['id'] }}"></script>


<form action="{{ route('/cart') }}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
@stop
