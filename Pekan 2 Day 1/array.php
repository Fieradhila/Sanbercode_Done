<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
        echo "<pre>";
        print_r($kids);
        print_r($adults);
        echo "</pre>";
         
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " . count($kids);
        echo "<br>";
        echo "<ol>"; 

        for ($x = 0; $x < count($kids); $x++) {
             echo "<li> $kids[$x] </li>";
        }

        echo "</ol>";
        
        echo "Total Adults: " . count($adults);
        echo "<br>";
        echo "<ol>";

        for ($x = 0; $x < count($adults); $x++) {
             echo "<li> $adults[$x] </li>";
        }

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $bio = [
            ["Name" => "Will Byers", "Age" => "12", "Aliases" => "Will the Wise", "Status" => "Alive"],
            ["Name" => "Mike Wheeler", "Age" => "12", "Aliases" => "Dungeon Master", "Status" => "Alive"],
            ["Name" => "Jim Hopper", "Age" => "43", "Aliases" => "Chief Hopper", "Status" => "Deceased"],
            ["Name" => "Eleven", "Age" => "12", "Aliases" => "El", "Status" => "Alive"]];

        foreach ($bio as $data) {
            echo 
            "Name : ", $data['Name'], "<br> 
            Age : ", $data['Age'], "<br> 
            Aliases : ", $data['Aliases'], "<br> 
            Status : ", $data['Status'], "<br> <br>";
        }
    ?>
</body>
</html>