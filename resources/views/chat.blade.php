<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
        .list-group{
            overflow: auto;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container" >
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">Live Chat Room <div class="badge badge-pill badge-success">@{{ noOfOnlineUsers }}</div></li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message-component v-for="msg,index in chat.message" :color="chat.color[index]" :user="chat.user[index]" :key="msg.index">
                        @{{msg}}
                    </message-component>
                    
                  </ul>
                  <input type="text" @keyup.enter="send" name="input" v-model="message" placeholder="Enter your message hereee"/>
            </div>
            
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>