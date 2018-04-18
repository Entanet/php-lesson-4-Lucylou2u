 <?php

 class Book_Library
 {
    public $BookTitle;
    public $Author;
    public $Category;
    public $Published;
    public $Rating;
    public $Comments;  

    public function __construct()
    {
    	$this->connection = new PDO('mysql:host=138.68.142.216;dbname=lucy', 'tom', 'hardy');
    }

    public function show($id)
    {
        $stmt = $this->connection->prepare('SELECT * FROM books WHERE id = ?');
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll()[0];


        $this->BookTitle = $result['BookTitle'];
        $this->Author = $result['Author'];
        $this->Category = $result['Category'];
        $this->Releasedate = $result['Published'];
        $this->Rating = $result['Rating']
        


        return $this;
    }

    public function all()
    {
        $stmt = $this->connection->query('SELECT * FROM Book_Library'); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        
        foreach($rows as $result){
           $BookTitle = new BookTitle(); 
           $BookTitle->name = $result['BookTitle'];
           $BookTitle->ID = $result['ID'];
           $Book_Library[] = $books; 
        }

        return $Book_Library;       
    }
 }

