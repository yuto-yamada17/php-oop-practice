<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ユーザー管理プログラム</h1>
    <h2>自己紹介</h2>
    <?php


    //クラスの定義
    class User
    {
        //プロパティを定義
        public string $name;
        public int $age;

        //コンストラクタを定義
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        //自己紹介メソッド
        public function introduce()
        {
            echo "こんにちは、私は{$this->name}です。{$this->age} 歳です。<br>";
        }

        //成人判定メソッド
        public function isAdult()
        {
            return $this->age >= 18;
        }
    }

    //Userクラスのインスタンスを生成
    $user1 = new User("田中太郎", 25);
    $user2 = new User("佐藤花子", 17);
    $user3 = new User("鈴木一郎", 30);

    //メソッドの呼び出し
    $user1->introduce();
    $user2->introduce();
    $user3->introduce();

    echo "<h2>成人判定</h2>";
    //成人判定
    $users = [$user1, $user2, $user3];

    foreach ($users as $user) {
        if ($user->isAdult()) {
            echo $user->name . "さんは成人です。" . "<br>";
        } else {
            echo $user->name . "さんは未成年です。" . "<br>";
        }
    }

    ?>
</body>

</html>