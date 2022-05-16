<template>
		<div class="container">
				<div class="row justify-content-center">
						<div class="col-sm-6">
								<form v-on:submit.prevent="submit">
										<div class="form-group row">
												<label for="title" class="col-sm-3 col-form-label">Title</label>
												<input type="text" class="col-sm-9 form-control" id="title" v-model="book.title">
										</div>
										<div class="form-group row">
												<label for="author" class="col-sm-3 col-form-label">Author</label>
												<input type="text" class="col-sm-9 form-control" id="author" v-model="book.author">
										</div>
										<div class="form-group row">
												<label for="year" class="col-sm-3 col-form-label">Year</label>
												<input type="text" class="col-sm-9 form-control" id="year" v-model="book.year">
										</div>
										<div class="form-group row">
												<label for="genre" class="col-sm-3 col-form-label">Genre</label>
												<input type="text" class="col-sm-9 form-control" id="country" v-model="book.genre">
										</div>
										<div class="form-group row">
												<label for="publisher" class="col-sm-3 col-form-label">Publisher</label>
												<input type="text" class="col-sm-9 form-control" id="publisher" v-model="book.publisher">
										</div>
										<div class="form-group row">
												<label for="isbn" class="col-sm-3 col-form-label">ISBN-13</label>
												<input type="text" class="col-sm-9 form-control" id="isbn" v-model="book.isbn">
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
								</form>
						</div>
				</div>
		</div>
</template>

<script>
		export default {
				props: {
						pri_Key: String
				},
				data: function () {
					return {
						book: {}
					}
				},
				methods: {
					getBooks() {
						axios.get('/api/books/' + this.pri_Key)
							.then((res) => {
								this.book = res.data;
							});
					},
					submit() {
						axios.put('/api/books/' + this.pri_Key, this.book)
							.then((res) => {
								this.$router.push({name: 'book.list'})
							});
					}
				},
				mounted(){
					this.getBooks();
				}
		}
</script>