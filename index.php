<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chinese Zodiac for loop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h2>Chinese Zodiac for loop</h2>
        <table>
            <thead>
                <tr>
                    <?php
                    // Array storing Chinese Zodiac signs and their corresponding image files
                    $zodiacs = [
                        "Rat" => "rat.jpg",
                        "Ox" => "ox.jpg",
                        "Tiger" => "tiger.jpg",
                        "Rabbit" => "rabbit.jpg",
                        "Dragon" => "dragon.jpg",
                        "Snake" => "snake.jpg",
                        "Horse" => "horse.jpg",
                        "Goat" => "goat.jpg",
                        "Monkey" => "monkey.jpg",
                        "Rooster" => "rooster.jpg",
                        "Dog" => "dog.jpg",
                        "Pig" => "pig.jpg"
                    ];

                    // Loop through the array to display headers and images
                    foreach ($zodiacs as $sign => $image) {
                        echo "<th>";
                        echo "<div class='sign-name'>$sign</div>";
                        echo "<img src='images/$image' alt='$sign'>";
                        echo "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $start_year = 1912;
                $end_year = 2021; // Task specification

                // For loop to generate rows of years grouped by the 12 zodiac columns
                for ($year = $start_year; $year <= $end_year; $year += 12) {
                    echo "<tr>";
                    for ($i = 0; $i < 12; $i++) {
                        $current_year = $year + $i;
                        echo "<td>";
                        if ($current_year <= $end_year) {
                            echo $current_year;
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>