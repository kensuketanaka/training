# トレーニング

## FizzBuzz

1 ～ 100 までの数字のうち順番に

* 3 の倍数の場合に "Fizz" と表示する
* 5 の倍数の場合に "Buzz" と表示する
* 3 と 5 の公倍数の場合に "Fizz Buzz" と表示する
* 3 と 5 の両方の倍数でない場合には数字をそのまま表示する

### 実行方法

下記コマンドラインにて PHP により実行

> php execute.php fizzbuzz

execute.php の引数には下記が一致したものを指定する

* 第一引数に実行対象のクラス
* そのクラスが格納されたディレクトリ

第一引数に英数字以外を指定した場合にはそれが除去されてクラスの検索が行われる また小文字の大小を無視する

* fizzbuzz と fizzbuzz/ が同じとして判定
* fizzbuzz と FizzBuzz が同じとして判定