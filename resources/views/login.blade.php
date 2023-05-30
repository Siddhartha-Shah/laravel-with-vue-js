<html>
    <head>
       <script src="http://unpkg.com/vue@next"></script>
    </head>
    <body>
    <div id="app">{{ message }}</div>
    <script>
      const data = { message: "Hello World !" };
      new Vue({
        el: "#app",
        data: data
      });
    </script>
    </body>
</html>