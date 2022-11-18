    <?php
class Model{
    public function __construct() {
		global $db;
		$class = get_class($this);
		$table = strtolower($class);

		$st = $db->prepare("SELECT * from $table");
		$st->execute();

		$row = $st->fetch(PDO::FETCH_ASSOC);
		foreach($row as $key => $value)
			$this->$key = $value; 
	}

    function __toString(){
        $s = "<tr>";
        foreach(get_object_vars($this) as $attr=>$value){
            $s .= "<td>";
            if(is_array($value)){
                foreach($value as $atomicValue){
                    $s .= $atomicValue;
                }
            }
            else{
                $s .= $value;
            }
            $s .= "</td>";

        }
        $s .= "</tr>";
        return $s;
    }

    public static function form() {
        global $db;
        $class = get_called_class();
        $table = strtolower($class);

        $stm = $db->prepare("select column_name from information_schema.columns 
                             where table_name=:table");
        $stm->bindValue(":table",$table);
        $stm->execute();


        echo "<form method='post' action='.?table=$table'>";
        while($row = $stm->fetch(PDO::FETCH_ASSOC)){
            if(substr($row["column_name"], 0, 2) != "id"){
                echo "<div>";
                echo "<label for='".$row["column_name"]."'>".$row["column_name"]."</label>";
                echo "<input name='".$row["column_name"]."'/>";
                echo "</div>";
            }   
        }
        echo "<div><input type='submit' value='Ajouter'/></div>";
        echo "</form>";     
    }

    public static function all(){
        $class = get_called_class();
        $table = strtolower($class);
        global $db;
        $stm = $db->prepare("Select * from $table");
        $stm->execute();
        $lestables = array();
        while($row = $stm->fetch(PDO::FETCH_ASSOC)){

    
            $v = new $class();
            
            foreach($row as $key=>$value){
                $v->$key = $value;
            }  
            array_push($lestables, $v);  
        }

        return $lestables;
    }
}