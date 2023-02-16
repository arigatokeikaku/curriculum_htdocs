<?php

$colors = ["red"=>"赤","blue"=> "青", "green"=>"緑"];

var_dump($colors);
echo "<br />";

$colors["yellow"] ="黄";

var_dump($colors);

echo "<br />";
echo "<br />";


echo "<br />";
echo "プルリクエスト(マージリクエスト)とは";
echo "<br />";
echo "コミット・プッシュしたブランチ(ディレクトリ・フォルダ)を";
echo "<br />";
echo "別のブランチにマージするためにレビューしてもらい許可を仰ぐことです。";
echo "<br />";
echo "レビュー、確認していただいた上で、マージをしてもらう要求をすることです。";
echo "<br />";
echo "GitHubが最初に搭載した機能で、変更箇所が差分として表示されますが、";
echo "<br />";
echo "プルリクエストする際には、簡潔なタイトルを記載し、経緯や変更の範囲などを簡潔に記すのがマナーです。";
echo "<br />";
echo "<br />";
echo "<br />";
echo "Git Flowとは";
echo "<br />";
echo "git-flowとはGitにおけるリポジトリの分岐モデルであり、ルールのことを指します。
";
echo "<br />";
echo "master:
プロダクトとしてリリースする用のブランチ。リリースしたらタグ付けする。
※このブランチ上での作業は行わない";
echo "<br />";
echo "develop:
開発用ブランチ。コードが安定し、リリース準備ができたらreleaseへマージする。
※このブランチ上での作業は行わない";
echo "<br />";
echo "feature:
機能の追加用。developから分岐し、developにマージする。";
echo "<br />";
echo "hotfixes:
リリース後の緊急対応（クリティカルなバグフィックスなど）用。
masterから分岐し、masterにマージすると共にdevelopにマージする。";
echo "release:
プロダクトリリースの準備用。
リリース予定の機能やバグフィックスが反映された状態のdevelopから分岐する。
リリース準備が整ったら、masterにマージすると共にdevelopにマージする。
";
echo "<br />";
echo "<br />";

echo "<br />";
echo "CRONとは";
echo "<br />";
echo "多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるものです。";



// $countries = ["America","Japan","China","Korea"];

// var_dump($countries);
// echo "<br />";

// $fruits = ["apple"=>"りんご","orange"=> "みかん", "grape"=>"ぶどう"];

// // 0番目のりんごを出力
// echo $fruits["apple"];
// echo "<br />";
// // 1番目のみかんを出力
// echo $fruits["orange"];
// echo "<br />";
// // 2番目のぶどうを出力
// echo $fruits["grape"];
// echo "<br />";
// // 配列全体を出力
// var_dump($fruits);
// echo "<br />";

// $fruits["peach"] ="もも";

// var_dump($fruits);




?>