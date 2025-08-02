<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>   
    <p>
        <?php
        class Food {
          
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドを定義する
            public function show_price() {
                return $this->price;
            }
        }
        class Animal {
          
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            // メソッドを定義する
            public function show_height() {
                return $this->height;
            }
        }

        // インスタンス化する
        $food = new Food('米5kg', '5000');
        $animal = new Animal('馬', '160', '470');

        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // メソッドにアクセスして実行する
        echo $food->show_price();  
        echo '<br>';
        echo $animal->show_height();  
        ?>
    </p>
</body>

</html>