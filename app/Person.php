 <?php

 class Person
 {
    public $name;
    public $age;
    public $gender;
    public $postcode;
    public $move;
    public $id;  

    public function __construct()
    {
    	$this->connection = new PDO('mysql:host=138.68.142.216;dbname=entanet', 'tom', 'hardy');
    }

    public function show($id)
    {
        $stmt = $this->connection->prepare('SELECT * FROM people WHERE id = ?');
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll()[0];

        $this->name = $result['firstname'] . ' ' . $result['lastname'];
        $this->id = $result['id'];

        return $this;
    }

    public function all()
    {

        $stmt = $this->connection->query('SELECT * FROM people'); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        
        foreach($rows as $result){
           $person = new Person(); 
           $person->name = $result['firstname'] . ' ' . $result['lastname'];
           $person->id = $result['id'];
           $people[] = $person; 
        }

        return $people;       
    }
 }

