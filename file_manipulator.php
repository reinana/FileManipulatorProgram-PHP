<?php

// 引数の数をチェック
if ($argc < 3) {
    echo "Usage: php file_manipulator.php <command> <arguments...>\n";
    exit(1);
}

// コマンドを取得
$command = $argv[1];

// コマンドに応じて処理を分岐
switch ($command) {
    case 'reverse':
        if ($argc !== 4) {
            echo "Usage: php file_manipulator.php reverse <inputpath> <outputpath>\n";
            exit(1);
        }
        reverseFile($argv[2], $argv[3]);
        break;
    case 'copy':
        if ($argc !== 4) {
            echo "Usage: php file_manipulator.php copy <inputpath> <outputpath>\n";
            exit(1);
        }
        copy($argv[2], $argv[3]);
        break;
    case 'duplicate-contents':
        if ($argc !== 4) {
            echo "Usage: php file_manipulator.php duplicate-contents <inputpath> <n>\n";
            exit(1);
        }
        duplicateContents($argv[2], $argv[3]);
        break;
    case 'replace-string':
        if ($argc !== 5) {
            echo "Usage: php file_manipulator.php replace-string <inputpath> <needle> <newstring>\n";
            exit(1);
        }
        replaceString($argv[2], $argv[3], $argv[4]);
        break;
    default:
        echo "Unknown command: $command\n";
        exit(1);
}

function reverseFile($inputPath, $outputPath) {
    $content = file_get_contents($inputPath);
    if ($content === false) {
        echo "Failed to read from $inputPath\n";
        exit(1);
    }
    $reversedContent = strrev($content);
    if (file_put_contents($outputPath, $reversedContent) === false) {
        echo "Failed to write to $outputPath\n";
        exit(1);
    }
    echo "File reversed successfully.\n";
}

function duplicateContents($inputPath, $n) {
    $content = file_get_contents($inputPath);
    if ($content === false) {
        echo "Failed to read from $inputPath\n";
        exit(1);
    }
    $duplicatedContent = str_repeat($content, (int)$n);
    if (file_put_contents($inputPath, $duplicatedContent) === false) {
        echo "Failed to write to $inputPath\n";
        exit(1);
    }
    echo "File content duplicated successfully.\n";
}

function replaceString($inputPath, $needle, $newString) {
    $content = file_get_contents($inputPath);
    if ($content === false) {
        echo "Failed to read from $inputPath\n";
        exit(1);
    }
    $replacedContent = str_replace($needle, $newString, $content);
    if (file_put_contents($inputPath, $replacedContent) === false) {
        echo "Failed to write to $inputPath\n";
        exit(1);
    }
    echo "String replaced successfully.\n";
}

?>
