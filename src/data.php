// database/migrations/_create_books_table.php
public function up()
{
    Schema::create('books', function (Blueprint $collection) {
        $collection->timestamps();
        $collection->string('title');
        $collection->string('author_name');
        $collection->string('genre');
    });
}