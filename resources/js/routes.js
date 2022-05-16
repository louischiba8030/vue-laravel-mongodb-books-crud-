export default {
	mode: 'history',
	routes: [
		{
			path: '/book',
			name: 'book.list',
			component: BooksListComponent
		},
		{
			path: '/book/:bookId',
			name: 'book.show',
			component: BookDetailsComponent,
			props: true
		},
		{
			path: '/book/create',
			name: 'book.create',
			component: BookCreateComponent
		},
		{
			path: '/book/:bookId/edit',
			name: 'book.edit',
			component: BookEditComponent,
			props: true
		},
	]
}