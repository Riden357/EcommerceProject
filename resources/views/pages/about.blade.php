@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    About Us
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-leaf">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-3">
                    <h1 class="title text-uppercase mb-2">Fresh Food</h1>
                    <h5>
                        Organic Store
                    </h5>
                </div>
                <div class="col-md-10">
                    <p class="text-justify">
                        Welcome to Fresh Food, your trusted online marketplace for fresh and healthy food. We
                        are committed to providing high-quality produce, meats, fruits, and vegetables, directly sourced
                        from local farms. Our platform makes grocery shopping easier by bringing farm-fresh goods
                        straight to your doorstep, ensuring that you and your family enjoy the freshest ingredients.
                        Whether you're looking for seasonal fruits or organic vegetables, we’ve got you covered with
                        products that promote a healthier lifestyle.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="assets/img/fruits.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Straight from the Farm
                    </h5>
                    <p>
                        At Fresh Food, we believe in the power of fresh, local food. All of our products are
                        sourced directly from trusted farms, guaranteeing that the food you buy is fresh, flavorful, and
                        nutritious.
                    </p>
                    <p>
                        Our commitment to supporting local farmers ensures that every purchase you make helps to promote
                        sustainable agriculture, reduce food miles, and support rural communities.
                    </p>
                    <p>
                        From farm to table, we strive to deliver the highest quality produce with the shortest journey
                        in between.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center text-right mt-3">
                <div class="col-md-6">
                    <h5>
                        Know Your Farmers
                    </h5>
                    <p>
                        We want you to know exactly who is growing your food by having the farmers profile on each item
                        and farmers page. You’re welcome to visit the farms and see the love they put into growing your
                        food.
                    </p>
                    <p>
                        Our platform gives you the opportunity to learn more about the people who grow your food,
                        ensuring transparency and trust in every purchase. Each of our farmers adheres to strict
                        agricultural practices, focusing on ethical farming, organic produce, and environmentally
                        friendly methods. Get to know the farmers who are committed to bringing fresh, wholesome food
                        directly to your table.
                    </p>

                </div>
                <div class="col-md-4">
                    <img src="assets/img/vegetables.jpg" class="img-fluid">
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <!--                 <div class="col-md-4">
                    <img src="assets/img/fish.jpg" class="img-fluid">
                </div> -->
                <!--                 <div class="col-md-6">
                    <h5>
                        Improving Farmers’ Livelihood
                    </h5>
                    <p>
                        Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the
                        welfare of farmers by giving them the returns they deserve for their hard work.
                    </p>
                    <p>
                        Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the
                        welfare of farmers by giving them the returns they deserve for their hard work.
                    </p>
                    <p>
                        Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the
                        welfare of farmers by giving them the returns they deserve for their hard work.
                    </p>
                </div> -->
            </div>
        </div>
    </section>
</div>
@endsection