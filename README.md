# FileManipulatorProgram-PHP
Recursionのバックエンドプロジェクト1 FileManipulatorProgramのPHPバージョンです。

## プログラムの概要

コマンドラインの入力で受け取った引数に基づく操作を行うプログラムです。
reverse, copy, duplicate-contents replace-stringというコマンドがあります。


## コマンド入力例

スクリプトを使用するためのコマンド入力例です。

1. ファイルの内容を逆にする
```   
php file_manipulator.php reverse input.txt output.txt
```
このコマンドは、input.txt の内容を逆にして output.txt に保存します。

2. ファイルをコピーする
```
php file_manipulator.php copy original.txt copy.txt
```
このコマンドは、original.txt を copy.txt にコピーします。

3. ファイルの内容を複製する
```
php file_manipulator.php duplicate-contents sample.txt 3
```
このコマンドは、sample.txt の内容を3回複製して、同じファイル(sample.txt)に上書き保存します。

4. ファイル内の文字列を置換する
```
php file_manipulator.php replace-string example.txt oldString newString
```
このコマンドは、example.txt 内の全ての oldString を newString に置き換えます。
