<?php 
include 'db/Connection.php';

class Updates {
    
    public function getVersion() {
        try {

            $getUpdates = "SELECT * FROM updates ORDER BY date DESC";
            $db = $this->dataBase($getUpdates);

            $data = [];
            while ($update = mysqli_fetch_assoc($db)) {
                $getDescriptions = "
                    SELECT description.* 
                    FROM description 
                    WHERE description.update_id = {$update['id']}
                ";
                $dbDesc = $this->dataBase($getDescriptions);

                $descriptions = [];
                while ($description = mysqli_fetch_assoc($dbDesc)) {
                    $descriptions[] = $description;
                }

                $update['descriptions'] = $descriptions;
                $data[] = $update;
            }
            return $data;


        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function dataBase($query)
    {
        $db = new Connection;

        return $db->toDatabase($query);
    }
}
?>