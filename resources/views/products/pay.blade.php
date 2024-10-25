@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    Pay with PayPal
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <script
            src="https://www.paypal.com/sdk/js?client-id=ATtgkBvtPFwOaw4Y-3BvzpzCbdlYv29p9Km1NI8AoeAKm4eGKgdMpH0hn01wuh8ibRDPz2SGpZKmDQkV&currency=USD"></script>
        <div id="paypal-button-container"></div>
        <script>
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "{{ Session::get('value') }}"
                            }
                        }]
                    });
                },
                // Finalize the transaction after payer approval
                onApprove: (data, actions) => {
                    return actions.order.capture().then(function (orderData) {

                        window.location.href = 'http://127.0.0.1:8000/products/success';
                    });
                }
            }).render('#paypal-button-container');
        </script>

    </div>
</div>
@endsection