@extends('template.materi')
@section('title', 'Teorema Pythagoras')

@section('css')
@endsection

@section('main-content')

<div id="kuis"></div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="http://192.168.137.1:8000/library/tepian.min.js"></script>

<script>
    var elementKuis = document.getElementById("kuis");
    var kuis = new tepianKuis(elementKuis, {
        Key: "Urqm8RrsDpN7jp3hCs0SPGuf3u7IPsX9",
        quiz : "g2uJ",
        title:"Teorema"
        });
    kuis.on("finish",(data)=>{
        console.log(data);
    })
</script>
@endsection

@section('js')
@endsection
