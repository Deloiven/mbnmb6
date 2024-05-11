// app/Http/Controllers/BookController.php
use App\Models\Book; // Import the model
use Illuminate\Support\Facades\Validator;

public function store(Request $request)
{
    // Validate the request data with rules and handle errors
    $validatedData = $this->validate($request, [
        'title' => ['required', 'string', 'max:255', 'unique:books'],
        'author_name' => ['required', 'string', 'max:100'],
        'genre' => ['required', 'string', 'in:fiction,non-fiction,classics,self_help']
    ]);
    // Create a new book instance with the validated data and save it in the database.
    $book = Book::create($validatedData);
    return view('form'); // You can replace this with a redirect or other response as needed.
}