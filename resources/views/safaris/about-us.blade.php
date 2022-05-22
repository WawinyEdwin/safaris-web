@extends('layout.index')

@section('content')

<style>
    a:hover {
        color: #4863a0;
    }
</style>

    <div class=" bg-primar navbar expand-lg ">
            <div class="container">
            <h5 class="text-white"> <a href="{{ url('/') }}" class="text-white" >Home </a>> About Okulink Safaris</h5>
            </div>
        </div>
        <br>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5>About Okulink Safaris</h5>
            <p>Okulink Safaris is about discoveries, exploration and transformation.</p>
            <br>
            <p>We believe that people are in pursuit of something new, identity and ability to transform themselves
                for better. We are on a journey of giving magical experiences through travel, branding
                and celebrating Africa's tourism industry.
            </p>
            <br>
            <h5>Why Us.</h5>
            <ul>
                <li>
                    <p>We have a huge collection of 100+ amazing local and international destinations just for you to discover and explore.</p>
                </li>
                <li>
                    <p>We pride ourselves for providing the best competitive prices and rates in the market</p>
                </li>
                <li>
                    <p>Our Customer Care representatives are hostpitable and are 24/7 available for any guidance and consultation.</p>
                </li>
                <li>
                    <p>We specialize in making the process of booking, travelling and staycation interesting easy and enjoyable.</p>
                </li>
                <li>
                    <p>We plan and market local road trips, tours across kenyan cities and rurals.</p>
                </li>
            </ul>
        
            <br>

            <h5>How to reach us for Assistance & Advertising</h5>
            <p>Contact us for more information at :</p>
            <ul>
                <li><b>Email: </b><a href="mailto:info@okulinksafaris.com" target="_blank">info@okulinksafaris.com</a></li>
                <li><b>Twitter: </b><a href="http://" target="_blank" rel="noopener noreferrer"></a></li>
                <li><b>Facebook: </b><a href="http://" target="_blank" rel="noopener noreferrer"></a></li>
                <li><b>Instagram: </b><a href="https://www.instagram.com/okulinksafaris" target="_blank">https://www.instagram.com/okulinksafaris</a></li>
                <li><b>Call/WhatsApp: </b>0742 659 292/ 0701 700 144</li>
            </ul>
        </div>
    </div>
</div>
@endsection