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
        class Food {
            private string $name;
            private int $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(): void {
                echo $this->price . '<br>';
            }
        }

        class Animal {
            private string $name;
            private int $height;
            private int $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(): void {
                echo $this->height . '<br>';
            }
        }

        $food = new Food('ローストビーフ', 3000);
        $animal = new Animal('メル', 45, 9);

        print_r($food);
        echo('<br>');
        print_r($animal);
        echo('<br>');

        $food->show_price();
        $animal->show_height();
        ?>
    </p>
    
</body>
</html>