
var app = new Vue({
    el: '#app',
    data: {
    
    },
    created: {
      axios:get('https://flynn.boolean.careers/exercises/api/array/music')
  .then(function (response) {
    // handle success
    console.log(response);
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
    }
    
  })



