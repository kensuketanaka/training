<?php

class FizzBuzz {

    const START = 1;
    const END = 100;
    const OUTPUT_3 = 'Fizz';
    const OUTPUT_5 = 'Buzz';
    const OUTPUT_3x5 = 'FizzBuzz';

    /**
     * 1～100 までの数字に応じた文字列を表示
     *  3 の倍数の場合に "Fizz" と表示する
     *  5 の倍数の場合に "Buzz" と表示する
     *  3 と 5 の公倍数の場合に "Fizz Buzz" と表示する
     *  3 と 5 の両方の倍数でない場合には数字をそのまま表示する
     */
    public function print_number() {
        $output = '';
        for ($i=self::START;$i<=self::END;$i++) {
            $text = $this->getPrintText($i);
            $output .= $i . ' ' . $text . PHP_EOL;
        }
        echo $output;
    }

    /**
     * 引数に応じた表示用文字列を取得
     * @param $number 表示順の数字
     * @return string
     */
    private function getPrintText($number = NULL) {
        $text = '';

        if(is_numeric($number)) {
            # 3 と 5 の公倍数の場合に "Fizz Buzz" と表示する
            if ($number % 15 === 0) {
                $text .= 'FizzBuzz';
            } else {
                # 3 の倍数の場合に "Fizz" と表示する
                if ($number % 3 === 0) {
                    $text .= 'Fizz';
                } # 5 の倍数の場合に "Buzz" と表示する
                elseif ($number % 5 === 0) {
                    $text .= 'Buzz';
                } # 3 と 5 の両方の倍数でない場合には数字をそのまま表示する
                else {
                    $text .= $number;
                }
            }
        }

        return $text;
    }
}