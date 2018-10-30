<template>
 	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All to do tasks <span style="float: right;"><a href="#addModal" data-toggle="modal">Add task</a></span></div>

                    <div class="card-body">
                        <ul class="list-group">
                        	<li class="list-group-item" v-for="t in tasks.data">{{ t.id }} - {{ t.name }} <span class="pull-right crud"><button class="btn btn-primary btn-xs">View</button> | <button class="btn btn-info btn-xs">Edit</button> | <button class="btn btn-danger btn-xs">Delete</button></span></li>
                        </ul>
                        <pagination :data="tasks" @pagination-change-page="getResults"></pagination>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal">
        	<addTask @recordadded="refreshrecord"></addTask>
        </div>
    </div>
</template>
<script type="text/javascript">
	Vue.component('pagination', require('laravel-vue-pagination'));
	Vue.component('addTask', require('./addModalComponent.vue'));
	export default{
		data(){ 
			return{
				tasks:{},
			}

		},
		methods:{
			// Our method to GET results from a Laravel endpoint
			getResults(page = 1) {
				axios.get('http://127.0.0.1:8000/tasks?page=' + page)
					.then(response => this.tasks = response.data)
					.catch(error => console.log(error));
			},
			refreshrecord(record){
				this.tasks = record.data;
				
			}
		},
		created(){ //We can use here mounted also
			//Fetch data start here by axios
			axios.get('http://127.0.0.1:8000/tasks')
			.then((response) => this.tasks = response.data)
			.catch((error) => console.log(error));
			console.log('Tasks controller loaded....');
		}
	}
</script>
<style type="text/css" scoped>
	.crud{
		float: right;
	}
</style>