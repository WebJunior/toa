<?php
    $list_opt=array(
        array("fa-solid fa-users","User","1","deepskyblue"),
        array("fa-solid fa-table-cells","Category","2","red"),
        array("fa-solid fa-table-list","Product","3","gold"),
        array("fa-solid fa-file-contract","Contact","4","#58D68D"),
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOA-Admin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="{{asset('js\tinymce\js\tinymce\tinymce.min.js')}}"></script>
    <link rel="icon" href="{{URL('css/file.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    {{-- <link rel="stylesheet" href="css/style-invoice.css"> --}}
</head>
<body>
    <div class="main">
        <div class="log-out">
            <i class="fa-regular fa-circle-left"></i>
        </div>
       <div class="bar1">
            <img src="{{URL('css/toa.jpg')}}" alt="">
       </div> 
       <div class="bar2">
            <div class="box">
                {{-- @foreach ($list_opt AS $val)
                <a href="{{route('admin.user')}}">
                    <div class="box1" style="background-color:{{$val[3]}}" data-opt="{{$val[2]}}" id='click'>
                            <i class="{{$val[0]}}"></i>
                            <p>{{$val[1]}}</p>
                    </div>
                </a>
                @endforeach --}}
                <a href="{{route('admin.user')}}">
                    <div class="box1" style="background-color:deepskyblue" data-opt="1" id='click'>
                        <i class="fa-solid fa-users"></i>
                        <p>Users</p>
                    </div>
                </a>
                <a href="{{route('admin.category')}}">
                    <div class="box1" style="background-color:red" data-opt="2" id='click'>
                        <i class="fa-solid fa-table-cells"></i>
                        <p>Category</p>
                    </div>
                </a>
                <a href="{{route('admin.product')}}">
                    <div class="box1" style="background-color:gold" data-opt="3" id='click'>
                        <i class="fa-solid fa-table-list"></i>
                        <p>Product</p>
                    </div>
                </a>
                <a href="{{route('admin.contact')}}">
                    <div class="box1" style="background-color:#58D68D" data-opt="4" id='click'>
                        <i class="fa-solid fa-file-contract"></i>
                        <p>Contact</p>
                    </div>
                </a>
            </div>
       </div>
    </div>
</body>
<script src="{{asset('js/admin/admin.js')}}"></script>
</html>