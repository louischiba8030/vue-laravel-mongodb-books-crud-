<template>
	<div class="container">
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<!-- id, title, author, year, genre, publisher, isbn-13, description -->
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Author</th>
					<th scope="col">Publisher</th>
					<th scope="col">ISBN-13</th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(book, index) in books" :key="index">
					<th scope="row">{{ book._id }}</th>
					<td>{{ book.title }}</td>
					<td>{{ book.year }}</td>
					<td>{{ book.author }}</td>
					<td>{{ book.genre }}</td>
					<td>
						<router-link v-bind:to="{name: 'book.details', params: { pri_Key: book._id }}">
							<button class="btn btn-primary">Show</button>
						</router-link>
					</td>
					<td>
						<router-link v-bind:to="{name: 'book.edit', params: { pri_Key: book._id }}">
							<button class="btn btn-success">Edit</button>
						</router-link>
					</td>
					<td>
						<button class="btn btn-danger" v-on:click="deleteBook(book._id)">Delete</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
export default {
	data: function () {
		return {
			books: []
		}
	},
	methods: {
		getBooks: async function() {
			const res = await axios.get('/api/books');
			console.log("res.data: ", res.data);

			this.books = res.data;
		},
		deleteBook: async function(pri_Key) {
			try {
				console.log("pKey: ", pri_Key);
				const res = await axios.delete('/api/books/' + pri_Key);
				this.getBooks();
			} catch (err) { throw err;}
		}
	},
	mounted() {
		this.getBooks();
	}
}
</script>
