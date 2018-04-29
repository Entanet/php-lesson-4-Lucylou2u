 <?php

 class Books
 {
    public $bookTitle;
    public $author;
    public $category;
    public $published;
    public $rating;
    public $comments;  

    public function __construct()
    {
    	$this->connection = new PDO('mysql:host=138.68.142.216;dbname=lucy', 'tom', 'hardy');
    }

    public function show($id)
    {
        $stmt = $this->connection->prepare('SELECT * FROM book_library WHERE id = ?');
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll()[0];


        $this->bookTitle = $result['book_title'];
        $this->author = $result['author'];
        $this->category = $result['category'];
        $this->published = $result['published'];
        $this->rating = $result['rating'];
        


        return $this;
    }

    public function all()
    {
        $stmt = $this->connection->query('SELECT * FROM book_library'); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        
        foreach($rows as $result){
           $bookTitle = new bookTitle(); 
           $booktitle->name = $result['book_title'];
           $booktitle->id = $result['id'];
           $book_library[] = $Books; 
        }

        return $book_library;       
    }
 }

