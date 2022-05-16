<template>
		<div class="container">
				<div class="row justify-content-center">
						<div class="col-sm-6">
								<form>
										<div class="form-group row border-bottom">
												<label for="_id" class="col-sm-3 col-form-label">_id</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="_id"
															 v-model="book._id">
										</div>
										<div class="form-group row border-bottom">
												<label for="title" class="col-sm-3 col-form-label">Title</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="title"
															 v-model="book.title">
										</div>
										<div class="form-group row border-bottom">
												<label for="author" class="col-sm-3 col-form-label">Author</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="author"
															 v-model="book.author">
										</div>
										<div class="form-group row border-bottom">
												<label for="year" class="col-sm-3 col-form-label">Year</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="year"
															 v-model="book.year">
										</div>
										<div class="form-group row border-bottom">
												<label for="genre" class="col-sm-3 col-form-label">Genre</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="genre"
															 v-model="book.genre">
										</div>
										<div class="form-group row border-bottom">
												<label for="publisher" class="col-sm-3 col-form-label">Publisher</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="publisher"
															 v-model="book.publisher">
										</div>
										<div class="form-group row border-bottom">
												<label for="isbn" class="col-sm-3 col-form-label">ISBN-13</label>
												<input type="text" class="col-sm-9 form-control-plaintext" readonly id="isbn"
															 v-model="book.isbn">
										</div>
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
						book: []
					}
				},
				methods: {
					getBooks() {
						axios.get('/api/books/' + this.pri_Key)
							.then((res) => {
								console.log("### JS debug ###");
								console.log("res.data: ", res.data);
								console.log("### JS debug ###");
								this.book = res.data;
							});
					}
				},
				mounted () {
					this.getBooks();
				}
		}
</script>