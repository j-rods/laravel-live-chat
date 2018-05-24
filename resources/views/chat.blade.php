<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <h1>HELLO</h1>
            <!-- <chat-message></chat-message> -->
            <chat-log :messages="messages"></chat-log>
            <chat-composer @messageSent="addMessage"></chat-composer>
        </div>
        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>