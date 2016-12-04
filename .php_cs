<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,                            // @PSR2ルールを全て適用
        'blank_line_after_opening_tag' => true,     // PHP開始タグ（<?php)の後に改行を入れる
        'function_typehint_space' => true,          // 関数の仮引数のカンマ前はスペースで開ける
        'no_extra_consecutive_blank_lines' => true, // 不要な空行は削除する
        'single_quote' => true,                     // 変数展開の無い単純文字列はシングルクォートで統一
        'binary_operator_spaces' => true,           // 四則演算の演算子前後はスペースで開ける
        'ereg_to_preg' => true,                     // deprecatedなereg関数をpregに置き換える
        'concat_space' => array('spacing' => 'one') // 文字列結合時はピリオドの前後をスペースで開ける
    ));
