<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="root">
      <ul>
        <li v-for="name in names" v-text="name"></li>
      </ul>

      <input type="text" id="input" v-model="newName">
      <button @click="addName">Add name</button>

    </div>

    <script src="https://unpkg.com/vue@2.3.3"></script>

    <script>

      var app = new Vue({
        el: '#root',
        data: {
          newName: '',
          names: ['Joe', 'Mary', 'Jane', 'Jack']
        },

        methods:{
          addName(){
            this.names.push(this.newName);
            this.newName = '';
          }

        },

        // mounted(){
        //   document.querySelector('#button').addEventListener('click', () => {
        //     let name = document.querySelector('#input');
        //
        //     app.names.push(name.value);
        //
        //     name.value = '';
        //
        //   });
        // }

      });
    </script>
  </body>
</html>
