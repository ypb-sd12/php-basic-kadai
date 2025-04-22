<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name, $price;
            public function show_price()
            {
                echo $this->price;
            }
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }
        class Animal
        {
            private $name, $height, $weight;
            public function show_height()
            {
                echo $this->height;
            }
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        $food = new Food("りんご", 150);
        $animal = new Animal("ぞう", 100, 200);
        print_r($food);
        echo  "<br>";
        print_r($animal);
        echo  "<br>";
        $food->show_price();
        echo "<br>";
        $animal->show_height();
        ?>
    </p>
</body>

</html>