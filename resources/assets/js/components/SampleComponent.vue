<template>
<h2>Hello Mr. {{name}}</h2>    
</template>
<script>
export default{
	mounted(){
		console.log('Hello from sample component!!!');
	},
	data(){
		return{
			name:"Arush Lilhare"
		}
		
	}
}
</script>
<style type="text/css" scoped></style>