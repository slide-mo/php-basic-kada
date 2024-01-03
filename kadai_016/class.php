<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題</title>
</head>
<body>
    <p>
        <?php
        // クラスを作成する
        class Food {
            // プロパティを定義する
            public $name;
            public $price;
            // メソッドを定義する
            public function show_price(int $price) {
                $this->price = $price;
                echo $this->price . '<br>';
            }
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        // インスタンス化する
        $food = new Food('potato' ,250);
        print_r($food);
        echo '<br>';

        // クラスを作成する
        class Animal {
            // プロパティを定義する
            public $name;
            public $height;
            public $weight;
            // メソッドを定義する
            public function show_height(int $height) {
                $this->height = $height;
                echo $this->height . '<br>';
            }
            // コンストラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        // インスタンス化する
        $animal = new Animal('dog' ,60, 5000);
        print_r($animal);
        echo '<br>';
        
        // メソッドへアクセスする
        $food->show_price(250);
        $animal->show_height(60);
        ?>
    </p>
</body>
</html>