<x-layout.head title="{{$title}}"/>
<body class="bg-[#EFF3F4]">
    <x-navbar />
    <div id="main">
        {{$slot}}
    </div>
    {{-- Animate CSS --}}
    <script src="{{mix('js/app.js')}}"></script> 
</body>

</html>