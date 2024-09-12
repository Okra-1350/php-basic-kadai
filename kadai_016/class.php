<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHPkadai_016</title>
</head>

<body>
  <P>
    <?php
    //クラスを定義する①
    class Food{
      // プロパティを定義する
      private $name;
      private $price;
      // メソッドを定義する
    public function show_price(int $price) {
      $this->price = $price;
    }

    //コンストラクタを定義する
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
    }

    //インスタント化する
    $food = new Food('potato',250);

    //インスタンス$foodの各プロパティの値を出力する
    print_r($food);
    ?>
  </p>

  <p>
    <?php
    //クラスを定義する②
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
    public function show_height(int $height) {
      $this->height = $height;
    }

    //コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }

  //インスタント化する
  $animal = new Animal('dog',60,5000);

  //インスタンス$foodの各プロパティの値を出力する
  print_r($animal);
    ?>
  </p>

</body>

</html>