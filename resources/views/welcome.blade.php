<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="root">
      <input type="text" id="input" v-model="message">

      <p>The value of the input is: @{{message}}</p>

    </div>

    <script src="https://unpkg.com/vue@2.3.3"></script>

    <script>

      new Vue({
        el: '#root',
        data: {
          message: 'Hello world'
        }
      })

    </script>
  </body>
</html>
