<template>
	<div>

		<div >
			<div>
				<h1 class="subtitle">Define Your Product / Service </h1>
			</div>
			<div class="actions">
			Spend some time thinking about what it is you sell. Can you define it and write it in a few sentences?
			</div>

			<form method="post" action="api/tasks/1/actions/responses">
				<div class ="control">
					<input class="textarea" type="response" name="spend-some-time">
					<button type="submit" class="button is-info is-outlined">Save</button>
					<div class="task-complete">
						<button class="button is-primary is-right">Mark Task As Complete</button>
					</div>
				</div>
			</form>

			</div>
		</div>

	</div>

</template>


<script>
 export default {

 	// mounted() {
 	// 	axios.get(`/tasks/1/actions/responses`).then(
		// 		response => console.log(response.data));
 	// }
 }
</script>
