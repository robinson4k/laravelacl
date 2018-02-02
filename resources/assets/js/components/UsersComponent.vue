<template>
    <div class="container">
        <div class="row">
			<div class="col-md-12">
				<!-- <pre>{{ [sortProperty, sortDirection] | json }}</pre> -->
			</div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users Component</div>

                    <div class="panel-body">
						<div class="table-responsive">
		                    <table class="table table-condensed">
		                        <thead>
		                            <tr>
		                                <th>ID</a></th>
										<th>Nome</a></th>
		                                <th>E-mail</a></th>
		                            </tr>
		                        </thead>
		                        <tbody>
	                                <tr v-for="user in users">
	                                    <td>{{ user.id }}</td>
										<td>{{ user.name }}</td>
	                                    <td>{{ user.email }}</td>
	                                </tr>
		                        </tbody>
		                    </table>
		                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped="">

</style>

<script>
    export default {
		props: ['users'],




        mounted() {
			this.$http.get('/api/usuarios/listar').then((req) => this.users = req.data);
			// console.log('Component mounted.');
        }
    }
</script>
