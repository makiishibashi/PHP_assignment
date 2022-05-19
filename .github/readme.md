# アンケートフォーム
[]
## PHPでのアンケートフォーム    

# 苦労したところ
- アンケートの選択肢を配列にしようとして、最初は無意識にJSで書いてしまった。
途中でPHPで書き直してみたが、CSVに書き出した際に配列の値ではなく、順番の数字が表示されてしまった。
ここはまだ修正できていない。0番目の項目は0と出る挙動。
- 調べているとCSVに書き出すには、fputcsvという関数を使うようだが、使ってみても何も書き出されずに上手く扱えなかったので、fwriteのままにしている。
- 配列の表示形式に一部不具合はあるものの、PHPで最低限データのやりとりができる状態にはなった。

# こだわったところ
毎度、調べたり、詰んだりする時間が長く装飾にまで手が回らない。
唯一挑戦したこととしては、PHPでの配列を自分なりに実装してみたところ。