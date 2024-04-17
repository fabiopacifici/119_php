const { createApp } = Vue
createApp({
  data() {
    return {
      newTask: '',
      tasks: [],
      base_api_url: 'api.php',
      error: '',
      
    }
  },
  methods: {
    toggleTask(i){
      //task.done = !task.done
      
      this.tasks[i].done = !this.tasks[i].done;

      // TODO: make this persistant with axios 

    },

    deleteTask(i){
      // TODO: make the delete persistent via axios
    },
    addTask(){
      // without data persistancy
      //this.tasks.unshift({done: false, text: this.newTask});
      const data = {
        newTaskText: this.newTask
      }
      this.newTask = '';

      axios
      .post(this.base_api_url, data, { headers: {'Content-type' : 'multipart/form-data' } })
      .then(response => {
        console.log(response);
        this.tasks = response.data;
      })

    }
  },
  mounted(){
    axios.get(this.base_api_url)
    .then((result) => {
      console.log(result); 
      this.tasks = result.data;
    }).catch((err) => {
      console.log(err.message);
      this.error = err.message
    });
  }
}).mount('#app')

